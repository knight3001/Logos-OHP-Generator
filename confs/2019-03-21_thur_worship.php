<?php
require __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'OHPGen' . DIRECTORY_SEPARATOR . 'header.php';
use \Core\Slides;
// pw
(new Slides\Worship($ppt, '08_主的喜樂是我力量.ini'))->add();
(new Slides\Worship($ppt, '04_喜樂泉源.ini'))->add();
(new Slides\Worship($ppt, '04_馨香晚祭.ini'))->add();
(new Slides\Worship($ppt, '04_打開天窗.ini'))->add();
require __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'OHPGen' . DIRECTORY_SEPARATOR . 'footer.php';