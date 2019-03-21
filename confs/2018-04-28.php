<?php
require __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'OHPGen' . DIRECTORY_SEPARATOR . 'header.php';
use \Core\Slides;

//// 早禱
//(new Slides\Worship($ppt, '04_何等恩典.ini'))->add();
//
//// pw
(new Slides\Worship($ppt, '07_耶和華我的磐石.ini'))->add();
//(new Slides\Worship($ppt, '05_行神蹟的神.ini'))->add();
//(new Slides\Worship($ppt, '05_住在你裡面.ini'))->add();
//(new Slides\Worship($ppt, '04_永遠尊貴.ini'))->add();
// 主日
(new Slides\Opening($ppt))->add(); // 關手機
(new Slides\Hymn($ppt, 341))->add(); // 唱詩
(new Slides\Verse($ppt, '徒', 3, 1, 10))->add(); // 讀經
(new Slides\Hymn($ppt,189))->add(); // 唱詩
(new Slides\ApostlesCreed($ppt))->add(); // 認信
(new Slides\GroupWorship($ppt, '磯法/興光'))->add(); // 獻詩
(new Slides\Preach( // 講道
    $ppt,
    '在美門口前宣教',
    '陳小冬牧師',
	array(
	    new Slides\Verse($ppt, '徒', 3, 1, 10), // 讀經
    ), // 序言
    array(
        '使徒去到美門口之前' => array(
            new Slides\Verse($ppt, '徒', 1, 12, 14), // 讀經
            new Slides\Verse($ppt, '徒', 2, 1, 8), // 讀經
            new Slides\Verse($ppt, '徒', 3, 1, 8), // 讀經
        ),
        '使徒到達美門口之時' => array(
            new Slides\Verse($ppt, '徒', 3, 2, 7), // 讀經
            new Slides\Verse($ppt, '徒', 3, 6, 10), // 讀經
            new Slides\Verse($ppt, '徒', 3, 12, 18), // 讀經
        ),
        '使徒離開美門口之後' => array(
            new Slides\Verse($ppt, '徒', 4, 1, 14), // 讀經
            new Slides\Verse($ppt, '徒', 4, 16, 20), // 讀經
            new Slides\Verse($ppt, '徒', 4, 29, 31), // 讀經
            new Slides\Verse($ppt, '徒', 5, 27, 32), // 讀經
            new Slides\Verse($ppt, '太', 28, 18, 20), // 讀經
        ),
    )
))->add();
(new Slides\Tithing($ppt))->add(); // 奉獻
(new Slides\Visitor($ppt))->add(); // 新朋友
(new Slides\Report(
    $ppt,
	array(
        '我們誠心歡迎初次參加本教會敬拜的朋友。請留下姓名、地址、讓我們關心您，並邀請您參加各團契讀經小組、禱告會。',
        '下主日將有聖洗禮，目前已報名者:黃允芮、鮑予恩，願意受洗歸入主名下者，請向陳牧師報名。每週主日（除了每個月第2個主日以外）早上9：00在副堂教室，陳牧師將為已受洗的初信者、即將受洗或希望對福音有更多認識的新朋友開談道班，歡迎大家參加。',
        '下主日為聖餐主日，請弟兄姊妹預備心領受主的聖餐，並紀念主耶穌的救贖宏恩。',
        '今年母親節的慶祝活動將提前於下主日舉行，下主日的愛筵將由各團契分工，預備22個攤位提供不同的餐點款待母親們，下主日弟兄姊妹不必帶一道菜，請儘量邀請新朋友及母親們參加。',
        '本主日將召開四月份的同工會，請傳道、長老、執事、牧區長、團契輔導、會長與各讀經小組的組長於本主日下午1:00儘快到主堂開會。',
        '每週二早上9:00~10:30 在教會有禱告會，和週四晚上7:00~9:00在教會有禱告會及門徒造就課程，請弟兄姊妹踴躍參加，為自己、家庭、工作、團契擴張、教會、宣教、植堂、國家蒙恩禱告及接受裝備。',
        '教會5~6月份福音隊的服事表已公佈在佈告欄，每週六早上10:30在Sunnypark集合，請各團契輔導注意服事日期，鼓勵大家踴躍參加。',
        '曾奕智弟兄(Anthony)與宋瑞琪姊妹(Rachel)將於本週六 (5月5日)早上10:00在本堂舉行婚禮，由顏瑞峰傳道負責統籌，願神賜福他們及雙方家族，也歡迎弟兄姊妹參加觀禮及祝福他們。',
        '請弟兄姊妹特別注意，每主日請每家帶一道菜與大家分享，中午愛筵後請務必將所帶來的盛菜器皿(鍋碗瓢盆等)自行帶回，請勿留在副堂;另外，請各團契寄放在副堂的碗、筷、湯匙，請務必清洗保持副堂的乾淨，請輔導們確實督導執行，並請大家相互轉達與配合。',
        '母堂5~6月主日午餐廚房事工，由提多牧區、磯法團契、興光團契共同來服事。',
        '為培植更多宣教與植堂的神國工人，本堂恩道潛能開發學校將於6月份起開設以下神學裝備課程，報名表請在招待處領取，相關訊息如下：',
	)
))->add();
(new Slides\Intercession( // 代禱
    $ppt,    
	array(
        '為教會擴建工程所需的日期經費與後續施工的順利平安代禱。',
        '為宣教與植堂所需的會堂地點、服事同工的委身與培訓代禱。',
	)
))->add();
(new Slides\Dedication( // 上週奉獻
	$ppt,
	'主日敬拜211.30；主日學24.35；週二禱告會 91.20；週四禱告會 290.20；週六聯合團契32.00；週五西區團契148.50；',
	array(
		'什 一' => '胡羽恆 100;康世興全家 100;李磊全家 160; 宋安琪 100; 劉琦全家 50; 方咏賢170;王靖 378;',
		'感 恩' => 'Bright & Vivian 50; Ryan & Wendy 50;',
		'建 堂' => 'Fiona & Steve 200;Lee H.W 20; Bright & Vivian 50; 主知名50;',
		'宣 教' => '黃耀群夫婦 100;',
		'購地認獻' => '李磊全家 160; 方咏賢 20; 凃秀鴻夫婦100;',
	)
))->add();

(new Slides\WeeklyVerse($ppt, '與他們同在的是肉臂，與我們同在的是耶和華我們的　神，祂必幫助我們，為我們爭戰。', '歷代志下 32:8'))->add(); // 金句
(new Slides\Hymn($ppt, 216))->add(); // 唱詩
(new Slides\LordsPrayer($ppt))->add(); // 主禱文
(new Slides\Ending($ppt))->add(); // 結束

require __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'OHPGen' . DIRECTORY_SEPARATOR . 'footer.php';