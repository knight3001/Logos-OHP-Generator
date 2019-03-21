<?php
require __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'OHPGen' . DIRECTORY_SEPARATOR . 'header.php';
use \Core\Slides;

//// 早禱
//(new Slides\Worship($ppt, '04_何等恩典.ini'))->add();
//
//// pw
(new Slides\Worship($ppt, '03_在這裡.ini'))->add();
(new Slides\Worship($ppt, '09_這是耶和華所定日子.ini'))->add();
(new Slides\Worship($ppt, '04_愛中相遇.ini'))->add();
(new Slides\Worship($ppt, '03_能不能.ini'))->add();
// 主日
(new Slides\Opening($ppt))->add(); // 關手機
(new Slides\Hymn($ppt, 280))->add(); // 唱詩
(new Slides\Verse($ppt, '創', 18, 16, 33))->add(); // 讀經
(new Slides\Hymn($ppt,377))->add(); // 唱詩
(new Slides\ApostlesCreed($ppt))->add(); // 認信
(new Slides\GroupWorship($ppt, '愛家/迦拿'))->add(); // 獻詩
(new Slides\Preach( // 講道
    $ppt,
    '得神旨意',
    '陳小冬牧師',
	array(
	    new Slides\Verse($ppt, '創', 18, 16, 33), // 讀經
    ), // 序言
    array(
        '得知神的旨意' => array(
            new Slides\Verse($ppt, '太', 6, 10), // 讀經
            new Slides\Verse($ppt, '太', 7, 21), // 讀經
            new Slides\Verse($ppt, '羅', 12, 2), // 讀經
            new Slides\Verse($ppt, '創', 18, 17, 23), // 讀經
        ),
        '得求神的旨意' => array(
            new Slides\Verse($ppt, '創', 18, 23, 32), // 讀經
        ),
        '得著神的旨意' => array(
            new Slides\Verse($ppt, '創', 18, 16, 19), // 讀經
            new Slides\Verse($ppt, '創', 18, 31, 33), // 讀經
        ),
        '得享神的旨意' => array(
            new Slides\Verse($ppt, '創', 18, 16, 19), // 讀經
            new Slides\Verse($ppt, '創', 19, 15, 16), // 讀經
            new Slides\Verse($ppt, '創', 19, 23, 26), // 讀經
            new Slides\Verse($ppt, '創', 19, 27, 38), // 讀經
        ),
    ),
	array(
        new Slides\Verse($ppt, '約一', 5, 13, 15), // 讀經
    ) // 結論
))->add();
(new Slides\Tithing($ppt))->add(); // 奉獻
(new Slides\Visitor($ppt))->add(); // 新朋友
(new Slides\Report(
    $ppt,
	array(
        '我們誠心歡迎初次參加本教會敬拜的朋友。請留下姓名、地址、讓我們關心您，並邀請您參加各團契讀經小組、禱告會。',
        '上主日受洗的新肢體有：戴學玲、林凱琳、林宇澤、林孟語，請為他們身心靈成長、蒙恩，一生堅定跟隨主代禱。',
        '下主日將有聖洗禮，目前已報名者:Wenwen Huang、姚鵬、梁越華、莫熙儀、莫熙言，願意受洗歸入主名下者，請向陳牧師報名。每週主日（除了每個月第2個主日以外）早上9：00在副堂教室，陳牧師將為已受洗的初信者、即將受洗或希望對福音有更多認識的新朋友開談道班，歡迎大家參加。',
        '下主日請弟兄姊妹回母堂參加聖餐主日，並預備心領受主的聖餐，以紀念主耶穌的救贖宏恩。',
        '第十一任長老執事已於7月8日同工投票產生，長老有5位：黃隆聲、于同芬、林欣燕、陳玲慧、黃煒霖；執事有15位：莊溢恩、毛天霖、鄭力夫、莊貴香、鄭朝鴻、趙芯斕、謝坤儒、曾奕智、宦之軒、李磊、蔡曉緯、王悅涵、黃千綺、李宏仁、林毅恩。將於下主日舉行按立，請弟兄姊妹為他們身心靈和服事得力代禱。',
        '下主日將有教會大掃除，各牧區團契負責打掃的區域分配圖，請參閱佈告欄，請大家帶便服、清潔工具等，一起來打掃，關心神家裡的事。',
        '為更新年度的團契通訊錄，請各團契輔導於七月底前將新年度的團契同工 (請務必註明同工職稱，如正副輔導、正副會長、各部門同工)以及弟兄姊妹、新人的中英文姓名、電子郵件及聯絡電話以電子檔的方式E-mail給康傳道(E-mail:kevinkanglogos@gmail.com)。',
        '請各位同工注意，每週六下午2點在教會召開牧區擴張的禱告造就會，請現任長執(長執當選人也要出席)、牧區長、團契正副輔導務必參加，若無法出席，請向陳牧師請假。',
        '教會目前週六聯合團契將轉型為牧區聯合慶典聚會，弟兄姊妹如有任何寶貴意見，請以書面企劃的方式E-mail給康傳道，再轉交陳牧師。',
        '每週二早上9：00~10:30和每週四晚上7：00~9:00在母堂有禱告會及門徒造就課程，請踴躍參加，為國家蒙恩、教會復興、宣教植堂、牧區團契、家庭工作及自己身心靈禱告與接受裝備。',
        '教會8~9月份福音隊的服事表已公佈在佈告欄，每週六早上10:30在Sunnypark集合，請各團契輔導注意服事日期，鼓勵大家踴躍參加。',
        '為培植更多宣教與植堂的神國工人，本堂恩道潛能開發學校將陸續開設以下神學裝備課程，報名表請在招待處領取，相關訊息如下：',
    )
))->add();
(new Slides\Intercession( // 代禱
    $ppt,    
	array(
        '為宣教與植堂的佈道所地點(Algester、West End)、服事同工的委身與培訓代禱。',
        '感謝主，Alinsa郭於上週得一子，母子平安。',
        '為陳振傳長老、雷伯伯(雷李小文姊妹的丈夫)身體早日康復代禱。',
	)
))->add();
(new Slides\Dedication( // 上週奉獻
	$ppt,
	'主日敬拜550.35；主日學15.85；週二禱告會82.50；週四禱告會288.25；週六聯合團契34.50；週五西區團契104.40；雙語堂主日敬拜784.65；雙語堂主日學6.75；西區教會主日敬拜289.45;南區佈道所主日敬拜79.05(含主日學);',
	array(
		'什 一' => 'R&J Yen F/T 100; The Chen F/T 50; 黃隆聲夫婦 120; Fiona & Steve 200; P.J 650; 康世興全家 100; 黃耀群夫婦 100; 浣熊L. L. 100; K & Y 300; JPH 250; 何利珍全家 10; Nicholas Yim 170; 桂星 105; C.V.J. 190; 李磊全家 100; 謝坤儒&杜斯斯 190; 趙芯斕 330; 周文和全家 203; 邵薇 300; 謝帛翰H.H 150; 宋安琪 100; 蔡曉緯夫婦 80;',
		'感 恩' => '鄭次郎夫婦 20; R&J Yen F/T 300; Tseng 300; 楊淑容 50; 羅仁煥 100; 孫毅 50;',
		'建 堂' => 'Tseng 100; 蔡尚恩 5; Lee H.W 20;',
		'宣 教' => '陳邱美娣 100; 翁浩夫婦 400; Tseng 100;;',
		'購地認獻' => '胡羽光 20; The Chen F/T 50; 蔡重良全家 130; 陳小喬 100; 張紅蕾 100; 桂星 20; 袁玲玲 50; C.V.J. 10; 李磊全家 100; Brock全家 20; 謝坤儒&杜斯斯 40; 周文和全家 50; E & E 50; 謝帛翰H.H 100; 楊青怡 20; 丁偉&張小琼 40; 扈立清 200;',
	)
))->add();

(new Slides\WeeklyVerse($ppt, '你求告我，我就應允你，並將你所不知道，又大又難的事指示你。', '耶利米書33:3'))->add(); // 金句
(new Slides\Hymn($ppt, 300))->add(); // 唱詩
(new Slides\LordsPrayer($ppt))->add(); // 主禱文
(new Slides\Ending($ppt))->add(); // 結束

require __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'OHPGen' . DIRECTORY_SEPARATOR . 'footer.php';