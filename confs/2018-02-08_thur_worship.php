<?php
require __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'OHPGen' . DIRECTORY_SEPARATOR . 'header.php';
use \Core\Slides;
// pw
(new Slides\Worship($ppt, '05_在你寶座前.ini'))->add();
(new Slides\Worship($ppt, '05_這裡有榮耀.ini'))->add();
(new Slides\Worship($ppt, '06_如鷹展翅上騰.ini'))->add();
(new Slides\Worship($ppt, '05_盡情的敬拜.ini'))->add();
require __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'OHPGen' . DIRECTORY_SEPARATOR . 'footer.php';