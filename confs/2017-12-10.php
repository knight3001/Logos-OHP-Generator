<?php
require __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'OHPGen' . DIRECTORY_SEPARATOR . 'header.php';
use \Core\Slides;

// 早禱
//(new Slides\Worship($ppt, '04_讚美之泉.ini'))->add();

// pw
(new Slides\Worship($ppt, '07_信靠每一句應許.ini'))->add();
(new Slides\Worship($ppt, '06_我要全心讚美.ini'))->add();
(new Slides\Worship($ppt, '05_我渴望看見.ini'))->add();
(new Slides\Worship($ppt, '04_祢是配得.ini'))->add();
// 主日
(new Slides\Opening($ppt))->add(); // 關手機
(new Slides\Hymn($ppt, 7))->add(); // 唱詩
(new Slides\Verse($ppt, '瑪', 4, 4, 6))->add(); // 讀經
(new Slides\Hymn($ppt, 169))->add(); // 唱詩
(new Slides\ApostlesCreed($ppt))->add(); // 認信
(new Slides\GroupWorship($ppt, '愛家/迦拿'))->add(); // 獻詩
(new Slides\Preach( // 講道
    $ppt,
    '基督化家庭的使命',
    '陳邱美娣牧師',
	array(
        new Slides\Verse($ppt, '瑪', 4, 4, 6), // 讀經
        new Slides\Verse($ppt, '約', 1, 14, 16), // 讀經
    ), // 序言
    array(
        '全人全心轉向神' => array(
            new Slides\Verse($ppt, '瑪', 3, 7), // 讀經
            new Slides\Verse($ppt, '約', 1, 16, 17), // 讀經
        ),
        '帶領家人信靠神' => array(
            new Slides\Verse($ppt, '瑪', 4, 5), // 讀經
            new Slides\Verse($ppt, '書', 24, 15), // 讀經
        ),
        '教養兒女歸回神' => array(
            new Slides\Verse($ppt, '瑪', 4, 6), // 讀經
            new Slides\Verse($ppt, '詩', 127, 1, 5), // 讀經
            new Slides\Verse($ppt, '詩', 128, 1, 6), // 讀經
        ),
    )
))->add();
(new Slides\Tithing($ppt))->add(); // 奉獻
(new Slides\Visitor($ppt))->add(); // 新朋友
(new Slides\Report(
	$ppt,
	array(
		'我們誠心歡迎初次參加本教會敬拜的朋友。請留下姓名、地址、讓我們關心您，並邀請您參加各團契讀經小組、禱告會。',
		'上主日受洗歸主名下的新肢體有：謝美蘭、徐善良、方惠、張淑兰、陳姊一、何蔚洋、邵宇晨，請為他們身心靈成長、蒙恩、一生堅定跟隨主代禱。',
		'2018年1月7日將有聖洗禮，願意受洗歸入主名下者，請向陳牧師報名。每週主日（除了每個月第2個主日以外）早上9：00在副堂教室，陳牧師將為已受洗的初信者、即將受洗或希望對福音有更多認識的新朋友開談道班，歡迎大家參加。',
		'2018年教會年度主題:「宣教、植堂」，主題經文:使徒行傳1章8節、使徒行傳16章3~9節。',
		'2018年1~3月的服事表已印製完成，公佈在公佈欄，請在招待處領取。',
		'本堂董事會已決議通過，對於本堂的基督徒或門徒，參加明年15/5~19/5訪韓聖會，有機票補助。補助條件、補助金額與時間如下：
		A.補助條件:必須是本堂的基督徒或門徒(請牧區長或團契輔導認定)，
				   並且於今年12月31日前向顏瑞峰傳道報名及每位繳交
				   訂金200元者(若因故無法成行者，所繳訂金將不退還)
		B.補助金額:(a)全時間在學學生，給於每人補助500元。(請提出證明)
				   (b)其他弟兄姊妹(成人或小孩) ，給於每人補助300元。
		C.發放時間:將於明年訪韓聖會期間，連同訂金200元一併發放。
		詳細的訪韓行程資料已公佈在母堂的佈告欄，請弟兄姊妹自行參閱。',
		'今年聖誕節的慶祝活動，將由康世興傳道負責統籌，分成對外與對內部份，請弟兄姊妹參看以下資訊，並為此聖工代禱：',
		'新的一年又即將開始了，教會推行一年讀完一遍聖經(依照週報所列進度)，完成者即贈送一本啟導本聖經和獎狀，立志者請弟兄姊妹們向各團契輔導領取2018年空白立約書、讀經作業規定與讀經進度表，並向各團契輔導報名並簽立約書。另外，請各團契輔導將已經完成或即將完成者的名單及讀經作業儘快交給陳師母。',
	)
))->add();
(new Slides\Intercession( // 代禱
    $ppt,    
	array(
		'為教會擴建工程所需的經費與後續施工的順利平安代禱。',
		'為教會各團契擴張為牧區所需的同工與信心的看見代禱。',
		'為返鄉弟兄姊妹學業、事業、家庭及一生走在主蒙福之路代禱。',
	)
))->add();
(new Slides\Dedication( // 上週奉獻
	$ppt,
	'主日敬拜1025.25；主日學42.40；週四禱告會 331.55；週二禱告會60.20；週五西區團契129.50；',
	array(
		'什 一' => '陳小冬 400; 胡保華夫婦 500; 胡羽恆 220; R&J Yen F/T 50; The Chen F/T 50; P.J 650;黃隆聲夫婦 120; 梁振堯夫婦 180;康世興全家 100; I-en & Melissa 200; Tseng 200; 曾奕智 80; Lee H.W 70; JPH 250; Katie Yiu 140; Tak Lei, Lam 100; M & C 100; 李翔 100; JHRL 200; C.V.J. 200; 李磊全家 100; 謝坤儒&杜斯斯 180; Victoria 310; 宋瑞琪 70; 唐俊英 85; Sophia Qin 270; 宋安琪 100; JCVS 100;',
		'感 恩' => '梁振堯夫婦 50; Tseng 200; Hong & Sonia 100; Bright & Vivian 50; 李森麟全家 50;',
		'建 堂' => '鄭次郎夫婦 100; Fiona & Steve 200; 吳貴茂全家 50; Bright & Vivian 50; 李森麟全家 50; ',
		'宣 教' => '翁浩夫婦 400; Tseng 100; 黃耀群夫婦 100;',
		'購地認獻' => '胡羽光 20; The Chen F/T 50; C.C.Y F/T 50; 黃隆聲夫婦 800; 梁振堯夫婦 100; Tommy 50; Audrey Cheng 30; 蔡尚恩 5; Samuel Chen 5; Lydia Chen 10; 浣熊L. L. 100; Debby Chen 300; 李宗澤Matthew Li 10; 蔡重良全家 120; 嚴健明Ken Yim 250; Katie Yiu 60; Dave & Pauline 2000; C.V.J. 10; 李磊全家 110; Frank湯全家 120; 謝坤儒&杜斯斯 40; JCVS 100;',
		'其 他' => '售領帶 20;',
	)
))->add();

(new Slides\WeeklyVerse($ppt, '主　神說：「我是阿拉法，我是俄梅戛[阿拉法，俄梅戛：是希臘字母首末二字]，是昔在、今在、以後永在的全能者。」', '啟示錄 1:8'))->add(); // 金句
(new Slides\Hymn($ppt, 102))->add(); // 唱詩
(new Slides\LordsPrayer($ppt))->add(); // 主禱文
(new Slides\Ending($ppt))->add(); // 結束

require __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'OHPGen' . DIRECTORY_SEPARATOR . 'footer.php';