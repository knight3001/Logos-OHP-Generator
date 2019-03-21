<?php
$fileName = $argv[0];
$afileName = explode(DIRECTORY_SEPARATOR, $fileName);
$outputFile = __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'outputs' . DIRECTORY_SEPARATOR . 'OHP_' . str_replace('.php', '', $afileName[count($afileName)-1]) . '.pptx';
@unlink($outputFile);
$oWriterPPTX = \PhpOffice\PhpPresentation\IOFactory::createWriter($ppt);
$oWriterPPTX->save($outputFile);
unset($oWriterPPTX);