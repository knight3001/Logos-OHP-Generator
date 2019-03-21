<?php
define('USE_LOGO', true);
require __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'OHPGen' . DIRECTORY_SEPARATOR . 'header.php';
use \Core\Slides;

//// 早禱
(new Slides\Worship($ppt, '06_靠著耶穌得勝.ini'))->add();
//
//// pw
(new Slides\Worship($ppt, '06_一切歌頌讚美.ini'))->add();
(new Slides\Worship($ppt, '05_奔跑不放棄.ini'))->add();
(new Slides\Worship($ppt, '04_賜福於你.ini'))->add();
// 主日
(new Slides\Opening($ppt))->add(); // 關手機
(new Slides\Hymn($ppt, 438))->add(); // 唱詩
(new Slides\Verse($ppt, '徒', 17, 16, 34))->add(); // 讀經
(new Slides\ApostlesCreed($ppt))->add(); // 認信
(new Slides\GroupWorship($ppt, '弟兄詩班'))->add(); // 獻詩
(new Slides\Preach( // 講道
    $ppt,
    '保羅著急的原因',
    '鄭博耀傳道',
	array(
//	    new Slides\Verse($ppt, '徒', 28, 23, 31), // 讀經
//        new Slides\Verse($ppt, '太', 28, 18, 20), // 讀經
    ), // 序言
    array(
        '保羅著急因–廟會文化轄制人' => array(
            (new Slides\Verse($ppt, '王上', 18, 28)),
            (new Slides\Verse($ppt, '可', 5, 5)),
            (new Slides\Verse($ppt, '利', 18, 21)),
            (new Slides\Verse($ppt, '利', 20, 1, 6)),

            (new Slides\Verse($ppt, '弗', 2, 2)),
            (new Slides\Verse($ppt, '林前', 10, 20)),
            (new Slides\Verse($ppt, '申', 18, 9, 14)),
        ),
        '保羅著急因–錯誤神觀戕害人' => array(
//            (new Slides\Verse($ppt, '徒', 28, 23, 24)),
//            (new Slides\Verse($ppt, '徒', 28, 28, 31)),
        ),
        '保羅著急因–神按公義審判人' => array(
            (new Slides\Verse($ppt, '啟', 20, 11, 15)),
            (new Slides\Verse($ppt, '啟', 21, 8)),
            (new Slides\Verse($ppt, '申', 13, 6, 10)),
            (new Slides\Verse($ppt, '林前', 6, 9)),




//            (new Slides\Verse($ppt, '徒', 16, 1, 10)),
        ),
    )
))->add();
(new Slides\Tithing($ppt))->add(); // 奉獻
(new Slides\Visitor($ppt))->add(); // 新朋友
(new Slides\Report(
    $ppt,
	array(
        '我們誠心歡迎初次參加本教會敬拜的朋友。請留下姓名、地址、讓我們關心您，並邀請您參加各團契讀經小組、禱告會。',
        '我們的聚會時間:每月的第1個主日早上10點恩道教會母堂主日敬拜地點:1156 Mt. Gravatt Capalaba Rd, Mackenzie QLD 4156每月第2、3、4主日早上10點本佈道所主日敬拜',
        '恩道中區佈道所同工聯絡電話:恩道教會主任牧師–陳牧師	3711 5724恩道教會邱牧師–陳師母	0402 915 023林欣燕執事(Cindy)	0412 359 768李磊弟兄(Wren)	0426 773 213',
        '8月5日將有聖洗禮，願意受洗歸入主名下者，請向林欣燕執事報名。',
        '第十一任長執選舉已於上主日同工投票產生，長老有5位：黃隆聲、于同芬、林欣燕、陳玲慧、黃煒霖；執事有16位：莊溢恩、毛天霖、鄭力夫、莊貴香、鄭朝鴻、趙芯斕、徐曉川、謝坤儒、曾奕智、宦之軒、蔡曉緯、李磊、王悅涵、黃千綺、李宏仁、林毅恩。將於8月5日主日舉行按立，請弟兄姊妹為他們身心靈和服事得力代禱。',
        '每週二早上9：00~10:30和每週四晚上7：00~9:00在母堂有禱告會及門徒造就課程，請踴躍參加，為國家蒙恩、教會復興、宣教植堂、牧區團契、家庭工作及自己身心靈禱告與接受裝備，一起來得著聖靈的能力以及經歷神的大能。',
        '各讀經小組已從本週起恢復，本佈道所讀經聚會，於本週五（7月20日）恢復讀經聚會，請弟兄姊妹互相轉達。',
        '請各位同工注意，自上週六(7月14日)起，每週六下午2點在教會將召開牧區擴張的禱告造就會，請現任長執(長執當選人也要出席)、牧區長、團契正副輔導務必參加，若無法出席，請向陳牧師請假。',
        '教會目前週六聯合團契將轉型為牧區聯合慶典聚會，弟兄姊妹如有任何寶貴意見，請向陳牧師建議或寫信寄到logos.member@gmail.com。',
        '為更新年度的團契通訊錄，請各團契輔導於七月底前將新年度的團契同工 (請務必註明同工職稱，如正副輔導、正副會長、各部門同工)以及弟兄姊妹、新人的中英文姓名、電子郵件及聯絡電話以電子檔的方式E-mail給康傳道(E-mail:kevinkanglogos@gmail.com)。',
        '本堂恩道潛能開發學校將於下主日 (7月22日) 下午1:45~3:35開設:聖經真理原則(三)課程，鼓勵弟兄姊妹踴躍報名上課。',
        '請弟兄姊妹注意，下主日 (7月22日)將回母堂主日敬拜，7月29日主日再回到本佈道所聚會，請弟兄姊妹互相轉達。',
	)
))->add();
(new Slides\Intercession( // 代禱
    $ppt,    
	array(
        '為宣教與植堂的佈道所地點(Algester、West End)、服事同工的委身與培訓代禱。',
	)
))->add();
(new Slides\Dedication( // 上週奉獻
	$ppt,
	'主日奉獻46.50;主日學 1.50;',
	array(
		'什 一' => '黃隆聲夫婦  200;李磊全家 85;CYC F/T  20;',
		'購地' => '李磊全家85;',
	)
))->add();

(new Slides\WeeklyVerse($ppt, '那等候耶和華的，必從新得力，他們必如鷹展翅上騰，他們奔跑去不困倦，行走卻不疲乏。', '賽 40:31'))->add(); // 金句
(new Slides\Hymn($ppt, 402))->add(); // 唱詩
(new Slides\LordsPrayer($ppt))->add(); // 主禱文
(new Slides\Ending($ppt))->add(); // 結束

require __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'OHPGen' . DIRECTORY_SEPARATOR . 'footer.php';