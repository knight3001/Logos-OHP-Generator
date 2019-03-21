<?php
require __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'OHPGen' . DIRECTORY_SEPARATOR . 'header.php';
use \Core\Slides;
// pw
(new Slides\Worship($ppt, '07_叫我抬起頭的神.ini'))->add();
(new Slides\Worship($ppt, '05_普天下歡慶.ini'))->add();
(new Slides\Worship($ppt, '09_聖靈請你來充滿我心.ini'))->add();
(new Slides\Worship($ppt, '08_我們歡迎君王降臨.ini'))->add();
require __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'OHPGen' . DIRECTORY_SEPARATOR . 'footer.php';