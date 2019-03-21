<?php
require __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'OHPGen' . DIRECTORY_SEPARATOR . 'header.php';
use \Core\Slides;
// pw
(new Slides\Worship($ppt, '06_揚聲歡呼讚美.ini'))->add();
(new Slides\Worship($ppt, '04_前來敬拜.ini'))->add();
(new Slides\Worship($ppt, '04_打開天窗.ini'))->add();
//(new Slides\Worship($ppt, '08_我們歡迎君王降臨.ini'))->add();
require __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'OHPGen' . DIRECTORY_SEPARATOR . 'footer.php';