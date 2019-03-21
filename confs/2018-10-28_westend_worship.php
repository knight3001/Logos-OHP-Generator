<?php
define('USE_LOGO', true);
require __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'OHPGen' . DIRECTORY_SEPARATOR . 'header.php';
use \Core\Slides;

////// 早禱
//(new Slides\Worship($ppt, '06_靠著耶穌得勝.ini'))->add();
////
////// pw
(new Slides\Worship($ppt, '07_永恆唯一的盼望.ini'))->add();
(new Slides\Worship($ppt, '04_恩典之路.ini'))->add();
(new Slides\Worship($ppt, '06_如鷹展翅上騰.ini'))->add();

// 主日
(new Slides\Opening($ppt))->add(); // 關手機
(new Slides\Hymn($ppt, 75))->add(); // 唱詩
(new Slides\Verse($ppt, '創', 1, 26, 27))->add(); // 讀經
(new Slides\Verse($ppt, '創', 3, 6, 21))->add(); // 讀經
(new Slides\Hymn($ppt, 75))->add(); // 唱詩
(new Slides\ApostlesCreed($ppt))->add(); // 認信
(new Slides\GroupWorship($ppt, '青年詩班'))->add(); // 獻詩
(new Slides\Preach( // 講道
    $ppt,
    '宣講人的身份',
    '康世興傳道',
    array(
        new Slides\Verse($ppt, '創', 1, 26, 27), // 讀經
        new Slides\Verse($ppt, '創', 3, 6, 21), // 讀經
    ), // 序言
    array(
        '因神的奇妙創造-屬天的人得到身份' => array(
            new Slides\Verse($ppt, '創', 1, 26), // 讀經
        ),
        '因人的墮落犯罪-屬地的人失去身份' => array(
            new Slides\Verse($ppt, '創', 1, 26), // 讀經
        ),
        '因神的救贖宏恩-相信的人恢復身份' => array(
            new Slides\Verse($ppt, '創', 1, 26), // 讀經
        ),
    ),
    array(
        new Slides\Verse($ppt, '得', 2, 2, 10),
    )
))->add();
(new Slides\Tithing($ppt))->add(); // 奉獻
(new Slides\Visitor($ppt))->add(); // 新朋友
(new Slides\Report(
    $ppt,
    array(
        '我們誠心歡迎初次參加本教會敬拜的朋友。請留下姓名、地址、讓我們關心您，並邀請您參加各團契讀經小組、禱告會。',
        '下主日將有聖洗禮，目前已報名者:許屹楠，願意受洗歸入主名下者，請向林长老報名。每週主日（除了每個月第2個主日以外）早上9：00在副堂教室，陳牧師將為已受洗的初信者、即將受洗或希望對福音有更多認識新朋友開談道班，歡迎大家參加。',
        '下主日為聖餐主日，請預備心領受主的聖餐，並紀念主耶穌救贖宏恩。',
        '神學課程消息:陳牧師將於11月4日開始聖經真理原則(二) 及講道法(二)兩門課程，上課時間每主日下午2點至6點，地點:黃金海岸教會，有意者請向陳牧師報名(若有交通需要，可與陳牧師聯絡)。',
        '週六聯合團契已轉型為牧區聯合慶典聚會(是專為吸引新朋友參加的聚會，每週六全體牧區、團契都要參與服事)，並提供晚餐，請大家每週都要邀請新朋友參加，本週六(11月3日)下午4點到6點的活動如下: (5:30~6:00敬拜讚美、牧長祝福禱告)',
        '每週二早上9：00~10:30和每週四晚上7：00~9:00在母堂有禱告會及門徒造就課程，請踴躍參加，為國家蒙恩、教會復興、宣教植堂、牧區團契、家庭工作及自己身心靈禱告與接受裝備。',
        '為宣教的福音小冊子已放在教會辦公室，請牧區長及輔導按各堂會領取，並記得填寫領取的數量、日期及簽名，相關訊息請洽詢翁傳道。',
        '教會聯合大詩班每週四禱告會前的晚上6:00~7:00練習聖誕節詩歌，請每個團契至少指派3名弟兄姊妹參與，也請所有長執同工能排除萬難來參加。另外，從十一月份起的每個主日約下午1點左右開始練習聖誕節詩歌，負責同工:顧錦瑞傳道、陳玲慧長老。另外，因為聖誕節詩歌需要較長時間準備，所以請大家務必前儘快加入聯合詩班的練習，在11月18 日之後就不再增加詩班成員，請弟兄姊妹特別注意。',
        '會計部消息:若弟兄姊妹奉獻是透過網路銀行轉帳，請填寫奉獻信封，註明轉帳人姓名、轉帳金額、轉帳日期，在主日收奉獻時放入奉獻袋。',
        '教會推行一年讀完一遍聖經(依照週報進度)，目前已完成者:李翊鳴，將於下主日(11月4日)舉行頒獎。',
    )
))->add();
(new Slides\Intercession( // 代禱
    $ppt,
    array(
        '為宣教與牧區慶典事工、新朋友加入、聖徒更新服事與培訓代禱。',
    )
))->add();
(new Slides\Dedication( // 上週奉獻
    $ppt,
    '主日敬拜  53；主日學  5.5；',
    array(
        '什 一' => 'C.Y.C F/T 20；李磊全家250；黃隆聲夫婦 200',
        '感恩' => '明花 10',
        '購地' => '李磊全家250',
    )
))->add();

(new Slides\WeeklyVerse($ppt, '神說：在末後的日子，我要將我的靈澆灌凡有血氣的。你們的兒女要說預言；你們的少年人要見異象；老年人要做異夢。', '使徒行傳 2:17'))->add(); // 金句
(new Slides\Hymn($ppt, 79))->add(); // 唱詩
(new Slides\LordsPrayer($ppt))->add(); // 主禱文
(new Slides\Ending($ppt))->add(); // 結束

require __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'OHPGen' . DIRECTORY_SEPARATOR . 'footer.php';