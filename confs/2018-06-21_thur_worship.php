<?php
require __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'OHPGen' . DIRECTORY_SEPARATOR . 'header.php';
use \Core\Slides;
// pw
(new Slides\Worship($ppt, '08_我要歌頌你的力量.ini'))->add();
(new Slides\Worship($ppt, '03_在這裡.ini'))->add();
(new Slides\Worship($ppt, '04_秋雨之福.ini'))->add();
(new Slides\Worship($ppt, '04_永遠尊貴.ini'))->add();
require __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'OHPGen' . DIRECTORY_SEPARATOR . 'footer.php';