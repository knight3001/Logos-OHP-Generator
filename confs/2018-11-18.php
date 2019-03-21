<?php
require __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'OHPGen' . DIRECTORY_SEPARATOR . 'header.php';
use \Core\Slides;

//// 早禱
//(new Slides\Worship($ppt, '03_祢的愛.ini'))->add();
//
//// pw
(new Slides\Worship($ppt, '06_我在這裡敬拜.ini'))->add();
(new Slides\Worship($ppt, '04_上帝能夠.ini'))->add();
(new Slides\Worship($ppt, '05_屬天的喜樂.ini'))->add();
(new Slides\Worship($ppt, '05_我神真偉大.ini'))->add();
// 主日
(new Slides\Opening($ppt))->add(); // 關手機
(new Slides\Hymn($ppt, 194))->add(); // 唱詩
(new Slides\Verse($ppt, '徒', 8, 12, 25))->add(); // 讀經
(new Slides\Hymn($ppt,198))->add(); // 唱詩
(new Slides\ApostlesCreed($ppt))->add(); // 認信
(new Slides\GroupWorship($ppt, '牧愛牧區'))->add(); // 獻詩
(new Slides\Preach( // 講道
    $ppt,
    '按手的權柄',
    '陳小冬牧師',
	array(
	    new Slides\Verse($ppt, '徒', 8, 12, 25), // 讀經
    ), // 序言
    array(
        '腓利被按手-得到執事的權柄' => array(
            new Slides\Verse($ppt, '徒', 6, 2, 5),
            new Slides\Verse($ppt, '徒', 8, 12, 13),
            new Slides\Verse($ppt, '徒', 8, 5, 8),
            new Slides\Verse($ppt, '徒', 3, 1, 9),
        ),
        '西門求按手-想要神跡的權柄' => array(
            new Slides\Verse($ppt, '徒', 8, 18, 24),
            new Slides\Verse($ppt, '徒', 8, 9, 11),
            new Slides\Verse($ppt, '徒', 8, 18, 19),
            new Slides\Verse($ppt, '徒', 8, 20, 23),
        ),
        '使徒被差遣-行使按手的權柄' => array(
            new Slides\Verse($ppt, '徒', 8, 14, 17),
            new Slides\Verse($ppt, '提前', 4, 14, 16),
            new Slides\Verse($ppt, '提前', 5, 20, 22),
            new Slides\Verse($ppt, '徒', 8, 14, 15),
            new Slides\Verse($ppt, '徒', 8, 15, 17),
            new Slides\Verse($ppt, '徒', 8, 20, 25),
        ),
    ),
	array(
        new Slides\Verse($ppt, '提前', 4, 14, 16),
    ) // 結論
))->add();
(new Slides\Tithing($ppt))->add(); // 奉獻
(new Slides\Visitor($ppt))->add(); // 新朋友
(new Slides\Report(
    $ppt,
	array(
        '我們誠心歡迎初次參加本教會敬拜的朋友。請留下姓名、地址、讓我們關心您，並邀請您參加各團契讀經小組、禱告會。',
        '本主日將有聖洗禮，目前已報名者:陳來發，12月2日將有聖洗禮，目前已報名者:蔡尚雅(堅信禮) 、Issac K，願意受洗歸入主名下者，請向陳牧師報名。每週主日（除了每個月第2個主日以外）早上9點在副堂教室，陳牧師將為已受洗的初信者、即將受洗或希望對福音有更多認識新朋友開談道班，歡迎大家參加。',
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
	'主日敬拜364.15；主日學46.50；週二禱告會63.00；週四禱告會229.20；週六牧區聯合575.65；西區週三聚會62.00；雙語堂主日敬拜879.65；雙語堂主日學29.80；南區佈道所主日敬拜52.10；中區佈道所主日敬拜132.70；西區佈道所主日敬拜85.55；',
	array(
		'什 一' => '陳邱美娣 600; 胡羽恆 100; R&J Yen F/T 50; The Chen F/T 50; C.Y.C F/T 200; 黃隆聲夫婦 120; Fiona & Steve 200; P.J 800; 康世興全家 200; I-en& Melissa 200; 蔡曉緯夫婦 400; 浣熊L. L. 40; K & Y 600; JMFL 2500; 扈立清 200; 陳小喬 50; 桂星 105; Nicholas Yim 75; Ian &Yona 500;嚴健明Ken Yim 100; JHRL 900;鄭朝鴻全家 300; C.V.J. 200;方明川夫婦 70; 李磊全家 100; 謝坤儒&杜斯斯 180; Antony & Rachel 200; Ryan & Wendy 50; 謝帛翰H.H 100; 宋安琪 100;',
		'感 恩' => '鄭次郎夫婦 25; 蔡哲雄夫婦 50; 吳貴茂全家 20; Stella Chen 100; 嚴健明Ken Yim 100; 路博涵 50; 羅仁煥夫婦 100; 鄭朝鴻全家 20; Bright & Vivian 50; 周文和全家 50; 張筱麗全家 10;',
		'建 堂' => '吳貴茂全家 50; 蔡尚恩 10; Lee H.W 20;',
		'宣 教' => '翁浩夫婦 400;',
		'購地認獻' => '胡羽光 20; The Chen F/T 50; P.J 300; 胡保雄夫婦 300; 黃耀群夫婦 100; JMFL 200; 蔡重良全家 130; 陳小喬 50; 張紅蕾 50; Ian &Yona 200; 黎滿香 5; C.V.J. 10; 鄭朝鴻全家 50; 鄭又恩&鄭又道 20; 李磊全家 100; Brock全家 20; 謝坤儒&杜斯斯 40; 丁瑞良夫婦 20; E & E 100; 凃秀鴻夫婦 100; Sam & Kelly 200; 謝帛翰H.H 50; 丁偉&張小琼 50;',
	)
))->add();

(new Slides\WeeklyVerse($ppt, '神能照著運行在我們心裡的大力,充充足足的成就一切, 超過我們所求所想的.', '以弗所書 3:20'))->add(); // 金句
(new Slides\Hymn($ppt, 193))->add(); // 唱詩
(new Slides\LordsPrayer($ppt))->add(); // 主禱文
(new Slides\Ending($ppt))->add(); // 結束

require __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'OHPGen' . DIRECTORY_SEPARATOR . 'footer.php';