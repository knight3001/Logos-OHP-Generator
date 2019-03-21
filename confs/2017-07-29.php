<?php
require __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'OHPGen' . DIRECTORY_SEPARATOR . 'header.php';
use \Core\Slides;

// pw
(new Slides\Worship($ppt, '04_來高聲唱.ini'))->add();
(new Slides\Worship($ppt, '03_來慶賀.ini'))->add();
(new Slides\Worship($ppt, '08_領我到你寶血裡面.ini'))->add();
(new Slides\Worship($ppt, '04_基督我主.ini'))->add();
require __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'OHPGen' . DIRECTORY_SEPARATOR . 'footer.php';