<?php
require __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'OHPGen' . DIRECTORY_SEPARATOR . 'header.php';
use \Core\Slides;
// pw
(new Slides\Worship($ppt, '08_我真歡喜來讚美祢.ini'))->add();
(new Slides\Worship($ppt, '05_恩典已降臨.ini'))->add();
(new Slides\Worship($ppt, '06_耶穌我的耶穌.ini'))->add();
(new Slides\Worship($ppt, '07_主你是我的一切.ini'))->add();
require __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'OHPGen' . DIRECTORY_SEPARATOR . 'footer.php';