<?php
require __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'OHPGen' . DIRECTORY_SEPARATOR . 'header.php';
use \Core\Slides;
(new Slides\Verse($ppt, '彌', 7, 7))->add(); // 讀經
(new Slides\Verse($ppt, '詩', 138, 8))->add(); // 讀經
(new Slides\Verse($ppt, '代上', 4, 9))->add(); // 讀經
require __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'OHPGen' . DIRECTORY_SEPARATOR . 'footer.php';