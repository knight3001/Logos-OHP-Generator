<?php
/**
 * Created by PhpStorm.
 * User: Rick Lan
 * Date: 21/03/2019
 * Time: 4:27 PM
 */
$OHPFolder = __DIR__ . DIRECTORY_SEPARATOR . 'OHPGen' . DIRECTORY_SEPARATOR;
include_once $OHPFolder . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';


$book = empty($_GET['book'])? null : $_GET['book'];
$chapter = empty($_GET['chapter'])? null : (int)$_GET['chapter'];
$startSeg = empty($_GET['startseg'])? null : (int)$_GET['startseg'];
$endSeg = empty($_GET['endseg'])? null : (int)$_GET['endseg'];
$getVerse = empty($_GET['getverse'])? null : (bool)$_GET['getverse'];

// if book is not set, return a list of books
if ($book === null) {
    $books = [];
    foreach (\Core\VerseTable::$table as $shortName => $details) {
        $books[$details[2]] =  $shortName . '-' . $details[0];
    }
    echo json_encode($books);
    exit();
}

$enBookFile = $OHPFolder . 'Core' . DIRECTORY_SEPARATOR . 'Assets' . DIRECTORY_SEPARATOR . 'books' . DIRECTORY_SEPARATOR . $book . '-NIV.txt';
$zhBookFile = $OHPFolder . 'Core' . DIRECTORY_SEPARATOR . 'Assets' . DIRECTORY_SEPARATOR . 'books' . DIRECTORY_SEPARATOR . $book . '-CUV.txt_utf8.txt';

// parse en txt file to arrays
$parsedEnBook = array();
$pattern = '/([0-9]{1,}:[0-9]{1,}) (.*)/';
preg_match_all($pattern, file_get_contents($enBookFile), $result);
$chapterSegList = $result[1];
$aVerse = $result[2];
foreach ($chapterSegList as $key => $chapterSeg) {
    $aChapterSeg = explode(':', $chapterSeg);
    $parsedEnBook[$aChapterSeg[0]][$aChapterSeg[1]] = $aVerse[$key];
}

// parse zh txt file to arrays
$parsedZhBook = array();
$pattern = '/([0-9]{1,}:[0-9]{1,}) (.*)/';
preg_match_all($pattern, file_get_contents($zhBookFile), $result);
$chapterSegList = $result[1];
$aVerse = $result[2];
foreach ($chapterSegList as $key => $chapterSeg) {
    $aChapterSeg = explode(':', $chapterSeg);
    $parsedZhBook[$aChapterSeg[0]][$aChapterSeg[1]] = $aVerse[$key];
}

// if chapter is not set, return a list of chapters
if ($chapter === null) {
    echo json_encode(array_keys($parsedEnBook));
    exit();
}

// if seg is not set, return a list of seg of the chapter
if ($startSeg === null) {
    echo json_encode(array_keys($parsedEnBook[$chapter]));
    exit();
}

// if endseg is not set, return startseg verse
if ($endSeg === null) {
    if ($getVerse !== null && $getVerse) {
        displayVerse($book, $parsedEnBook, $parsedZhBook, $chapter, $startSeg);
        exit();
    }
    echo json_encode($parsedEnBook[$chapter][$startSeg]);
    exit();
}

if ($getVerse !== null && $getVerse) {
    displayVerse($book, $parsedEnBook, $parsedZhBook, $chapter, $startSeg, $endSeg);
    exit();
}

// if startseg and endsed are both set, return all the verse in between (inclusive)
$start = min($startSeg, $endSeg);
$end = max($startSeg, $endSeg);

$result = [];
for ($i = $start; $i <= $end; $i++) {
    $result[] = $parsedEnBook[$chapter][$i];
}
echo json_encode($result);
exit();


function displayVerse($book, $parsedEnBook, $parsedZhBook, $chapter, $startSeg, $endSeg = null)
{
    $bookDetails = null;
    $enTitle = null;
    $zhTitle = null;
    $title = '';
    $verse = '';
    foreach (\Core\VerseTable::$table as $shortName => $details) {
        if ($details[2] === $book) {
            $bookDetails = $details;
            continue;
        }
    }
    if ($bookDetails !== null) {
        if ($endSeg === null) {
            $endSeg = $startSeg;
        }

        // if startseg and endsed are both set, return all the verse in between (inclusive)
        $start = min($startSeg, $endSeg);
        $end = max($startSeg, $endSeg);

        $enTitle = $bookDetails[2] . ' ' . $chapter . ':' . $start . ((!empty($end) && $start !== $end)? '-' . $end : '');
        $zhTitle = $bookDetails[0] . ' ' . $chapter . '章' . $start . ((!empty($end) && $start !== $end)? '-' . $end : '') . '節';

        $title = $zhTitle . "\n" . $enTitle;

        $aVerse = array();
        for ($i = $start; $i <= $end; $i++) {
            $aVerse[] = "$chapter:$i " . $parsedZhBook[$chapter][$i] . "\n" . "$chapter:$i " . $parsedEnBook[$chapter][$i];
        }

        $verse = implode("\n", $aVerse);
    }

    echo json_encode($title . "\n\n" . $verse);
}