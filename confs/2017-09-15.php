<?php
require __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'OHPGen' . DIRECTORY_SEPARATOR . 'header.php';
use \Core\Slides;

// pw
(new Slides\Worship($ppt, '07_我們成為一家人.ini'))->add();
(new Slides\Worship($ppt, '07_新的事將要成就.ini'))->add();
(new Slides\Worship($ppt, '04_恩典之路.ini'))->add();

require __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'OHPGen' . DIRECTORY_SEPARATOR . 'footer.php';