<?php
require __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'OHPGen' . DIRECTORY_SEPARATOR . 'header.php';
use \Core\Slides;

//// 早禱
//(new Slides\Worship($ppt, '04_何等恩典.ini'))->add();
//
//// pw
(new Slides\Worship($ppt, '05_這裡有榮耀.ini'))->add();
(new Slides\Worship($ppt, '04_將天敞開.ini'))->add();
(new Slides\Worship($ppt, '05_聖潔的敬拜.ini'))->add();
(new Slides\Worship($ppt, '06_在祢呼召之地.ini'))->add();
// 主日
(new Slides\Opening($ppt))->add(); // 關手機
(new Slides\Hymn($ppt, 337))->add(); // 唱詩
(new Slides\Verse($ppt, '徒', 28, 23, 31))->add(); // 讀經
(new Slides\Verse($ppt, '太', 28, 18, 20))->add(); // 讀經
(new Slides\Hymn($ppt,438))->add(); // 唱詩
(new Slides\ApostlesCreed($ppt))->add(); // 認信
(new Slides\GroupWorship($ppt, '迦勒團契'))->add(); // 獻詩
(new Slides\Preach( // 講道
    $ppt,
    '二十九章第六節',
    '陳小冬牧師',
	array(
	    new Slides\Verse($ppt, '徒', 28, 23, 31), // 讀經
        new Slides\Verse($ppt, '太', 28, 18, 20), // 讀經
    ), // 序言
    array(
        '得到權柄傳主道' => array(
            (new Slides\Verse($ppt, '太', 28, 18, 20)),
            (new Slides\Verse($ppt, '太', 16, 13, 19)),
        ),
        '放膽傳講神的道' => array(
            (new Slides\Verse($ppt, '徒', 28, 23, 24)),
            (new Slides\Verse($ppt, '徒', 28, 28, 31)),
        ),
        '跟隨聖靈行主道' => array(
            (new Slides\Verse($ppt, '徒', 16, 1, 10)),
        ),
    )
))->add();
(new Slides\Tithing($ppt))->add(); // 奉獻
(new Slides\Visitor($ppt))->add(); // 新朋友
(new Slides\Report(
    $ppt,
	array(
        '我們誠心歡迎初次參加本教會敬拜的朋友。請留下姓名、地址、讓我們關心您，並邀請您參加各團契讀經小組、禱告會。',
        '7月1日將有聖洗禮，願意受洗歸入主名下者，請向陳牧師報名。每週主日（除了每個月第2個主日以外）早上9：00在副堂教室，陳牧師將為已受洗的初信者、即將受洗或希望對福音有更多認識的新朋友開談道班，歡迎大家參加。',
        '本主日下午2:00在West End將舉行中區佈道所成立禮拜，中區佈道所地址:91 Cordelia Street, South Brisbane QLD 4101，恩道聯合詩班將要獻詩，請長執們與各團契輔導都能參加，同時教會的FB也將在當天下午2:00開始有網路直播，請弟兄姊妹關心代禱，願主將得救的人數天天加給教會。',
        '下主日將召開六月份的同工會，請傳道、長老、執事、牧區長、團契輔導、會長與各讀經小組的組長於下主日下午1:00儘快到主堂開會。',
        '經本堂長老會議開會決議，通過提名下一任(第十一任)長老候選人有5位：黃隆聲、于同芬、林欣燕、陳玲慧、黃煒霖;執事候選人有18位：莊溢恩、毛天霖、鄭力夫、莊貴香、鄭朝鴻、趙芯斕、徐曉川、謝坤儒、嚴健明、林雯婷、曾奕智、宦之軒、蔡曉緯、李磊、王悅涵、黃千綺、李宏仁、林毅恩，即日起公告一個月後於7月8日舉行選舉，如有正反意見，請向陳牧師建議，並請弟兄姊妹關心代禱。',
        '本週六(6月23日)下午3:00的母堂青年聯合團契活動–六月份專題:「音樂事工培訓」，負責同工:陳玲慧執事，請大家踴躍參加。',
        '請弟兄姊妹特別注意，六月份整月都是福音月，請弟兄姊妹至少帶一位新人來教會，並且天天要在工作場所、鄰舍、親戚、朋友傳揚福音。',
        '每週二早上9：00~10:30和每週四晚上7：00~9:00在母堂有禱告會及門徒造就課程(使徒行傳第4章)，請踴躍參加，為國家蒙恩、教會復興、宣教植堂、牧區團契、家庭工作及自己身心靈禱告與接受裝備。',
        '請各牧區長及團契輔導注意，目前團契新年度的同工，若有任何調整，請儘快告知陳師母，並將連續一個月刊登各團契新任正副輔導、正副會長的名單。另外，7月1日為各團契同工(新舊任正副輔導、正副會長及同工)交接，請弟兄姊妹關心代禱。',
        '本堂恩道潛能開發學校將於7月22日(主日) 下午1:45~3:35開設:聖經真理原則(三)的課程，鼓勵弟兄姊妹踴躍報名上課。',
	)
))->add();
(new Slides\Intercession( // 代禱
    $ppt,    
	array(
        '為教會擴建工程所需的經費與後續施工的順利平安代禱。',
        '為宣教與植堂所需的會堂地點、服事同工的委身與培訓代禱。',
	)
))->add();
(new Slides\Dedication( // 上週奉獻
	$ppt,
	'主日敬拜763.85；主日學24.40；週二禱告會 87.60；週四禱告會 277.15；週六聯合團契34.60；週五西區團契130.10；西區教會主日敬拜138.30;南區佈道所主日敬拜145.30;雙語堂主日敬拜661.00；雙語堂主日學16.35；',
	array(
		'什 一' => '陳邱美娣 150; 胡羽恆 100; The Chen F/T 50; 黃隆聲夫婦 120; P.J 650; Fiona & Steve 200;康世興全家 400; 浣熊L. L. 100; Debby Chen 420; JPH 150; Nicholas Yim 70; JHRL 200; C.V.J. 240; 李磊全家 60; 謝坤儒&杜斯斯 180; 主知名 25; 趙芯斕 775; Antony & Rachel 200; 唐俊英 80; 黃逸群 20; 謝帛翰H.H 100; 宋安琪 200; 扈立清 200; 余明花 10; 林歡 50; 蔡曉緯夫婦 80;',
		'感 恩' => '鄭次郎夫婦 20; R&J Yen F/T 300; 蔡哲雄夫婦 50; I-en& Melissa 10; 邵薇 200; Debby Chen 380; Nicholas Yim 10; Ian &Yona 1050; Bright & Vivian 50; 周文和全家 50;路博涵 50; 張譽勻 10;K & Y 2000;',
		'建 堂' => '鄭甘訓 100; Lee H.W 20; 蔡重良全家 130; Nicholas Yim 10;',
		'宣 教' => '翁浩夫婦 400;	',
		'購地認獻' => '胡羽光 20; The Chen F/T 50; 黃隆聲夫婦 800; P.J 300; Debby Chen 600; 張紅蕾 50; 黎滿香 5; 袁玲玲 50; Rachel Lin 100; C.V.J. 10; 李磊全家 60; Frank湯全家 120; Brock全家 20; 謝坤儒&杜斯斯 40; E & E 100; 凃秀鴻夫婦 100; Sam & Kelly 100; 謝帛翰H.H 100; 丁偉&張小琼 50;',
	)
))->add();

(new Slides\WeeklyVerse($ppt, '敬畏耶和華是智慧的開端；凡遵行祂命令的，是聰明人。耶和華是永遠當讚美的。', '詩篇111:10'))->add(); // 金句
(new Slides\Hymn($ppt, 442))->add(); // 唱詩
(new Slides\LordsPrayer($ppt))->add(); // 主禱文
(new Slides\Ending($ppt))->add(); // 結束

require __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'OHPGen' . DIRECTORY_SEPARATOR . 'footer.php';