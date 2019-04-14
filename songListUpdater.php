<?php
/**
 * Created by PhpStorm.
 * User: rickl
 * Date: 4/14/2019
 * Time: 9:32 AM
 */

$OHPFolder = __DIR__ . DIRECTORY_SEPARATOR . 'OHPGen' . DIRECTORY_SEPARATOR;
$localFolder = $OHPFolder . 'Core' . DIRECTORY_SEPARATOR . 'Assets' . DIRECTORY_SEPARATOR;
$remoteFolder = 'https://raw.githubusercontent.com/eFiniLan/Logos-OHP-Generator/master/OHPGen/Core/Assets/';
$remoteWorship = file_get_contents('https://raw.githubusercontent.com/eFiniLan/Logos-OHP-Generator/development/worship.json');
$remoteHymns = file_get_contents('https://raw.githubusercontent.com/eFiniLan/Logos-OHP-Generator/development/hymns.json');
$types = ['worship', 'hymns'];
$localWorship = [];
$localHymns = [];
var_dump($remoteWorship);
var_dump($remoteHymns);
if ($remoteWorship === FALSE && $remoteHymns === FALSE) {
    echo "Unable to download the latest song list, please check your internet connection or try again later.\n";
    exit();
}

// generate local version
foreach ($types as $type) {
    $list = [];
    $varName = 'local' . ucfirst($type);
    $files = scandir($assetFolder . $type, 0);
    foreach ($files as $filename) {
        if ($filename !== '.' && $filename !== '..') {
            $content = file_get_contents($assetFolder . $type . DIRECTORY_SEPARATOR . $filename);
            $list[$filename] = md5($content);
        }
    }
    ${$varName} = $list;
}

foreach ($types as $type) {
    $remote = ${'remote' . ucfirst($type)};
    $local = ${'local' . ucfirst($type)};
    $toUpdate = [];
    foreach ($remote as $filename => $md5) {
        if (!isset($local[$filename]) || $remote[$filename] !== $local[$filename]) {
            $toUpdate[] = $filename;
        }
    }
    $remoteContent = file_get_contents($remoteFolder . $type . '/' . $filename);
    if ($remoteContent !== FALSE) {
        echo "Updating $type - $filename...\n";
        $fp = fopen($localFolder . $type . DIRECTORY_SEPARATOR . $filename, 'wb');
        fwrite($fp, $remoteContent);
    } else {
        echo "Unable to update $type - $filename...\n";
    }
}