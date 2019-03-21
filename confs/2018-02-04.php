<?php
require __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'OHPGen' . DIRECTORY_SEPARATOR . 'header.php';
use \Core\Slides;

// 早禱
(new Slides\Worship($ppt, '06_每當我瞻仰祢.ini'))->add();

// pw
(new Slides\Worship($ppt, '04_神本為大.ini'))->add();
(new Slides\Worship($ppt, '04_返樸歸真.ini'))->add();
(new Slides\Worship($ppt, '07_主你是我的盼望.ini'))->add();
(new Slides\Worship($ppt, '06_君王就在這裡.ini'))->add();
//
//// 主日
(new Slides\Opening($ppt))->add(); // 關手機
(new Slides\Hymn($ppt, 8))->add(); // 唱詩
(new Slides\Verse($ppt, '創', 1, 26, 28))->add(); // 讀經
(new Slides\Verse($ppt, '創', 2, 4, 24))->add(); // 讀經
(new Slides\Hymn($ppt, 19))->add(); // 唱詩
(new Slides\ApostlesCreed($ppt))->add(); // 認信
(new Slides\GroupWorship($ppt, '雙語堂'))->add(); // 獻詩
(new Slides\Preach( // 講道
    $ppt,
    '宣講幸福之道',
    '陳小冬牧師',
	array(
        new Slides\Verse($ppt, '創', 1, 26, 28), // 讀經
        new Slides\Verse($ppt, '創', 2, 4, 24), // 讀經
    ), // 序言
    array(
        '宣講慈愛之道' => array(
            new Slides\Verse($ppt, '創', 2, 8, 18), // 讀經
            new Slides\Verse($ppt, '詩', 63, 1, 5), // 讀經
            new Slides\Verse($ppt, '詩', 136, 1, 26), // 讀經
            new Slides\Verse($ppt, '羅', 5, 7, 11), // 讀經
        ),
        '宣講平安之道' => array(
            new Slides\Verse($ppt, '創', 2, 18, 24), // 讀經
            new Slides\Verse($ppt, '箴', 3, 1, 18), // 讀經
        ),
        '宣講法治之道' => array(
            new Slides\Verse($ppt, '創', 2, 15, 17), // 讀經
            new Slides\Verse($ppt, '出', 20, 1, 17), // 讀經
        ),
        '宣講自由之道' => array(
            new Slides\Verse($ppt, '創', 2, 7, 15), // 讀經
            new Slides\Verse($ppt, '路', 4, 14, 21), // 讀經
            new Slides\Verse($ppt, '約', 8, 31, 36), // 讀經
            new Slides\Verse($ppt, '加', 5, 1, 15), // 讀經
        ),
        '宣講民主之道' => array(
            new Slides\Verse($ppt, '創', 1, 26, 28), // 讀經
        ),
    )
))->add();
(new Slides\Tithing($ppt))->add(); // 奉獻
(new Slides\Visitor($ppt))->add(); // 新朋友
(new Slides\Report(
	$ppt,
	array(
        '我們誠心歡迎初次參加本教會敬拜的朋友。請留下姓名、地址、讓我們關心您，並邀請您參加各團契讀經小組、禱告會。',
        '本主日將有聖洗禮，目前已報名的新肢體:郭子锐、张鸣、韓穎、王釗、Shi Lyu、张儒轩、郭明歌、章雨晨，願意受洗歸入主名下者，請向陳牧師報名。每週主日（除了每個月第2個主日以外）早上9：00在副堂教室，陳牧師將為已受洗的初信者、即將受洗或希望對福音有更多認識的新朋友開談道班，歡迎大家參加。',
        '本主日為聖餐主日，請弟兄姊妹預備心領受主的聖餐，並紀念主耶穌的救贖宏恩。',
        '本主日將召開二月份的同工會，請傳道、長老、執事、牧區長、團契輔導、會長與各讀經小組的組長於本主日愛筵後儘快到主堂開會。',
        '下主日將有教會大掃除，各牧區團契負責打掃的區域分配圖，請參閱佈告欄，請大家帶便服、清潔工具等，一起來打掃，關心神家裡的事。',
        '長執會消息: 二月份長執會將於本週六 (2月10日)上午9:30在黃金海岸教會舉行，請長執們預備心出席，也請弟兄姊妹為布里斯本與黃金海岸教會的長執同工身心靈與服事代禱。',
        '教會禱告會在每週二早上9：00和週四晚上7：00開始，為自己、家庭、工作、團契擴張、教會、宣教、植堂、國家蒙恩迫切禱告。',
        '恩道聯合詩班已於每週四恢復練習詩歌，時間從下午6：§00開始，請各團契指派3位弟兄姊妹參加聯合詩班。',
        '教會2~3月份福音隊的服事表已公佈在佈告欄，每週六早上10:30在Sunnypark集合，請各團契輔導注意服事日期，鼓勵大家踴躍參加。',
        '今年第30屆亞細亞聖徒訪韓聖會將於5月15日到5月19日舉行，本屆主題「傳承與復興」，自即日起到2月底為止，仍接受報名，報名時請繳交訂金200元、報名表、護照影本，請已報名的弟兄姊妹，在3月30日前提供進出韓國的班機日期、時間以及班機號碼。另外，進入韓國的簽證，請務必事先確認(澳洲及台灣護照免簽證，其他護照需要進一步查詢)，相關訊息請洽詢陳慧如師母。',
        '為培植更多宣教與植堂的神國工人，本堂恩道潛能開發學校將於2月份開設以下神學裝備課程，相關訊息如下：課程報名表在招待處領取，歡迎弟兄姊妹踴躍報名。',
        '教會推行一年讀完一遍聖經(依照週報所列進度)，目前已完成者:翁浩、鄭皓駿、宦怡君、唐俊英，將於本主日舉行頒獎。',
        '今年 UQ Open day 將在下週三(2月14日)舉行。請各堂有負擔的弟兄姐妹來支援校園團契。有負擔者請聯絡陳慧如師母或張芸蓁姊妹(Jasmine，聯絡電話:0403725737)。',
        '為了慶祝黃金海岸教會20週年慶，教會正在籌備拍攝布里斯本各堂的祝福影片，請各團契輔導推薦5位弟兄姊妹，每個團契預備大約10秒的祝福賀詞即可，請將名單交給黃煒霖弟兄。',
	)
))->add();
(new Slides\Intercession( // 代禱
    $ppt,
	array(
        '為教會擴建工程所需的經費與後續施工的順利平安代禱。',
        '為教會各團契擴張為牧區所需的同工與信心的看見代禱。',
        '雷奶奶(雷李小文姊妹的媽媽)，已於日前安息主懷，求主安慰家屬，並為家人料理後事一切事宜，有主的平安代禱。',
        '感謝主，黃勝軍、楊小芬夫婦於上週得一女，母女平安。',
	)
))->add();
(new Slides\Dedication( // 上週奉獻
	$ppt,
	'主日敬拜1389.20；主日學45.75；週二禱告會 54.95；週四禱告會 169.60；週六聯合團契238.20；西區教會主日敬拜176.70；週五西區團契 155.95；',
	array(
		'什 一' => '陳小冬全家 500; The Chen F/T 50; 黃隆聲夫婦 120; 梁文晉 1500;康世興全家 100; P.J 650; Emmanuel 700; 黃耀群夫婦 100; 浣熊L. L. 100; Tak Lei, Lam 100; M & C 50; 劉琦全家 50; Nicholas Yim 80; C.L 100; 李翔 50; C.V.J. 50;謝坤儒&杜斯斯 180; 李磊全家 75; 白孟玄全家 350; 宋瑞琪 65; Ryan & Wendy 50; 宋安琪 100;',
		'感 恩' => '鄭次郎夫婦 30; R&J Yen F/T 300; Hong & Sonia 100; Bright & Vivian 50; 李森麟全家 50; Ryan & Wendy 300; Theresa Li 1700;',
		'建 堂' => '何利珍全家 100; 陳素嫻 & 李銘哲 100; Bright & Vivian 50; 李森麟全家 50;',
		'宣 教' => '翁浩夫婦 400; Samuel Chen 10; 大雄Shaun 15;',
		'購地認獻' => '胡羽恆 100; The Chen F/T 50; 陳亞萍 10; 康世興全家 300; 吳貴茂全家 50; 蔡尚恩 5; 黃金英 50; 蔡重良全家 130;李磊全家 75; 謝坤儒&杜斯斯 40; Sophia Qin 20; C.V.J. 10; Sam & Kelly 200;',
	)
))->add();

(new Slides\WeeklyVerse($ppt, '你們要守我的安息日，敬我的聖所。我是耶和華。', '利未記 19：30'))->add(); // 金句
(new Slides\Baptized($ppt, array('郭子锐','张鸣','韓穎','王釗','Shi Lyu','张儒轩','郭明歌','章雨晨')))->add(); // 大主日
(new Slides\LordsPrayer($ppt))->add(); // 主禱文
(new Slides\Hymn($ppt, 3))->add(); // 唱詩
(new Slides\Ending($ppt))->add(); // 結束

require __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'OHPGen' . DIRECTORY_SEPARATOR . 'footer.php';