<?php
require __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'OHPGen' . DIRECTORY_SEPARATOR . 'header.php';
use \Core\Slides;
// pw
(new Slides\Worship($ppt, '03_神同在.ini'))->add();
(new Slides\Worship($ppt, '02_新酒.ini'))->add();
(new Slides\Worship($ppt, '07_每一天我需要祢.ini'))->add();
(new Slides\Worship($ppt, '05_這是我的手.ini'))->add();
require __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'OHPGen' . DIRECTORY_SEPARATOR . 'footer.php';