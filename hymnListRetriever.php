<?php
/**
 * Created by PhpStorm.
 * User: Rick Lan
 * Date: 21/03/2019
 * Time: 4:27 PM
 */
$OHPFolder = __DIR__ . DIRECTORY_SEPARATOR . 'OHPGen' . DIRECTORY_SEPARATOR;
include_once $OHPFolder . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';

$aFiles = array();
$files = scandir($OHPFolder . 'Core' . DIRECTORY_SEPARATOR . 'Assets' . DIRECTORY_SEPARATOR . 'hymns', 0);
foreach ($files as $filename) {
    if ($filename !== '.' && $filename !== '..') {
        $aFiles[] = $filename;
    }
}
echo json_encode($aFiles);
exit();