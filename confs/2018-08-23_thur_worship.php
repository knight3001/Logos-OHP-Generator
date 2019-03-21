<?php
require __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'OHPGen' . DIRECTORY_SEPARATOR . 'header.php';
use \Core\Slides;
// pw
(new Slides\Worship($ppt, '09_你是否感到群山震動.ini'))->add();
(new Slides\Worship($ppt, '05_恩典已降臨.ini'))->add();
(new Slides\Worship($ppt, '03_能不能.ini'))->add();
(new Slides\Worship($ppt, '05_聖靈請你來.ini'))->add();
require __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'OHPGen' . DIRECTORY_SEPARATOR . 'footer.php';