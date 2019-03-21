<?php
require __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'OHPGen' . DIRECTORY_SEPARATOR . 'header.php';
use \Core\Slides;

//// 早禱
//(new Slides\Worship($ppt, '03_祢的愛.ini'))->add();
//
//// pw
(new Slides\Worship($ppt, '06_眾城門抬起頭.ini'))->add();
(new Slides\Worship($ppt, '09_這是耶和華所定日子.ini'))->add();
(new Slides\Worship($ppt, '05_奔跑不放棄.ini'))->add();
(new Slides\Worship($ppt, '08_奇異恩典　不再綑綁.ini'))->add();
// 主日
(new Slides\Opening($ppt))->add(); // 關手機
(new Slides\Hymn($ppt, 170))->add(); // 唱詩
(new Slides\Verse($ppt, '徒', 8, 27, 40))->add(); // 讀經
(new Slides\Hymn($ppt,165))->add(); // 唱詩
(new Slides\ApostlesCreed($ppt))->add(); // 認信
(new Slides\GroupWorship($ppt, '磯法/興光'))->add(); // 獻詩
(new Slides\Preach( // 講道
    $ppt,
    '讀經的人',
    '陳小冬牧師',
	array(
	    new Slides\Verse($ppt, '徒', 8, 27, 40), // 讀經
    ), // 序言
    array(
        '神助讀經的人---聖靈充滿---明白神的旨意' => array(
            new Slides\Verse($ppt, '徒', 6, 3, 7),
        ),
        '自助讀經的人---敬拜讀經---靠己怎能明白' => array(
            new Slides\Verse($ppt, '徒', 8, 27),
            new Slides\Verse($ppt, '徒', 8, 28, 30),
            new Slides\Verse($ppt, '徒', 8, 31, 33),
        ),
        '他助讀經的人---遵旨宣教---傳道大有果效' => array(
            new Slides\Verse($ppt, '徒', 8, 26, 31),
            new Slides\Verse($ppt, '徒', 8, 34, 39),
            new Slides\Verse($ppt, '徒', 8, 40),
            new Slides\Verse($ppt, '徒', 21, 8, 14),
        ),
    ),
	array(
        new Slides\Verse($ppt, '徒', 8, 34, 38),
    ) // 結論
))->add();
(new Slides\Tithing($ppt))->add(); // 奉獻
(new Slides\Visitor($ppt))->add(); // 新朋友
(new Slides\Report(
    $ppt,
	array(
        '我們誠心歡迎初次參加本教會敬拜的朋友。請留下姓名、地址、讓我們關心您，並邀請您參加各團契讀經小組、禱告會。',
        '11月4日將有聖洗禮，目前已報名者:許屹楠，願意受洗歸入主名下者，請向陳牧師報名。每週主日（除了每個月第2個主日以外）早上9：00在副堂教室，陳牧師將為已受洗的初信者、即將受洗或希望對福音有更多認識新朋友開談道班，歡迎大家參加。',
        '本堂長執會已投票通過教會章程修改案，按原章程第十章第三條有關「教會葬」，對「經費」與「安葬方式」的實施要點有所增列補實，詳細內容請參閱公佈欄，自即日起公告一個月，經董事會通過實施之。',
        '請各位同工注意，每週六下午2點在教會召開牧區擴張的禱告造就會，請長執、牧區長、正副輔導務必參加，若不克出席，請向陳牧師請假。',
        '週六聯合團契已轉型為牧區聯合慶典聚會(是專為吸引新朋友參加的聚會，每週六全體牧區、團契都要參與服事)，並提供晚餐，請大家每週都要邀請新朋友參加，本週六(10月27日)下午4點到6點的活動如下: (5:30~6:00敬拜讚美、牧長祝福禱告)，編號	活動項目	負責牧區或團契	聯絡同工',
        '每週二早上9：00~10:30和每週四晚上7：00~9:00在母堂有禱告會及門徒造就課程，請踴躍參加，為國家蒙恩、教會復興、宣教植堂、牧區團契、家庭工作及自己身心靈禱告與接受裝備。',
        '為宣教的福音小冊子已放在教會辦公室，請牧區長及輔導按各堂會領取，並記得填寫領取的數量、日期及簽名，相關訊息請洽詢翁傳道。',
        '教會聯合大詩班每週四禱告會前的晚上6:00~7:00練習聖誕節詩歌，請每個團契至少指派3名弟兄姊妹參與，也請所有長執同工能排除萬難來參加。另外，從十一月份起的每個主日約下午1點左右開始練習聖誕節詩歌，負責同工:顧錦瑞傳道、陳玲慧長老。',
        '會計部消息:若弟兄姊妹奉獻是透過網路銀行轉帳，請填寫奉獻信封，註明轉帳人姓名、轉帳金額、轉帳日期，在主日收奉獻時放入奉獻袋。',
        '教會推行一年讀完一遍聖經(依照週報進度)，目前已完成者:李翊鳴，將於11月4日主日舉行頒獎。',
    )
))->add();
(new Slides\Intercession( // 代禱
    $ppt,    
	array(
        '為宣教與牧區慶典事工、新朋友加入、聖徒更新服事與培訓代禱。',
        '為雷媽媽、梁詠恩姊妹、袁玲玲姊妹的身體早日康復代禱。',
 	)
))->add();
(new Slides\Dedication( // 上週奉獻
	$ppt,
	'主日敬拜696.35；主日學37.00；週二禱告會122；週四禱告會255.45；週六牧區聯合408.60；雙語堂主日敬拜866.25；雙語堂主日學7.45；週五西區團契105.40；西區教會主日敬拜185.10；南區佈道所主日敬拜82.10；中區佈道所主日敬拜126.20；',
	array(
		'什 一' => 'The Chen F/T 50; 陳亞萍 10; C.Y.C F/T 50; 黃隆聲夫婦 200; Fiona & Steve 200; P.J 750; 康世興全家 400; 蔡曉緯夫婦 150; 浣熊L. L. 200; Lee H.W 70; JPH 250; JMFL 400; 扈立清 200; 林歡 50; 高橋利加 50; 陳小喬 50; 劉琦全家 50; Nicholas Yim 75; 王維娜 200; KCEK 200; JHRL 200; 張力Lee Zhang 170; C.V.J. 100; 方明川夫婦 120; 李磊全家 100; YANG 45; 謝坤儒&杜斯斯 180; 趙芯斕 430; Antony & Rachel 200; 邵薇 600;K & Y 680;                              更正:10月7日 P.J什一 800;梁振堯夫婦 50;',
		'感 恩' => '蔡哲雄夫婦 50; 余明花 10; Nicholas Yim 10; Bright & Vivian 50; Ryan & Wendy 50; 黃逸群 20; 謝帛翰H.H 10;',
		'建 堂' => '蔡尚恩 5;',
		'宣 教' => '陳邱美娣 120; 翁浩夫婦 400;',
		'購地認獻' => '胡羽光 20; The Chen F/T 50; 陳亞萍 10; P.J 300; 胡保雄夫婦 1822.35; 黃耀群夫婦 100; 蔡重良全家 130; 陳小喬 50; 張紅蕾 50; 黎滿香 5; C.V.J. 10; 李磊全家 100; 趙芯斕 100; Brock全家 20; 謝坤儒&杜斯斯40;丁瑞良夫婦 20; Sam & Kelly 100; 丁偉&張小琼 20;',
        '其 他' => '翁浩夫婦 冰箱一台;'
	)
))->add();

(new Slides\WeeklyVerse($ppt, '神說：在末後的日子，我要將我的靈澆灌凡有血氣的。你們的兒女要說預言；你們的少年人要見異象；老年人要做異夢。', '使徒行傳 2:17'))->add(); // 金句
(new Slides\Hymn($ppt, 179))->add(); // 唱詩
(new Slides\LordsPrayer($ppt))->add(); // 主禱文
(new Slides\Ending($ppt))->add(); // 結束

require __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'OHPGen' . DIRECTORY_SEPARATOR . 'footer.php';