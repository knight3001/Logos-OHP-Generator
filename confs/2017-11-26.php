<?php
require __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'OHPGen' . DIRECTORY_SEPARATOR . 'header.php';
use \Core\Slides;

// 早禱
(new Slides\Worship($ppt, '04_讚美之泉.ini'))->add();

// pw
(new Slides\Worship($ppt, '07_耶和華行了大事.ini'))->add();
(new Slides\Worship($ppt, '07_新的事將要成就.ini'))->add();
(new Slides\Worship($ppt, '08_新的異象新的方向.ini'))->add();
(new Slides\Worship($ppt, '05_這是我的手.ini'))->add();
// 主日
(new Slides\Opening($ppt))->add(); // 關手機
(new Slides\Hymn($ppt, 123))->add(); // 唱詩
(new Slides\Verse($ppt, '賽', 6, 1, 11))->add(); // 讀經
(new Slides\Hymn($ppt, 460))->add(); // 唱詩
(new Slides\ApostlesCreed($ppt))->add(); // 認信
(new Slides\GroupWorship($ppt, '磯法/興光'))->add(); // 獻詩
(new Slides\Preach( // 講道
    $ppt,
    '異象要看見',
    '陳小冬牧師',
	array(
        new Slides\Verse($ppt, '箴', 29, 18), // 讀經
        new Slides\Verse($ppt, '提後', 3, 14, 17), // 讀經
        new Slides\Verse($ppt, '賽', 6, 1, 11), // 讀經
    ), // 序言
    array(
        '看見城邑的荒涼 - 百姓心蒙脂油' => array(
            new Slides\Verse($ppt, '賽', 6, 9, 11), // 讀經
            new Slides\Verse($ppt, '尼', 2, 17, 20), // 讀經
            new Slides\Verse($ppt, '賽', 6, 10), // 讀經
        ),
        '看見寶座的榮耀 - 撒拉弗的呼喊' => array(
            new Slides\Verse($ppt, '賽', 6, 1, 4), // 讀經
            new Slides\Verse($ppt, '書', 6, 14, 20), // 讀經
        ),
        '看見門檻的震動 - 殿充滿了煙雲' => array(
            new Slides\Verse($ppt, '賽', 6, 1, 4), // 讀經
            new Slides\Verse($ppt, '摩', 9, 1, 8), // 讀經
            new Slides\Verse($ppt, '利', 16, 6, 13), // 讀經
        ),
        '看見事奉的榜樣 - 撒拉弗的事奉' => array(
            new Slides\Verse($ppt, '賽', 6, 1, 4), // 讀經
            new Slides\Verse($ppt, '提前', 4, 6, 16), // 讀經
            new Slides\Verse($ppt, '箴', 29, 18), // 讀經
        ),
    )
))->add();
(new Slides\Tithing($ppt))->add(); // 奉獻
(new Slides\Visitor($ppt))->add(); // 新朋友
(new Slides\Report(
	$ppt,
	array(
		'我們誠心歡迎初次參加本教會敬拜的朋友。請留下姓名、地址、讓我們關心您，並邀請您參加各團契讀經小組、禱告會。',
		'上主日受洗歸主新肢體有：宋福宣、宋清玲，請為他們身心靈成長蒙恩，一生堅定跟隨主代禱。',
		'下主日將有聖洗禮，目前已報名者:謝美蘭、陳姊一、何蔚洋，願意受洗歸入主名下者，請向陳牧師報名。另外，每週主日（除了每個月第2個主日以外）早上9：00在副堂教室，陳牧師將為已經受洗的初信者、即將受洗歸入主名下的人或希望對福音有更多認識的新朋友開談道班，歡迎參加。',
		'下主日為聖餐主日，請弟兄姊妹預備心領受主的聖餐，並紀念主耶穌的救贖宏恩。',
		'下主日將有教會大掃除，各牧區團契負責打掃的區域分配圖，請參閱佈告欄，請大家帶便服、清潔工具等，一起來打掃，關心神家裡的事。',
		'長執會消息:12月份長執會將於本週六 (12月2日)上午9:30在黃金海岸教會舉行，請長執們預備心出席，如有困難，請先提出，也請弟兄姊妹為布里斯本與黃金海岸教會的長執同工身心靈與服事代禱。',
		'請團契輔導會長特別注意，下一季2018年1~3月服事表正在編排中，請輔導會長務必將下一季服事表於本週四(11月30日)前交給康傳道。',
		'本堂董事會已決議通過，對於本堂的基督徒或門徒，參加明年15/5~19/5訪韓聖會，有機票補助。補助條件、補助金額與時間如下：
			A.補助條件:必須是本堂的基督徒或門徒(請牧區長或團契輔導認定)，
					   並且於今年12月31日前向顏瑞峰傳道報名及每位繳交
					   訂金200元者(若因故無法成行者，所繳訂金將不退還)
			B.補助金額:(a)全時間在學學生，給於每人補助500元。(請提出證明)
					   (b)其他弟兄姊妹(成人或小孩) ，給於每人補助300元。
			C.發放時間:將於明年訪韓聖會期間，連同訂金200元一併發放。
			詳細的訪韓行程資料已公佈在母堂的佈告欄，請弟兄姊妹自行參閱。',
		'今年聖誕節的慶祝活動，將由康世興傳道負責統籌，分成對外與對內部份，請弟兄姊妹參看以下資訊，並為此聖工代禱：'
	)
))->add();
(new Slides\Intercession( // 代禱
    $ppt,    
	array(
		'為教會擴建工程所需的經費與後續施工的順利平安代禱。',
		'為教會各團契擴張為牧區所需的同工與信心的看見代禱。',
	)
))->add();
(new Slides\Dedication( // 上週奉獻
	$ppt,
	'主日敬拜466.95；主日學14.15；週四禱告會260.45；週二禱告會88.50；雙語堂主日敬拜1478.95；雙語堂主日學13.70；週六聯合團契 51.90；西區佈道所主日敬拜155.60；週五西區團契99.25；',
	array(
		'什 一' => '胡羽恆 50; R&J Yen F/T 100; The Chen F/T 50; 黃隆聲夫婦 120; P.J 650; 曾奕智 175;陳振傳夫婦 300; 康世興全家 100; 黃耀群夫婦 100; 浣熊L. L. 100;劉琦全家 100; JPH 250; Tak Lei, Lam 30; JHRL 200; C.V.J. 240; W.J. 500; 尤聖皓 & 李笑怡 500; 李磊全家 100; YANG 100; 謝坤儒&杜斯斯 180; Victoria 250; 宋瑞琪 120; 宋安琪 100;李彥霆Sam 50;張力 120; 楊海默Tom 20;',
		'感 恩' => '鄭次郎夫婦 20; 顧錦瑞 300; Hong & Sonia 100; 無名氏 5.5; Bright & Vivian 50; 李森麟全家 50; 唐俊英 20;',
		'建 堂' => 'Fiona & Steve 200; Lee H.W 20;',
		'宣 教' => '翁浩夫婦 400;',
		'購地認獻' => '陳小冬全家 300; The Chen F/T 50; 蔡尚恩 5; 大雄Shaun 10; 蔡重良全家 120; 魏趙琪 20; EN Liao 50; Nicholas Yim 10; 張紅蕾 50; 陳雅蕊 50; 袁玲玲 50; C.V.J. 10; 李磊全家 140; 莊貴香 50; 謝坤儒&杜斯斯 40; 丁瑞良夫婦 20; Sophia Qin 20; E & E 50; 凃秀鴻夫婦 100; Sam & Kelly 100; 宋安琪 20;',
	)
))->add();

(new Slides\WeeklyVerse($ppt, '人若自潔，脫離卑賤的事，就必作貴重的器皿，成為聖潔，合乎主用，預備行各樣的善事。', '提摩太後書 2:21'))->add(); // 金句
(new Slides\Hymn($ppt, 409))->add(); // 唱詩
(new Slides\LordsPrayer($ppt))->add(); // 主禱文
(new Slides\Ending($ppt))->add(); // 結束

require __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'OHPGen' . DIRECTORY_SEPARATOR . 'footer.php';