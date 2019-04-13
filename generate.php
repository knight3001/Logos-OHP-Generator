<?php
/**
 * Created by PhpStorm.
 * User: Rick Lan
 * Date: 22/03/2019
 * Time: 11:07 AM
 */

//var_dump($_POST);exit();

if (!isset($_POST)) {
    exit();
}

if (isset($_POST['useLogo'])) {
    define('USE_LOGO', true);
}

$filePrefix = 'OHP_';
if (isset($_REQUEST['type'])) {
    if ($_REQUEST['type'] === 'verse') {
        $filePrefix = 'Verse_';
    }
}

$OHPFolder = __DIR__ . DIRECTORY_SEPARATOR . 'OHPGen' . DIRECTORY_SEPARATOR;
include_once $OHPFolder . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';
include_once $OHPFolder . 'Core' . DIRECTORY_SEPARATOR . 'Slides' . DIRECTORY_SEPARATOR . 'Base.php';
use \Core\Slides;

define('HYMN_DIR', $OHPFolder . 'Core' . DIRECTORY_SEPARATOR . 'Assets' . DIRECTORY_SEPARATOR . 'hymns');
define('WORSHIP_DIR',$OHPFolder . 'Core' . DIRECTORY_SEPARATOR . 'Assets' . DIRECTORY_SEPARATOR . 'hymns');

$ppt = new \PhpOffice\PhpPresentation\PhpPresentation();

$ppt->getLayout()->setDocumentLayout(\PhpOffice\PhpPresentation\DocumentLayout::LAYOUT_SCREEN_16X9, true);
$ppt->removeSlideByIndex(0);

process($ppt, $_POST);

$fileName = $filePrefix . date('Y-m-d') . '.pptx';
$outputFile = __DIR__ . DIRECTORY_SEPARATOR . 'outputs' . DIRECTORY_SEPARATOR . $fileName;// . '.pptx';
@unlink($outputFile);
$oWriterPPTX = \PhpOffice\PhpPresentation\IOFactory::createWriter($ppt);
$oWriterPPTX->save($outputFile);
unset($oWriterPPTX);

$fp = fopen($outputFile, 'rb');
header('Content-Length: ' . filesize($outputFile));
header('Content-Type: application/force-download');
header('Content-Disposition: attachment; filename="'.$fileName.'"');

fpassthru($fp);
fclose($fp);
unlink($outputFile);
exit();

function process(&$ppt, $data)
{
    if (!empty($data)) foreach ($data as $section => $values) {
        if (isset($values['type'])) {
            if ($values['type'] === 'worship') {
                if (isset($values['collections'])) processWorship($ppt, $values['collections']);
            } elseif ($values['type'] === 'hymn') {
                if (isset($values['collections'])) processHymn($ppt, $values['collections']);
            } elseif ($values['type'] === 'reading') {
                if (isset($values['collections'])) processReading($ppt, $values['collections']);
            } elseif ($values['type'] === 'groupWorship') {
                if (isset($values['collections'])) processGroupWorship($ppt, $values['collections']);
            } elseif ($values['type'] === 'preach') {
                processPreach($ppt, $values);
            } elseif ($values['type'] === 'dedication') {
                processDedication($ppt, $values);
            } elseif ($values['type'] === 'weeklyVerse') {
                processWeeklyVerse($ppt, $values['collections']);
            } elseif ($values['type'] === 'report') {
                if (isset($values['collections'])) (new Slides\Report($ppt, array_values($values['collections'])))->add();
            } elseif ($values['type'] === 'intercession') {
                if (isset($values['collections'])) (new Slides\Intercession($ppt, $values['collections']))->add();
            } elseif ($values['type'] === 'opening') {
                (new Slides\Opening($ppt))->add();
            } elseif ($values['type'] === 'apostlesCreed') {
                (new Slides\ApostlesCreed($ppt))->add();
            } elseif ($values['type'] === 'tithing') {
                (new Slides\Tithing($ppt))->add();
            } elseif ($values['type'] === 'visitor') {
                (new Slides\Visitor($ppt))->add();
            } elseif ($values['type'] === 'baptize') {
                if (isset($values['collections'])) (new Slides\Baptized($ppt, array_values($values['collections'])))->add();
            } elseif ($values['type'] === 'lordsPrayer') {
                (new Slides\LordsPrayer($ppt))->add();
            } elseif ($values['type'] === 'ending') {
                (new Slides\Ending($ppt))->add();
            }
        }
    }
}

function processWorship(&$ppt, $collections)
{
    if (!empty($collections)) foreach ($collections as $song) {
        (new Slides\Worship($ppt, $song))->add();
    }
}

function processHymn(&$ppt, $collections)
{
    if (!empty($collections)) foreach ($collections as $song) {
        (new Slides\Hymn($ppt, $song))->add();
    }
}

function processReading(&$ppt, $collections, $getObj = false)
{
    $objs = array();
    if (!empty($collections)) foreach ($collections as $readingDetails) {
        $book = $readingDetails['book'];
        $chapter = $readingDetails['chapter'];
        $startSeg = $readingDetails['start'];
        $endSeg = $readingDetails['end'];
        if (!empty($book) && !empty($chapter) && !empty($startSeg)) {
            $Verse = Slides\Verse::LoadByBookName(
                $ppt,
                $book, // book
                $chapter, // chapter
                $startSeg, // start seg
                $endSeg  // end seg
            );
            if ($Verse !== null) {
                if (!$getObj) {
                    $Verse->add();
                }
                $objs[] = $Verse;
            }
        }
    }
    if ($getObj) {
        return $objs;
    }
}

function processGroupWorship(&$ppt, $collections)
{
    (new Slides\GroupWorship($ppt, $collections['group'], $collections['song']))->add(); // 獻詩
}

function processPreach(&$ppt, $collections)
{
    $preacher = $collections['preacher'];
    $title = $collections['title'];
    $preface = [];
    $conclusion = [];
    $outlines = array();
    if (isset($collections['preface'])) {
        $preface = processReading($ppt, $collections['preface']['collections'], true);
    }
    if (isset($collections['conclusion'])) {
        $conclusion = processReading($ppt, $collections['conclusion']['collections'], true);
    }
    if (isset($collections['outline'])) foreach ($collections['outline'] as $outline) {
        $outlineTitle = $outline['title'];
        $outlineReadings = isset($outline['collections'])? $outline['collections'] : array();
        $outlines[$outlineTitle] = processReading($ppt, $outlineReadings, true);
    }

    (new Slides\Preach( // 講道
        $ppt,
        $title,
        $preacher,
        $preface,
        $outlines,
        $conclusion
    ))->add();
}

function processDedication(&$ppt, $values)
{
    $summary = $values['summary'];
    $collections = $values['collections'];
    $breakdown = array();
    foreach ($collections as $data) {
        if (!empty($data['type']) && !empty($data['sum'])) {
            $breakdown[$data['type']] = $data['sum'];
        }
    }
    (new Slides\Dedication(
        $ppt,
        $summary,
        $breakdown
    ))->add();
}

function processWeeklyVerse(&$ppt, $values)
{
    (new Slides\WeeklyVerse($ppt, $values['verse'], $values['chapter']))->add(); // 金句
}