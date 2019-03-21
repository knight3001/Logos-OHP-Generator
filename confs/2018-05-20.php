<?php
require __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'OHPGen' . DIRECTORY_SEPARATOR . 'header.php';
use \Core\Slides;

//// 早禱
//(new Slides\Worship($ppt, '04_何等恩典.ini'))->add();
//
//// pw
(new Slides\Worship($ppt, '04_將天敞開.ini'))->add();
(new Slides\Worship($ppt, '06_我要全心贊美.ini'))->add();
(new Slides\Worship($ppt, '04_恩典之路.ini'))->add();
(new Slides\Worship($ppt, '03_活出愛.ini'))->add();
// 主日
(new Slides\Opening($ppt))->add(); // 關手機
(new Slides\Hymn($ppt, 173))->add(); // 唱詩
(new Slides\Verse($ppt, '太', 5, 13, 16))->add(); // 讀經
(new Slides\Hymn($ppt,233))->add(); // 唱詩
(new Slides\ApostlesCreed($ppt))->add(); // 認信
(new Slides\GroupWorship($ppt, '愛家/迦拿'))->add(); // 獻詩
(new Slides\Preach( // 講道
    $ppt,
    '是鹽是光',
    '黃隆聲長老',
	array(
	    new Slides\Verse($ppt, '太', 3, 1, 10), // 讀經
    ), // 序言
    array(
        '是鹽是光的本質' => array(
            (new Slides\Verse($ppt, '太', 5, 13, 16)),
            (new Slides\Verse($ppt, '約', 1, 4)),
            (new Slides\Verse($ppt, '約', 8, 12)),
            (new Slides\Verse($ppt, '太', 5, 13, 15)),
            (new Slides\Verse($ppt, '雅', 1, 2, 4)),
            (new Slides\Verse($ppt, '林前', 6, 9, 10)),
        ),
        '是鹽是光的功能' => array(
            new Slides\Verse($ppt, '利', 2, 13),
            new Slides\Verse($ppt, '伯', 6, 6),
            new Slides\Verse($ppt, '西', 4, 6),
            (new Slides\Verse($ppt, '太', 5, 14, 16)),
        ),
        '是鹽是光的影響' => array(
            new Slides\Verse($ppt, '加', 2, 20),
            (new Slides\Verse($ppt, '太', 5, 16)),
//            new Slides\Verse($ppt, '徒', 2, 1, 8), // 讀經
//            new Slides\Verse($ppt, '徒', 3, 1, 8), // 讀經
        ),
//        '使徒到達美門口之時' => array(
//            new Slides\Verse($ppt, '徒', 3, 2, 7), // 讀經
//            new Slides\Verse($ppt, '徒', 3, 6, 10), // 讀經
//            new Slides\Verse($ppt, '徒', 3, 12, 18), // 讀經
//        ),
//        '使徒離開美門口之後' => array(
//            new Slides\Verse($ppt, '徒', 4, 1, 14), // 讀經
//            new Slides\Verse($ppt, '徒', 4, 16, 20), // 讀經
//            new Slides\Verse($ppt, '徒', 4, 29, 31), // 讀經
//            new Slides\Verse($ppt, '徒', 5, 27, 32), // 讀經
//            new Slides\Verse($ppt, '太', 28, 18, 20), // 讀經
//        ),
    )
))->add();
(new Slides\Tithing($ppt))->add(); // 奉獻
(new Slides\Visitor($ppt))->add(); // 新朋友
(new Slides\Report(
    $ppt,
	array(
        '我們誠心歡迎初次參加本教會敬拜的朋友。請留下姓名、地址、讓我們關心您，並邀請您參加各團契讀經小組、禱告會。',
        '6月3日將有聖洗禮，願意受洗歸入主名下者，請向陳牧師報名。每週主日（除了每個月第2個主日以外）早上9：00在副堂教室，陳牧師將為已受洗的初信者、即將受洗或希望對福音有更多認識的新朋友開談道班，歡迎大家參加。',
        '本週六(5月26日)下午3：00為教會五月份建堂禁食禱告會，由腓利牧區負責敬拜讚美，請弟兄姊妹踴躍參加。',
        '請各牧區長、團契輔導於本週六(5月26日)下午3：45在副堂開會，內容是「牧區長及輔導造就課程與策劃7~9月的服事表」，請傳道、長執、牧區長、團契正副輔導、正副會長務必準時參加。另外，近來傳出有一些異端，如全能神教會(東方閃電)等滲入團契小組，請牧區長及團契輔導要留意及防備，並鼓勵大家參加裝備課程以分辨異端。',
        '下主日將召開五月份的同工會，請傳道、長老、執事、牧區長、團契輔導、會長與各讀經小組的組長於下主日下午1:00儘快到主堂開會。',
        '6月3日(主日)下午2:00 在Algester佈道所將舉行植堂禮拜，地址:44 Endiandra Street, Algester QLD 4115，恩道聯合詩班將要獻詩，請長執們都能參加。另外，因訪韓聖會將在本週舉行，週四聯合詩班的練習將暫停兩週，5月31日再恢復練習。',
        '請大家注意:若使用主堂或副堂，最後離開的一位，記得要關好門窗。',
        '每週二早上9：00~10:30 在教會有禱告會，和週四晚上7：00~9:00在教會有禱告會及門徒造就課程，請弟兄姊妹踴躍參加，為自己、家庭、工作、團契擴張、教會、宣教、植堂、國家蒙恩禱告及接受裝備。',
        '黃金海岸教會20週年慶的照片已經上傳，歡迎弟兄姊妹前往教會的網頁自行下載。www.facebook.com/logosgoldcoastchristianchurch',
        '為培植更多宣教與植堂的神國工人，本堂恩道潛能開發學校將於7月份起開設以下神學裝備課程，報名表請在招待處領取，相關訊息如下：',
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
	'主日敬拜1220.75；主日學48.35；週二禱告會 70.00；週四禱告會 129.10；週六聯合團契68.75；西區教會主日敬拜214.85；',
	array(
		'什 一' => '鄭次郎夫婦 60; 胡保華夫婦 1000; 胡羽恆 100; The Chen F/T 50; 黃隆聲夫婦 120; P.J 650; 康世興全家 100; I-en & Melissa 1000; 浣熊L. L. 200; JPH 250; EN Liao 70; Nicholas Yim 70; 桂星 105; JHRL 200; L.W. 200; YANG 50; 宋瑞琪 150; 唐俊英 100; 謝帛翰H.H 100; 宋安琪 100; 扈立清 200; 肖樂瑤 5;',
		'感 恩' => '吳貴茂全家 20; Tseng 100; Hong & Sonia 100; Bright & Vivian 50; Ryan & Wendy 50; Jack Tang Family 100; E & E 100; 洪永豐夫婦 50; 余明花 10;',
		'建 堂' => 'Fiona & Steve 200; Tseng 100; Lee H.W 20; Bright & Vivian 50; 陳小喬 50; 張筱麗全家 10; 李彥霆Sam 100; 徐志軍母子 200;',
		'宣 教' => '翁浩夫婦 400; Tseng 60; 黃耀群夫婦 100;	',
		'購地認獻' => '胡羽光 20; The Chen F/T 50; P.J 300; 蔡尚恩 5; 黃耀群夫婦 100; 陳小喬 50; 桂星 20; 嚴健明Ken Yim 250; 凃秀鴻夫婦 100; 袁芮 20;謝帛翰H.H 100; 丁偉&張小琼 50; ',
	)
))->add();

(new Slides\WeeklyVerse($ppt, '你要認識　神，就得平安，福氣也必臨到你。', '約伯記 22:21'))->add(); // 金句
(new Slides\Hymn($ppt, 222))->add(); // 唱詩
(new Slides\LordsPrayer($ppt))->add(); // 主禱文
(new Slides\Ending($ppt))->add(); // 結束

require __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'OHPGen' . DIRECTORY_SEPARATOR . 'footer.php';