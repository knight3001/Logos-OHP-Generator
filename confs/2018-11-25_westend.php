<?php
define('USE_LOGO', true);
require __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'OHPGen' . DIRECTORY_SEPARATOR . 'header.php';
use \Core\Slides;

////// 早禱
(new Slides\Worship($ppt, '07_叫我抬起頭的神.ini'))->add();
////
////// pw
(new Slides\Worship($ppt, '06_耶穌對我真好.ini'))->add();
(new Slides\Worship($ppt, '04_來高聲唱.ini'))->add();
(new Slides\Worship($ppt, '04_因為有你.ini'))->add();

// 主日
(new Slides\Opening($ppt))->add(); // 關手機
(new Slides\Hymn($ppt, 173))->add(); // 唱詩
(new Slides\Verse($ppt, '腓', 1, 1, 6))->add(); // 讀經
(new Slides\Verse($ppt, '腓', 2, 1, 5))->add(); // 讀經
(new Slides\Hymn($ppt, 173))->add(); // 唱詩
(new Slides\ApostlesCreed($ppt))->add(); // 認信
(new Slides\GroupWorship($ppt, '青年詩班'))->add(); // 獻詩
(new Slides\Preach( // 講道
    $ppt,
    '同心合意興旺福音',
    '顧錦瑞傳道',
    array(
//        new Slides\Verse($ppt, '徒', 1, 8), // 讀經
    ), // 序言
    array(
        '異象的動力-帶出方向-引發潛力' => array(
//            new Slides\Verse($ppt, '箴', 29, 18),
//            new Slides\Verse($ppt, '徒', 26, 19),
//            new Slides\Verse($ppt, '出', 4, 14, 15),
//            new Slides\Verse($ppt, '耶', 1, 6),
        ),
        '禱告的能力-凝聚能量-添加新力' => array(
//            new Slides\Verse($ppt, '徒', 1, 10, 14),
//            new Slides\Verse($ppt, '徒', 1, 10, 11),
//            new Slides\Verse($ppt, '徒', 1, 14),
        ),
        '聖靈的動力-充滿澆灌-發揮能力' => array(
//            new Slides\Verse($ppt, '徒', 2, 1, 4),
//            new Slides\Verse($ppt, '弗', 4, 10),
//            new Slides\Verse($ppt, '徒', 1, 8),
//            new Slides\Verse($ppt, '徒', 2, 3),
//            new Slides\Verse($ppt, '徒', 2, 4),
//            new Slides\Verse($ppt, '徒', 2, 14),
        ),
    ),
    array(
//        new Slides\Verse($ppt, '徒', 1, 8), // 讀經
    )
))->add();
(new Slides\Tithing($ppt))->add(); // 奉獻
(new Slides\Visitor($ppt))->add(); // 新朋友
(new Slides\Report(
    $ppt,
    array(
        '我們誠心歡迎初次參加本教會敬拜的朋友。請留下姓名、地址、讓我們關心您，並邀請您參加各團契讀經小組、禱告會。',
        '本主日將有聖洗禮，目前已報名者:陳來發，12月2日將有聖洗禮，目前已報名者:蔡尚雅(堅信禮) 、Issac K，願意受洗歸入主名下者，請向林长老報名。每週主日（除了每個月第2個主日以外）早上9點在副堂教室，陳牧師將為已受洗的初信者、即將受洗或希望對福音有更多認識新朋友開談道班，歡迎大家參加。',
        '週六牧區聯合慶典聚會，本週六(11月24日)下午4點到6點的活動請參閱佈告欄(5:30~6:00敬拜讚美、牧長祝福禱告，6點開始愛筵)。',
        '教會將舉辦聖樂詩歌比賽，請各牧區團契開始組隊練習，相關訊息:',
        '今年聖誕節的慶祝活動，將由鄭博耀傳道與顧錦瑞傳道負責統籌，分成對外與對內部份，請參看以下資訊，並為此聖工代禱：',
        '請牧區長、正副輔導、正副會長於本週六(11月24日)下午2點在副堂開會，內容「同工造就與策劃2019年1~3月服事表」，請傳道、長執、牧區長、正副輔導、正副會長務必參加，若無法出席，請向陳師母請假。原時段的牧區造就禱告會暫停一次，下週六(12月1日)下午2點再恢復舉行。',
        '請大家注意，當開車來母堂，車速務必在10km/h以內，並以車頭朝外的方式停車(reverse park)，同時留意小孩安全(請家長要特別看顧小孩)。',
    )
))->add();
(new Slides\Intercession( // 代禱
    $ppt,
    array(
        '為宣教與牧區慶典事工、新朋友加入、聖徒更新服事與培訓代禱。',
        '為梁詠恩姊妹(Mary)的手術順利及早日康復代禱。',

    )
))->add();
(new Slides\Dedication( // 上週奉獻
    $ppt,
    '主日敬拜  55；主日學  2.3；',
    array(
        '什 一' => 'C.Y.C F/T 20；李磊全家250；严智龙 200',
        '宣 教' => '翁浩全家 300',
        '購地' => '李磊全家250',
    )
))->add();

(new Slides\WeeklyVerse($ppt, '神能照著運行在我們心裡的大力,充充足足的成就一切, 超過我們所求所想的.', '以弗所書 3:20'))->add(); // 金句
(new Slides\Hymn($ppt, 183))->add(); // 唱詩
(new Slides\LordsPrayer($ppt))->add(); // 主禱文
(new Slides\Ending($ppt))->add(); // 結束

require __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'OHPGen' . DIRECTORY_SEPARATOR . 'footer.php';