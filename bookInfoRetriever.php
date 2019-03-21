<?php
/**
 * Created by PhpStorm.
 * User: Rick Lan
 * Date: 21/03/2019
 * Time: 4:27 PM
 */
$OHPFolder = __DIR__ . DIRECTORY_SEPARATOR . 'OHPGen' . DIRECTORY_SEPARATOR;
include_once $OHPFolder . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';

$book = null;
$chapter = null;

if (!isset($_POST['book'])) {
    exit();
}

$book = $_POST['book'];

if (isset($_POST['chapter']) && !empty($_POST['chapter'])) {
    $chapter = (int) $_POST['chapter'];
}

$bookFile = $OHPFolder . 'Core' . DIRECTORY_SEPARATOR . 'Assets' . DIRECTORY_SEPARATOR . 'books' . DIRECTORY_SEPARATOR . $book . '-NIV.txt';

if (!file_exists($bookFile)) {
    exit();
}

$bookContent = explode("\n",file_get_contents($bookFile));

$result = array();
foreach($bookContent as $line) {
    $aContent = explode(' ', $line);
    $aChapterVerse = explode(':', $aContent[0]);
    $thisChapter = (int)$aChapterVerse[0];
    if (!isset($result[$thisChapter])) {
        $result[$thisChapter] = array();
    }
    $result[$thisChapter][] = (int)$aChapterVerse[1];
}


if (!isset($chapter)) {
 echo json_encode(array_keys($result));
} else {
    echo json_encode($result[$chapter]);
}
exit();
