<?php
/**
 * Created by PhpStorm.
 * User: Rick Lan
 * Date: 21/03/2019
 * Time: 4:27 PM
 */
$OHPFolder = __DIR__ . DIRECTORY_SEPARATOR . 'OHPGen' . DIRECTORY_SEPARATOR;
include_once $OHPFolder . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';


$book = !isset($_GET['book'])? null : $_GET['book'];
$chapter = !isset($_GET['chapter'])? null : (int)$_GET['chapter'];
$startSeg = !isset($_GET['startseg'])? null : (int)$_GET['startseg'];
$endSeg = !isset($_GET['endseg'])? null : (int)$_GET['endseg'];
$lang = !isset($_GET['lang'])? 'en' : $_GET['lang'];

// if book is not set, return a list of books
if ($book === null) {
    $books = [];
    foreach (\Core\VerseTable::$table as $shortName => $details) {
        $books[$details[2]] =  $shortName . '-' . $details[0];
    }
    echo json_encode($books);
    exit();
}

// if lang is not set, use english.
if ($lang === 'en') {
    $bookFile = $OHPFolder . 'Core' . DIRECTORY_SEPARATOR . 'Assets' . DIRECTORY_SEPARATOR . 'books' . DIRECTORY_SEPARATOR . $book . '-NIV.txt';
} else if ($lang === 'zh') {
    $bookFile = $OHPFolder . 'Core' . DIRECTORY_SEPARATOR . 'Assets' . DIRECTORY_SEPARATOR . 'books' . DIRECTORY_SEPARATOR . $book . '-CUV.txt_utf8.txt';
} else {
    $bookFile = null;
}

if ($bookFile === null || !file_exists($bookFile)) {
    exit();
}

// parse txt file to arrays
$parsedBook = array();
$pattern = '/([0-9]{1,}:[0-9]{1,}) (.*)/';
preg_match_all($pattern, file_get_contents($bookFile), $result);
$chapterSegList = $result[1];
$aVerse = $result[2];
foreach ($chapterSegList as $key => $chapterSeg) {
    $aChapterSeg = explode(':', $chapterSeg);
    $parsedBook[$aChapterSeg[0]][$aChapterSeg[1]] = $aVerse[$key];
}

// if chapter is not set, return a list of chapters
if ($chapter === null) {
    echo json_encode(array_keys($parsedBook));
    exit();
}

// if seg is not set, return a list of seg of the chapter
if ($startSeg === null) {
    echo json_encode(array_keys($parsedBook[$chapter]));
    exit();
}

// if endseg is not set, return startseg verse
if ($endSeg === null) {
    echo json_encode($parsedBook[$chapter][$startSeg]);
    exit();
}

// if startseg and endsed are both set, return all the verse in between (inclusive)
$start = min($startSeg, $endSeg);
$end = max($startSeg, $endSeg);

$result = [];
for ($i = $start; $i <= $end; $i++) {
    $result[] = $parsedBook[$chapter][$i];
}
echo json_encode($result);
exit();