<?php
require __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'OHPGen' . DIRECTORY_SEPARATOR . 'header.php';
use \Core\Slides;

//// 早禱
(new Slides\Worship($ppt, '03_祢的愛.ini'))->add();
//
//// pw
(new Slides\Worship($ppt, '05_你是全能神.ini'))->add();
(new Slides\Worship($ppt, '05_尊貴全能神.ini'))->add();
(new Slides\Worship($ppt, '06_何等榮美的名.ini'))->add();
(new Slides\Worship($ppt, '03_能不能.ini'))->add();
// 主日
(new Slides\Opening($ppt))->add(); // 關手機
(new Slides\Hymn($ppt, 301))->add(); // 唱詩
(new Slides\Verse($ppt, '林前', 4, 1, 5))->add(); // 讀經
(new Slides\Hymn($ppt,404))->add(); // 唱詩
(new Slides\ApostlesCreed($ppt))->add(); // 認信
(new Slides\GroupWorship($ppt, '提摩太牧區'))->add(); // 獻詩
(new Slides\Preach( // 講道
    $ppt,
    '忠心的管家',
    '黃隆聲長老',
	array(
//	    new Slides\Verse($ppt, '徒', 10, 1, 33), // 讀經
    ), // 序言
    array(
//        '異象先要有看見---虔誠禱告神的人---被聖靈啟示' => array(
//            new Slides\Verse($ppt, '徒', 10, 1, 8),
//            new Slides\Verse($ppt, '徒', 10, 30, 33),
//        ),
//        '看見不都是異象---自我為中心的人---憑私慾感動' => array(
//            new Slides\Verse($ppt, '徒', 10, 10, 17),
//            new Slides\Verse($ppt, '王上', 12, 26, 33),
//            new Slides\Verse($ppt, '約一', 4, 1, 6),
//        ),
//        '異象定要能檢驗---有環境印證的人---有聖靈帶領' => array(
//            new Slides\Verse($ppt, '徒', 10, 20, 24),
//            new Slides\Verse($ppt, '書', 6, 20, 27),
//            new Slides\Verse($ppt, '王上', 16, 30, 34),
//        ),
    ),
	array(
//        new Slides\Verse($ppt, '徒', 10, 20, 22),
    ) // 結論
))->add();
(new Slides\Tithing($ppt))->add(); // 奉獻
(new Slides\Visitor($ppt))->add(); // 新朋友
(new Slides\Report(
    $ppt,
	array(
        '我們誠心歡迎初次參加本教會敬拜的朋友。請留下姓名、地址、讓我們關心您，並邀請您參加各團契讀經小組、禱告會。',
        '上主日受洗的新肢體有：Victoria Isabella Crawford、周代偉、謝嘉璐、李晰玥、金智善，為他們身心靈成長、蒙恩堅定跟隨主代禱。',
        '11月4日將有聖洗禮，目前已報名者:許屹楠，願意受洗歸入主名下者，請向陳牧師報名。每週主日（除了每個月第2個主日以外）早上9：00在副堂教室，陳牧師將為已受洗的初信者、即將受洗或希望對福音有更多認識新朋友開談道班，歡迎大家參加。',
        '本堂長執會已投票通過教會章程修改案，按原章程第十章第三條有關「教會葬」，對「經費」與「安葬方式」的實施要點有所增列補實，詳細內容請參閱公佈欄，自即日起公告一個月，經董事會通過實施之。',
        '請各位同工注意，每週六下午2點在教會召開牧區擴張的禱告造就會，請長執、牧區長、正副輔導務必參加，若不克出席，請向陳牧師請假。',
        '週六聯合團契已轉型為牧區聯合慶典聚會(是專為吸引新朋友參加的聚會，每週六全體牧區、團契都要參與服事)，並提供晚餐，請大家每週都要邀請新朋友參加，已於10月6日正式開始，並於本週六(10月20日)繼續實施，每週六下午4點到6點(5:30~6:00敬拜讚美、牧長祝福禱告)，全體牧區及團契都要參與，各牧區團契的活動場地已大致固定，若活動項目有變更，請張貼在輔導副輔導的Line群組，並請告知康傳道，以每週更新在週報上，本週六(10月20日)活動如下:',
        '每週二早上9：00~10:30和每週四晚上7：00~9:00在母堂有禱告會及門徒造就課程，請踴躍參加，為國家蒙恩、教會復興、宣教植堂、牧區團契、家庭工作及自己身心靈禱告與接受裝備。',
        '為宣教的福音小冊子已放在教會辦公室，請牧區長及輔導按各堂會領取，並記得填寫領取的數量、日期及簽名，相關訊息請洽詢翁傳道。',
        '教會聯合大詩班每週四禱告會前的晚上6:00~7:00練習聖誕節詩歌，請每個團契至少指派3名弟兄姊妹參與，也請所有長執同工能排除萬難來參加。另外，從十一月份起的每個主日約下午1點左右開始練習聖誕節詩歌，負責同工:顧錦瑞傳道、陳玲慧長老。',
    )
))->add();
(new Slides\Intercession( // 代禱
    $ppt,    
	array(
        '為宣教與牧區慶典事工、新朋友加入、聖徒更新服事與培訓代禱。',
        '為雷媽媽、蔡媽媽的身體早日康復代禱。',
 	)
))->add();
(new Slides\Dedication( // 上週奉獻
	$ppt,
	'主日敬拜1659.50；主日學54.30；週二禱告會79.00；週四禱告會304.10；週六牧區聯合451.50；週五西區團契138.50；',
	array(
		'什 一' => '陳小冬全家 1500; 鄭次郎夫婦 50; The Chen F/T 100; 黃隆聲夫婦 120; Fiona & Steve 200; 梁振堯夫婦 850; Emmanuel 600; I-en& Melissa 100; 蔡曉緯夫婦 150; JPH 250; 林歡 50; 陳小喬 50; Nicholas Yim 75; Ian &Yona 300; 嚴健明Ken Yim 100; C.V.J. 200; 方明川夫婦 100; 李磊全家 250; L.W. 15; 謝坤儒&杜斯斯 180; Victoria 200; JCVS 470;白孟玄全家 400; Antony & Rachel 200; Ryan & Wendy 50; 宋安琪 100; JHVR 65;',
		'感 恩' => '梁振堯夫婦 50; 鄭甘訓 100; 吳貴茂全家 50; 余明花 10; 賀富廣&張丛嵐 1000; JCVS 30;Bright & Vivian 50; ',
		'建 堂' => '蔡尚恩 5; C.V.J. 10; Bright & Vivian 50; Victoria 10;',
		'宣 教' => '翁浩夫婦 400; Frank湯夫婦 50;',
		'購地認獻' => '胡羽光 20; The Chen F/T 100; 黃隆聲夫婦 800; 梁振堯夫婦 100; 李宗澤Matthew Li 10; 蔡重良全家 140; 李磊全家 250; 李翊鳴 10; Frank湯夫婦 100; 謝坤儒&杜斯斯 40; Sam & Kelly 100;',
	)
))->add();

(new Slides\WeeklyVerse($ppt, '神愛世人，甚至將他的獨生子賜給他們，叫一切信他的，不致滅亡，反得永生。', '約翰福音 3:16'))->add(); // 金句
(new Slides\Hymn($ppt, 409))->add(); // 唱詩
(new Slides\LordsPrayer($ppt))->add(); // 主禱文
(new Slides\Ending($ppt))->add(); // 結束

require __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'OHPGen' . DIRECTORY_SEPARATOR . 'footer.php';