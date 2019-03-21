<?php
require __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'OHPGen' . DIRECTORY_SEPARATOR . 'header.php';
use \Core\Slides;

(new Slides\Worship($ppt, '03_新天地.ini'))->add();
(new Slides\Worship($ppt, '09_願我的磐石被人稱頌.ini'))->add();
(new Slides\Worship($ppt, '02_聖所.ini'))->add();
(new Slides\Worship($ppt, '04_祢是配得.ini'))->add();

(new Slides\Opening($ppt))->add(); // 關手機
(new Slides\Hymn($ppt, 19))->add(); // 唱詩
(new Slides\Verse($ppt, '詩', 33, 12, 18))->add(); // 讀經
(new Slides\Hymn($ppt, 16))->add(); // 唱詩
(new Slides\ApostlesCreed($ppt))->add(); // 認信
(new Slides\GroupWorship($ppt, '提多'))->add(); // 獻詩
(new Slides\Preach( // 講道
    $ppt,
    '使徒的使命',
    '陳小冬牧師',
	array(
		new Slides\Verse($ppt, '詩', '33', '12', '18'),
	), // 序言
    array(
        '變成卓越的自己' => array(
            new Slides\Verse($ppt, '詩', 33, 13, 15),
            new Slides\Verse($ppt, '可', 9, 23, 29),
            new Slides\Verse($ppt, '腓', 4, 10, 13),
        ),
        '造就榮耀的教會' => array(
            new Slides\Verse($ppt, '詩', 33, 12, 18),
            new Slides\Verse($ppt, '弗', 4, 8, 16),
        ),
        '創造蒙福的國家' => array(
            new Slides\Verse($ppt, '詩', 33, 12),
            new Slides\Verse($ppt, '詩', 33, 16, 18),
            new Slides\Verse($ppt, '詩', 33, 4, 5),
            new Slides\Verse($ppt, '詩', 33, 11, 15),
        ),
    )
))->add();
(new Slides\Tithing($ppt))->add(); // 奉獻
(new Slides\Visitor($ppt))->add(); // 新朋友
(new Slides\Report(
	$ppt,
	array(
      '我們誠心歡迎初次參加本教會敬拜的朋友。請留下姓名、地址、讓我們關心您，並邀請您參加各團契讀經小組、禱告會',
      '下主日將有聖洗禮，目前已報名：徐志強、王程槿、Jayden Jack Kwong，願意受洗歸入主名下者，請向陳牧師報名。另外，每週主日（除了每個月第2個主日以外）早上9：00在副堂教室，陳牧師將為已經受洗的初信者、即將受洗歸入主名下的人或希望對福音有更多認識的新朋友開談道班，歡迎大家踴躍參加。',
      '下主日為聖餐主日，請弟兄姊妹預備心領受主的聖餐，並紀念主耶穌的救贖宏恩。',
      '下主日將召開7月份的同工會，請長老、執事、牧區長、團契輔導、會長與各讀經小組的組長於下主日愛筵後儘快到主堂開會。',
      '神學課程消息:恩道潛能開發學校將於7月30日(主日)開設「宣教學與福音策略(二) 」，沒上過以上課程(一)的弟兄姊妹，也非常歡迎試聽及報名，請大家踴躍來上課，並為今年教會弟兄姊妹「不是學生就是老師」代禱。',
      '教會為了購回建堂認股人，手中所持有的土地認購的股份，全部收歸教會所有，以利教會永續發展。經董事會和長執會的決議: 發起建堂奉獻。請主內弟兄姊妹(限已受洗的基督徒)，憑著信心簽立  「基督教恩道會教會建堂購地認獻立約書」，請大家注意以下幾點:
        (1)奉獻起訖日期:請儘量填入2017年至2021年(每月固定奉獻) 。
        (2)奉獻金額多寡:完全不限，但請每位弟兄姊妹都能憑著信心簽立，並務必在「認獻人」欄位簽名。
        (3)傳達正確訊息: 真正了解認獻的意義，乃是支持教會永續發展。
        (4)在填寫奉獻袋時，請註明「購地認獻」，以方便會計部門作業。
        簽好之後請交給各團契輔導，再交由顏長老統計之。',
      '教會7~9月福音隊的服事表已公佈在佈告欄，每週六早上10:30在Sunnypark集合，請團契輔導注意服事日期，鼓勵大家踴躍參加。',
      '請各團契輔導注意，因為目前各團契正逐漸擴張為牧區的牧養，部份團契新年度的名稱及同工，若有任何調整，請儘快告知陳師母，並將連續刊登各團契新年度的名稱，及新任正副輔導、正副會長的名單一個月。目前新年度的的團契名稱變更如下:
      
      
      另外，7月1日為各團契同工(新舊任正副輔導、正副會長及同工)交接，請弟兄姊妹關心代禱。',
      '請各團契務必於六月底前將剩餘團契經費退回會計部，以重整新年度的報稅。',
      '因逢學校的假期，各讀經小組將從明天(6月26日)起放假2週，7月10日(週一)起再恢復聚會，請弟兄姊妹繼續關心新人。',
      '恩道團契將於本週三(6月28日)晚上6點半在翁長老家聚會，主題是「詩歌與見證」，歡迎弟兄姊妹參加。',
      '母堂7~8月主日午餐廚房事工，由提摩太團契負責服事。',
	)
))->add();
(new Slides\Intercession( // 代禱
    $ppt,    
	array(
		'為教會擴建工程所需的經費與後續施工的順利平安代禱。',
		'感謝主，邵炳(Alex)、李小婉(Lena)夫婦於上週一得一子，母子平安。陳哲健(Ken)、郭盈盈(Esther)夫婦於上週五得一千金，母女平安。'
	)
))->add();
(new Slides\Dedication( // 上週奉獻
	$ppt,
	'主日敬拜425.45；主日學19.35；週二禱告會86.50；週四禱告會385.30；週六聯合團契32.20；雙語堂主日敬拜1206.00；雙語堂主日學14.20；週五西區團契 112.00；西區佈道所主日敬拜79.30；',
	array(
		'什 一' => '胡羽恆 70; R&J Yen F/T 50; The Chen F/T 50; 陳亞萍 10; P.J 650; 康世興全家 100; Emmanuel 2400; I-en & Melissa 400; 浣熊L. L. 200; JMFL 600; W.Y 20; C.V.J. 175; 結斯敏 6; 謝坤儒&杜斯斯 160; 白孟玄全家 140; 宋瑞琪 100; D. Yang 50; 唐俊英 250; Ryan & Wendy 120; Sam全家 50; 謝帛翰H.H 150; 宋安琪 90; 何利珍全家 72.10; 劉琦全家 50; AYXL 1000; JPH 250; Tak Lei, Lam 40; MY12 100; Yan 50; 方咏賢 20; 王靖 350;Y 2000;K 3000;',
		'感 恩' => '鄭次郎夫婦 20; Tseng 50 ; Hong & Sonia 100; 吳福瑞全家 50 ; Bright & Vivian 50; 唐俊英 50;',
		'建 堂' => 'Fiona & Steve 200; Tseng 100; Lee H.W 20; 張筱麗全家 10; 王靖 100;',
		'宣 教' => '翁浩夫婦 500; Tseng 100; 黃耀群夫婦 100;',
		'購地認獻' => '陳小冬全家 1300; The Chen F/T 50; 陳亞萍 10;梁文晉 60; 吳桂茂全家 50; 蔡重良全家 120; W.Y 20; C.V.J. 10; Bright & Vivian 50; Brock全家 20; 謝坤儒&杜斯斯 40; 唐俊英 50; Ryan & Wendy 40; Sophia Qin 20; Sam & Kelly 100; 謝帛翰H.H 50; 丁偉&張小琼 50; 宋安琪 10; EN Liao 10; 黃金英 50; 歐伊甸 Cherry 30; C.L 25; 大雄Shaun 5;',
	)
))->add();

(new Slides\WeeklyVerse($ppt, '凡敬畏耶和華，遵行他道的人，便為有福。', '詩篇128:1'))->add(); // 金句
(new Slides\Hymn($ppt, 166))->add(); // 唱詩
(new Slides\LordsPrayer($ppt))->add(); // 主禱文
(new Slides\Ending($ppt))->add(); // 結束

require __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'OHPGen' . DIRECTORY_SEPARATOR . 'footer.php';