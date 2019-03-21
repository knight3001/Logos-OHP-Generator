<?php
define('USE_LOGO', true);
require __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'OHPGen' . DIRECTORY_SEPARATOR . 'header.php';
use \Core\Slides;
(new Slides\Worship($ppt, '07_每一天我需要祢.ini'))->add();
// pw
(new Slides\Worship($ppt, '03_在這裡.ini'))->add();
(new Slides\Worship($ppt, '04_前來敬拜.ini'))->add();
(new Slides\Worship($ppt, '06_君王就在這裡.ini'))->add();
require __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'OHPGen' . DIRECTORY_SEPARATOR . 'footer.php';