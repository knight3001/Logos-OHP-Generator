<?php
require __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'OHPGen' . DIRECTORY_SEPARATOR . 'header.php';
use \Core\Slides;

//// 早禱
//(new Slides\Worship($ppt, '04_何等恩典.ini'))->add();
//
//// pw
(new Slides\Worship($ppt, '04_我有喜樂.ini'))->add();
(new Slides\Worship($ppt, '05_行神蹟的神.ini'))->add();
(new Slides\Worship($ppt, '05_真實的敬拜.ini'))->add();
(new Slides\Worship($ppt, '08_我們歡迎君王降臨.ini'))->add();
// 主日
(new Slides\Opening($ppt))->add(); // 關手機
(new Slides\Hymn($ppt, 133))->add(); // 唱詩
(new Slides\Verse($ppt, '徒', 6, 1, 15))->add(); // 讀經
(new Slides\Hymn($ppt,247))->add(); // 唱詩
(new Slides\ApostlesCreed($ppt))->add(); // 認信
(new Slides\GroupWorship($ppt, '腓力牧區'))->add(); // 獻詩
(new Slides\Preach( // 講道
    $ppt,
    '四台階',
    '陳小冬牧師',
	array(
	    new Slides\Verse($ppt, '徒', 6, 1, 15), // 讀經
    ), // 序言
    array(
        '初信時的門徒–得救–成為耶穌的門徒' => array(
            new Slides\Verse($ppt, '徒', 6, 1), // 讀經
            new Slides\Verse($ppt, '徒', 6, 7), // 讀經
            new Slides\Verse($ppt, '民', 14, 27, 30), // 讀經
            new Slides\Verse($ppt, '林前', 10, 1, 12), // 讀經
        ),
        '學習時的門徒–重生–成為聖靈的學徒' => array(
            new Slides\Verse($ppt, '徒', 6, 2, 6), // 讀經
            new Slides\Verse($ppt, '約', 3, 3, 8), // 讀經
            new Slides\Verse($ppt, '約', 14, 23, 26), // 讀經
        ),
        '事奉時的門徒–成聖–成為教會的使徒' => array(
            new Slides\Verse($ppt, '徒', 6, 8, 14), // 讀經
            new Slides\Verse($ppt, '利', 8, 5, 12), // 讀經
        ),
        '得勝時的門徒–得賞–成為天上的使者' => array(
            new Slides\Verse($ppt, '徒', 6, 15), // 讀經
            new Slides\Verse($ppt, '徒', 7, 55, 60), // 讀經
            new Slides\Verse($ppt, '啟', 2, 7, 29), // 讀經
        ),
    ),
	array(
        new Slides\Verse($ppt, '啟', 21, 1, 8), // 讀經
    ) // 結論
))->add();
(new Slides\Tithing($ppt))->add(); // 奉獻
(new Slides\Visitor($ppt))->add(); // 新朋友
(new Slides\Report(
    $ppt,
	array(
        '我們誠心歡迎初次參加本教會敬拜的朋友。請留下姓名、地址、讓我們關心您，並邀請您參加各團契讀經小組、禱告會。',
        '9月2日將有聖洗禮，目前已報名者:陳淑娟、張婷、秦勉、Mark Liddell，張琳、張瀚兮、余靜、劉宇碩、鄭君樂，願意受洗歸入主名下者，請向陳牧師報名。每週主日（除了每個月第2個主日以外）早上9：00在副堂教室，陳牧師將為已受洗的初信者、即將受洗或希望對福音有更多認識新朋友開談道班，歡迎大家參加。',
        '本週六(8月25日)下午3：00為教會八月份禁食禱告會，將由提多牧區契負責敬拜讚美，請大家踴躍參加。',
        '請長執、牧區長、正副輔導於本週六(8月25日)下午4:00副堂開會，內容是「策劃下一季10~12月的服事表與籌備聖誕節事工」，請長執、牧區長、團契正副輔導務必參加，如不克出席，請事先向陳師母請假。',
        '請各位同工注意，每週六下午2點在教會召開牧區擴張的禱告造就會，請長執、牧區長、正副輔導務必參加，若不克出席，請向陳牧師請假。',
        '週六聯合團契將轉型為牧區聯合慶典聚會，聚會時間將改為週六下午4:00~6:00，並提供晚餐，請各牧區團契開始策畫進行，並請弟兄姊妹邀請新朋友參加，將於九月起試辦，十月起正式實施，相關訊息如下:',
        '「全球40天禁食禱告」（2018 Global 40 Day Fast And Pray），已於7月31日、8月1日起陸續啟動，請弟兄姊妹選擇在哪幾天禁食，參加者禁食的方式，當天至少禁食1餐，並於禁食的時段向神禱告，鼓勵弟兄姊妹踴躍參加。',
        '每週二早上9：00~10:30和每週四晚上7：00~9:00在母堂有禱告會及門徒造就課程，請踴躍參加，為國家蒙恩、教會復興、宣教植堂、牧區團契、家庭工作及自己身心靈禱告與接受裝備。',
        '本堂恩道潛能開發學校將於下主日 (8月26日) 下午1:45~3:35開設:宣教學與福音策略(一)，地點:母堂，鼓勵弟兄姊妹踴躍報名上課。',
    )
))->add();
(new Slides\Intercession( // 代禱
    $ppt,    
	array(
        '為宣教與植堂事工、牧區的擴張與服事同工的委身與培訓代禱。',
        '顧奶奶已於昨天安息主懷，求主安慰顧傳道及其家人，並為料理後事的一切事宜有主的平安代禱。',
        '澳洲遭逢百年一遇的大乾旱，受災地區包括整個新南威爾斯省和過半的昆士蘭省，請為此迫切禱告，求主憐憫這地，降下恩雨，滋潤大地。',
	)
))->add();
(new Slides\Dedication( // 上週奉獻
	$ppt,
	'主日敬拜1208.60；主日學37.70；週二禱告會87.90；週四禱告會328.20；週六聯合團契7.10；週五西區團契85.60；西區教會主日敬拜187.35；南區佈道所主日敬拜41.15；中區佈道所主日敬拜37.90；',
	array(
		'什 一' => '陳小冬全家 900; 鄭次郎夫婦 70; 胡羽恆 50; R&J Yen F/T 100; The Chen F/T 50; C.Y.C F/T 50; 黃隆聲夫婦 200; Fiona & Steve 200; P.J 800; 康世興全家 100; 蔡曉緯夫婦 50; 黃耀群夫婦 100; K & Y 2097.28; JHK 260; 陳小喬 50; Nicholas Yim 75; Ian &Yona 50; 桂星 105; 張力Lee Zhang 120; 孫毅 30; C.V.J. 100; 方明川夫婦 70; 李磊全家 225; L.W. 50; 李笑怡 Xiao 1000; YANG 100; 謝坤儒&杜斯斯 250; 趙芯斕 450; Antony & Rachel 300; 姚堯全家 200; 謝帛翰H.H 200; 楊青怡 20; 宋安琪 100; JHVR 50; 鄒懿 20;王靖 255;K & Y 1340;',
		'感 恩' => 'R&J Yen F/T 200; 吳貴茂全家 20; JHRL 189; 徐志軍 20; 羅仁煥 100; Bright & Vivian 50; Ryan & Wendy 50;',
		'建 堂' => '吳貴茂全家 50; L.W. 10; Bright & Vivian 50;',
		'宣 教' => '翁浩夫婦 750; Frank湯全家 50;',
		'購地認獻' => '胡羽光 20; The Chen F/T 50; 胡保雄夫婦 300; 蔡尚恩 5; 黃耀群夫婦 100; Debby Chen 300; 蔡重良全家 130; 陳小喬 50; Nicholas Yim 10; 桂星 20; Roma馬榕蔚 50; C.V.J. 10; 李磊全家 225; Frank湯全家 100; Brock全家 20; 凃秀鴻夫婦 100; Sam & Kelly 100; 謝帛翰H.H 100; 丁偉&張小琼 50;',
	)
))->add();

(new Slides\WeeklyVerse($ppt, '神的名是應當稱頌的，從亙古直到永遠！因為智慧能力都屬乎祂。', '但 2:20'))->add(); // 金句
(new Slides\Hymn($ppt, 107))->add(); // 唱詩
(new Slides\LordsPrayer($ppt))->add(); // 主禱文
(new Slides\Ending($ppt))->add(); // 結束

require __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'OHPGen' . DIRECTORY_SEPARATOR . 'footer.php';