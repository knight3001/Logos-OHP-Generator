<?php
require __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'OHPGen' . DIRECTORY_SEPARATOR . 'header.php';
use \Core\Slides;
// pw
(new Slides\Worship($ppt, '02_新酒.ini'))->add();
(new Slides\Worship($ppt, '09_這是耶和華所定日子.ini'))->add();
(new Slides\Worship($ppt, '06_每當我瞻仰祢.ini'))->add();
(new Slides\Worship($ppt, '04_我要順服.ini'))->add();
require __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'OHPGen' . DIRECTORY_SEPARATOR . 'footer.php';