<?php
/**
 * Created by IntelliJ IDEA.
 * User: Rick Lan
 * Date: 11/06/17
 * Time: 21:37
 */
include __DIR__ . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';

define('HYMN_DIR', __DIR__ . DIRECTORY_SEPARATOR . 'Core' . DIRECTORY_SEPARATOR . 'Assets' . DIRECTORY_SEPARATOR . 'hymns');
define('WORSHIP_DIR', __DIR__ . DIRECTORY_SEPARATOR . 'Core' . DIRECTORY_SEPARATOR . 'Assets' . DIRECTORY_SEPARATOR . 'hymns');

$ppt = new \PhpOffice\PhpPresentation\PhpPresentation();

$ppt->getLayout()->setDocumentLayout(\PhpOffice\PhpPresentation\DocumentLayout::LAYOUT_SCREEN_16X9, true)->setCX(33.87, \PhpOffice\PhpPresentation\DocumentLayout::UNIT_CENTIMETER)->setCY(19.05, \PhpOffice\PhpPresentation\DocumentLayout::UNIT_CENTIMETER);
$ppt->removeSlideByIndex(0);

use \Core\Slides;
// pw
(new Slides\BaptizedWorship($ppt, '04_神本為大.ini'))->add();
(new Slides\BaptizedWorship($ppt, '04_返樸歸真.ini'))->add();
(new Slides\BaptizedWorship($ppt, '07_主你是我的盼望.ini'))->add();
(new Slides\BaptizedWorship($ppt, '06_君王就在這裡.ini'))->add();

@unlink('OHP_' . str_replace('.php', '', $argv[0]) . '.pptx');
$oWriterPPTX = \PhpOffice\PhpPresentation\IOFactory::createWriter($ppt);
$oWriterPPTX->save('OHP_' . str_replace('.php', '', $argv[0]) . '.pptx');
unset($oWriterPPTX);
