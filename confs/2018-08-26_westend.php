<?php
define('USE_LOGO', true);
require __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'OHPGen' . DIRECTORY_SEPARATOR . 'header.php';
use \Core\Slides;

////// 早禱
//(new Slides\Worship($ppt, '06_靠著耶穌得勝.ini'))->add();
////
////// pw
//(new Slides\Worship($ppt, '06_一切歌頌讚美.ini'))->add();
//(new Slides\Worship($ppt, '05_奔跑不放棄.ini'))->add();
//(new Slides\Worship($ppt, '04_賜福於你.ini'))->add();

// 主日
(new Slides\Opening($ppt))->add(); // 關手機
(new Slides\Hymn($ppt, 211))->add(); // 唱詩
(new Slides\Verse($ppt, '得', 2, 2, 10))->add(); // 讀經
(new Slides\ApostlesCreed($ppt))->add(); // 認信
(new Slides\GroupWorship($ppt, '弟兄詩班'))->add(); // 獻詩
(new Slides\Preach( // 講道
    $ppt,
    '改善文化的宣教',
    '翁浩傳道',
	array(
        new Slides\Verse($ppt, '得', 2, 2, 10), // 讀經
    ), // 序言
    array(
        '古時摩西拾穗文化' => array(
            new Slides\Verse($ppt, '利', 19, 9, 10),
            new Slides\Verse($ppt, '申', 24, 19),
        ),
        '現今世代冷漠文化' => array(
            new Slides\Verse($ppt, '提後', 3, 1, 2),
            new Slides\Verse($ppt, '路', 10, 25, 37),
        ),
        '耶穌基督愛的文化' => array(
            new Slides\Verse($ppt, '太', 25, 35, 40),
            new Slides\Verse($ppt, '可', 12, 28, 35),
        ),
    ),
    array(
        new Slides\Verse($ppt, '得', 2, 2, 10),
    )
))->add();
(new Slides\Tithing($ppt))->add(); // 奉獻
(new Slides\Visitor($ppt))->add(); // 新朋友
(new Slides\Report(
    $ppt,
	array(
        '我們誠心歡迎初次參加本教會敬拜的朋友。請留下姓名、地址、讓我們關心您，並邀請您參加各團契讀經小組、禱告會。',
        '下主日將有聖洗禮，目前已報名:陳淑娟、張婷、秦勉、張琳、張瀚兮、余靜、劉宇碩、鄭啟樂、夏艷、孫子超、Mark Liddell、Victoria Isabella，願意受洗歸入主名下者，請向陳牧師報名。每週主日（除了每個月第2個主日以外）早上9：00在副堂教室，陳牧師將為已受洗的初信者、即將受洗或希望對福音有更多認識新朋友開談道班，歡迎大家參加。',
        '下主日請弟兄姊妹回母堂參加聖餐主日，並預備心領受主的聖餐，以紀念主耶穌的救贖宏恩。地點:1156 Mt. Gravatt Capalaba Rd, Mackenzie QLD 4156。',
        '下一季10~12月服事表在編排中，請各牧區(包括西區、南區、中區)、團契務必將下一季服事表於本週二(8月28日)上傳到Google Sheets，請參閱「輔導副輔導Line群組」的連結，相關訊息請洽詢康傳道。',
        '請各位同工注意，每週六下午2點在教會召開牧區擴張的禱告造就會，請長執、牧區長、正副輔導務必參加，若不克出席，請向陳牧師請假。',
        '週六聯合團契將轉型為牧區聯合慶典聚會(是專為吸引新朋友參加的聚會，每週六全體牧區團契都參與服事)，聚會時間將改為週六下午4:00~6:00，並提供晚餐，請各牧區團契開始策畫進行，並請大家邀請新朋友參加，將於本週六開始試辦，十月起正式實施，相關訊息如下:',
        '每週二早上9：00~10:30和每週四晚上7：00~9:00在母堂有禱告會及門徒造就課程，請踴躍參加，為國家蒙恩、教會復興、宣教植堂、牧區團契、家庭工作及自己身心靈禱告與接受裝備。',
        '本堂恩道潛能開發學校將於本主日 (8月26日) 下午1:45~3:35開設:宣教學與福音策略(一)，地點:母堂，鼓勵弟兄姊妹踴躍報名上課。',
        '母堂9~10月主日午餐廚房事工，由腓利牧區負責服事。',
	)
))->add();
(new Slides\Intercession( // 代禱
    $ppt,    
	array(
        '為宣教與植堂事工、牧區的擴張與服事同工的委身與培訓代禱。',
        '顧奶奶已於日前安息主懷，並於上週四舉行追思禮拜，求主安慰家屬，一切有主的平安代禱。',
	)
))->add();
(new Slides\Dedication( // 上週奉獻
	$ppt,
	'主日敬拜38.15；',
	array(
		'什 一' => 'CYC F/T 20；李磊全家100 ；P.J. 750 ；Ken & Stacey 190；',
		'感恩' => '徐志军 20；P.J. 300；',
		'購地' => '李磊全家100；Ken & Stacey 40；',
	)
))->add();

(new Slides\WeeklyVerse($ppt, '我們務要認識耶和華，竭力追求認識祂…。', '何 6:3'))->add(); // 金句
(new Slides\Hymn($ppt, 402))->add(); // 唱詩
(new Slides\LordsPrayer($ppt))->add(); // 主禱文
(new Slides\Ending($ppt))->add(); // 結束

require __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'OHPGen' . DIRECTORY_SEPARATOR . 'footer.php';