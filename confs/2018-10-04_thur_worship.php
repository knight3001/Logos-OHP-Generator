<?php
require __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'OHPGen' . DIRECTORY_SEPARATOR . 'header.php';
use \Core\Slides;
// pw
(new Slides\Worship($ppt, '03_我在這.ini'))->add();
(new Slides\Worship($ppt, '04_將天敞開.ini'))->add();
(new Slides\Worship($ppt, '04_有一位神.ini'))->add();
(new Slides\Worship($ppt, '09_我的心要稱謝耶和華.ini'))->add();
require __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'OHPGen' . DIRECTORY_SEPARATOR . 'footer.php';