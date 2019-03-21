<?php
require __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'OHPGen' . DIRECTORY_SEPARATOR . 'header.php';
use \Core\Slides;

// 早禱
(new Slides\Worship($ppt, '04_何等恩典.ini'))->add();

// pw
(new Slides\Worship($ppt, '09_這是耶和華所定日子.ini'))->add();
(new Slides\Worship($ppt, '05_尊貴全能神.ini'))->add();
(new Slides\Worship($ppt, '07_每一天我需要祢.ini'))->add();
(new Slides\Worship($ppt, '04_因為有你.ini'))->add();
// 主日
(new Slides\Opening($ppt))->add(); // 關手機
(new Slides\Hymn($ppt, 20))->add(); // 唱詩
(new Slides\Verse($ppt, '賽', 54, 1, 10))->add(); // 讀經
(new Slides\Hymn($ppt, 185))->add(); // 唱詩
(new Slides\ApostlesCreed($ppt))->add(); // 認信
(new Slides\GroupWorship($ppt, '愛家/迦拿'))->add(); // 獻詩
(new Slides\Preach( // 講道
    $ppt,
    '擴張慈愛之道',
    '陳小冬牧師',
	array(
        new Slides\Verse($ppt, '賽', 54, 1, 10), // 讀經
    ), // 序言
    array(
        '神的慈愛不離開你' => array(
            new Slides\Verse($ppt, '賽', 54, 8, 10), // 讀經
            new Slides\Verse($ppt, '出', 14, 17, 22), // 讀經
            new Slides\Verse($ppt, '出', 20, 1, 6), // 讀經
            new Slides\Verse($ppt, '詩', 103, 8, 18), // 讀經
        ),
        '要擴張你帳幕之地' => array(
            new Slides\Verse($ppt, '賽', 54, 1, 3), // 讀經
            new Slides\Verse($ppt, '代上', 4, 9, 10), // 讀經
            new Slides\Verse($ppt, '太', 28, 16, 20), // 讀經
            new Slides\Verse($ppt, '徒', 1, 6, 8), // 讀經
        ),
        '救主是教會的丈夫' => array(
            new Slides\Verse($ppt, '賽', 54, 5, 7), // 讀經
            new Slides\Verse($ppt, '何', 2, 16, 20), // 讀經
            new Slides\Verse($ppt, '弗', 5, 25, 32), // 讀經
            new Slides\Verse($ppt, '啟', 19, 7, 10), // 讀經
            new Slides\Verse($ppt, '啟', 21, 9, 10), // 讀經
        ),
        '永遠的慈愛憐恤你' => array(
            new Slides\Verse($ppt, '賽', 54, 4, 8), // 讀經
            new Slides\Verse($ppt, '來', 4, 12, 16), // 讀經
        ),
    )
))->add();
(new Slides\Tithing($ppt))->add(); // 奉獻
(new Slides\Visitor($ppt))->add(); // 新朋友
(new Slides\Report(
	$ppt,
	array(
        '我們誠心歡迎初次參加本教會敬拜的朋友。請留下姓名、地址、讓我們關心您，並邀請您參加各團契讀經小組、禱告會。',
        '下主日將有聖洗禮，目前已報名受洗:林明彥、余明花、Xiaoying Xie，願意受洗歸入主名下者，請向陳牧師報名。每週主日（除了每個月第2個主日以外）早上9：00在副堂教室，陳牧師將為已受洗的初信者、即將受洗或希望對福音有更多認識的新朋友開談道班，歡迎大家參加。',
        '下主日為聖餐主日，請弟兄姊妹預備心領受主的聖餐，並紀念主耶穌的救贖宏恩。',
        '請團契輔導會長特別注意，下一季2018年4~6月服事表正在編排中，請輔導會長務必將下一季服事表於本週二(2月27日)前交給康傳道。',
        '教會禱告會在每週二早上9：00~10:30和週四晚上7：00~9:00開始，為自己、家庭、工作、團契擴張、教會、宣教、植堂、國家蒙恩禱告。',
        '教會3月份福音隊的服事表已公佈在佈告欄，每週六早上10:30在Sunnypark集合，請各團契輔導注意服事日期，鼓勵大家踴躍參加。',
        '今年第30屆亞細亞聖徒訪韓聖會將於5月15日到5月19日舉行，本屆主題「傳承與復興」，自即日起到2月28日為止，仍接受報名，報名時請繳交訂金200元、報名表、護照影本，請已報名的弟兄姊妹，在3月20日前提供進出韓國的班機日期、時間以及班機號碼。另外，進入韓國的簽證，請務必事先確認(澳洲及台灣護照免簽證，其他護照需要進一步查詢)，相關訊息請洽詢顏瑞峰傳道或陳慧如師母。',
        '為培植更多宣教與植堂的神國工人，本堂恩道潛能開發學校將於2月份開設以下神學裝備課程，相關訊息如下：       課程報名表在招待處領取，歡迎弟兄姊妹踴躍報名。',
        '所有校園團契將從本週二(2月27日)開始，時間:12:00~14:00，相關訊息請與各同工聯絡。(UQ:張芸蓁姊妹Jasmine，聯絡電話:0403725737)',
        'Griffith 大學在3月1日(週四)是校園Market Day，本堂將設立福音攤位，請踴躍參與校園福音事工，有負擔者請與鄭淑玲姊妹聯絡。',
        '教會推行一年讀完一遍聖經(依照週報所列進度)，目前已完成者:        任璐、黃煒霖，將於3月4日舉行頒獎。',
        '會計部消息:請弟兄姊妹注意，若是記名奉獻，請務必填寫姓名(切勿使用奇怪的稱呼)、奉獻日期、奉獻項目、奉獻金額(請核對實際金額是否吻合)，若有其他相關問題，請詢問會計部同工。',
        '3月、4月主日午餐廚房事工，由牧愛牧區負責服事。',
	)
))->add();
(new Slides\Intercession( // 代禱
    $ppt,    
	array(
		'為教會擴建工程所需的日期經費與後續施工的順利平安代禱。',
		'為宣教與植堂所需的會堂、同工服事與培訓代禱。',
		'為陳振傳長老、徐曉川執事的身體早日康復代禱。',
        '感謝主，李彦霆(Sam)、刘文颖(Wendy)夫婦於上週得一女，母女平安。',
	)
))->add();
(new Slides\Dedication( // 上週奉獻
	$ppt,
	'主日敬拜551.40；主日學43.85；週二禱告會 64.00；週六聯合團契34.20；雙語堂主日敬拜676.95；雙語堂主日學19.90；週四禱告會153.10；週五西區團契 162.35；西區教會主日敬拜245.15；',
	array(
		'什 一' => '陳邱美娣 200; R&J Yen F/T 50; The Chen F/T 50; 黃隆聲夫婦 120;康世興全家 100; P.J 650; 曾奕智 160; 浣熊L. L. 150; JPH 240; 劉琦全家 50; Nicholas Yim 70; 顧錦花 100; 李翔 50; KCEK 560; C.V.J. 340; 鄭朝鴻全家 100; 李磊全家 140; YANG 100; 謝坤儒&杜斯斯 180; 白孟玄全家 80; 趙芯斕 420; 宋瑞琪 120; 謝帛翰H.H 250; 宋安琪 110;',
		'感 恩' => '鄭次郎夫婦 20; R&J Yen F/T 100; Tseng 100; Hong & Sonia 100; Bright & Vivian 50; 李森麟全家 50; E & E 200; Joe & Kathy 50; 黃逸群 20; 路博涵 50;',
		'建 堂' => 'Fiona & Steve 400; 吳貴茂全家 50; Tseng 100;',
		'宣 教' => '翁浩夫婦 400; 黃耀群夫婦 100; 大雄Shaun 10;',
		'購地認獻' => '胡羽恆 100; 胡羽光 20; The Chen F/T 50; 陳亞萍 10; P.J 300; 蔡重良全家 130; 蔡尚恩 5; 何利珍全家 50; 張紅蕾 50; 周月霞 25; 陳雅蕊 50; 袁玲玲 50; C.V.J. 10; Wayne Lee 400; 李磊全家 140; Brock全家 20; 謝坤儒&杜斯斯 40; 丁瑞良夫婦 20; Sophia Qin 120; Sam & Kelly 100; 謝帛翰H.H 150; 盧立清 200;',
	)
))->add();

(new Slides\WeeklyVerse($ppt, '你若聽從耶和華你神的誡命，就是我今日所吩咐你的，謹守遵行，不偏左右，也不隨從事奉別神，耶和華就必使你作首不作尾，但居上不居下。', '申命記 28：13-14'))->add(); // 金句
(new Slides\Hymn($ppt, 19))->add(); // 唱詩
(new Slides\LordsPrayer($ppt))->add(); // 主禱文
(new Slides\Ending($ppt))->add(); // 結束

require __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'OHPGen' . DIRECTORY_SEPARATOR . 'footer.php';