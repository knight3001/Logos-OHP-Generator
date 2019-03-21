<?php
require __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'OHPGen' . DIRECTORY_SEPARATOR . 'header.php';
use \Core\Slides;

//// 早禱
(new Slides\Worship($ppt, '03_祢的愛.ini'))->add();
//
//// pw
(new Slides\Worship($ppt, '06_揚聲歡呼讚美.ini'))->add();
(new Slides\Worship($ppt, '06_耶穌對我真好.ini'))->add();
(new Slides\Worship($ppt, '03_我們愛.ini'))->add();
// 主日
(new Slides\Opening($ppt))->add(); // 關手機
(new Slides\Hymn($ppt, 186))->add(); // 唱詩
(new Slides\Verse($ppt, '徒', 10, 1, 33))->add(); // 讀經
(new Slides\Hymn($ppt,175))->add(); // 唱詩
(new Slides\ApostlesCreed($ppt))->add(); // 認信
(new Slides\GroupWorship($ppt, '提摩太牧區'))->add(); // 獻詩
(new Slides\Preach( // 講道
    $ppt,
    '異象與檢驗',
    '陳小冬牧師',
	array(
	    new Slides\Verse($ppt, '徒', 10, 1, 33), // 讀經
    ), // 序言
    array(
        '異象先要有看見---虔誠禱告神的人---被聖靈啟示' => array(
            new Slides\Verse($ppt, '徒', 10, 1, 8),
            new Slides\Verse($ppt, '徒', 10, 30, 33),
        ),
        '看見不都是異象---自我為中心的人---憑私慾感動' => array(
            new Slides\Verse($ppt, '徒', 10, 10, 17),
            new Slides\Verse($ppt, '王上', 12, 26, 33),
            new Slides\Verse($ppt, '約一', 4, 1, 6),
        ),
        '異象定要能檢驗---有環境印證的人---有聖靈帶領' => array(
            new Slides\Verse($ppt, '徒', 10, 20, 24),
            new Slides\Verse($ppt, '書', 6, 20, 27),
            new Slides\Verse($ppt, '王上', 16, 30, 34),
        ),
    ),
	array(
        new Slides\Verse($ppt, '徒', 10, 20, 22),
    ) // 結論
))->add();
(new Slides\Tithing($ppt))->add(); // 奉獻
(new Slides\Visitor($ppt))->add(); // 新朋友
(new Slides\Report(
    $ppt,
	array(
        '我們誠心歡迎初次參加本教會敬拜的朋友。請留下姓名、地址、讓我們關心您，並邀請您參加各團契讀經小組、禱告會。',
        '上主日受洗的新肢體有：梁深信、梁育銘，為他們身心靈成長、蒙恩堅定跟隨主代禱。',
        '下主日將有聖洗禮，目前已報名的受洗:鄒彥超、謝嘉璐、許屹楠、李晰玥、周代偉、Victoria Isabella Crawford，願意受洗歸入主名下者，請向陳牧師報名。每週主日（除了每個月第2個主日以外）早上9：00在副堂教室，陳牧師將為已受洗的初信者、即將受洗或希望對福音有更多認識新朋友開談道班，歡迎大家參加。',
        '下主日為聖餐主日，請弟兄姊妹預備心領受主的聖餐，並紀念主耶穌的救贖宏恩。',
        '下主日將有教會大掃除，各牧區團契負責打掃的區域分配圖，請參閱佈告欄，請大家帶便服、清潔工具等，一起來打掃，關心神家裡的事。',
        '本堂長執會已投票通過教會章程修改案，按原章程第十章第三條有關「教會葬」，對「經費」與「安葬方式」的實施要點有所增列補實，詳細內容請參閱公佈欄，自即日起公告一個月，經董事會通過實施之。',
        '請各位同工注意，每週六下午2點在教會召開牧區擴張的禱告造就會，請長執、牧區長、正副輔導務必參加，若不克出席，請向陳牧師請假。',
        '週六聯合團契將轉型為牧區聯合慶典聚會(是專為吸引新朋友參加的聚會，每週六全體牧區、團契都參與服事)，並提供晚餐，請大家每週都要邀請新朋友參加，已於9月22日、9月29日連續試辦兩週，並於本週六(10月6日)起每週六下午4點到6點(5:30~6:00敬拜讚美、牧長祝福禱告)全面正式實施，全體牧區及團契都要參與，各牧區團契活動場地分配請參閱公佈欄，並請告知欲參加的新朋友能事先登記，以方便準備所需活動材料，相關訊息如下:',
        '每週二早上9：00~10:30和每週四晚上7：00~9:00在母堂有禱告會及門徒造就課程，請踴躍參加，為國家蒙恩、教會復興、宣教植堂、牧區團契、家庭工作及自己身心靈禱告與接受裝備。',
        '為宣教的福音小冊子已放在教會辦公室，請牧區長及輔導按各堂會領取，並記得填寫領取的數量、日期及簽名，相關訊息請洽詢翁傳道。',
    )
))->add();
(new Slides\Intercession( // 代禱
    $ppt,    
	array(
	    '為宣教與植堂事工、牧區的擴張與服事同工的委身與培訓代禱。'
	)
))->add();
(new Slides\Dedication( // 上週奉獻
	$ppt,
	'主日敬拜345.70；主日學27.65；週二禱告會45.75；週四禱告會355.75；週六牧區聯合 459.20；雙語堂主日敬拜1011.05；雙語堂主日學11.55；週五西區團契104.90；西區教會主日敬拜123.25；南區佈道所主日敬拜74.20；中區佈道所主日敬拜18.95；',
	array(
		'什 一' => '鄭次郎夫婦 50; 顧章志潔 100; The Chen F/T 50; C.Y.C F/T 20; 黃隆聲夫婦 200; Jan & Nan 100; Fiona & Steve 200; P.J 750; 康世興全家 100; 蔡曉緯夫婦 50; 黃耀群夫婦 100; 浣熊L. L. 100; JPH 250; JMFL 500; 扈立清 200; 陳小喬 50; 劉琦全家 50; Nicholas Yim 75; 嚴健明Ken Yim 100; JHRL 200; 張力Lee Zhang 120; C.V.J. 200; 尤聖皓夫婦 1000; 方明川夫婦 90; 李磊全家 260; YANG 70; 謝坤儒&杜斯斯 180; Victoria 200; 趙芯斕 390; Ryan & Wendy 100; 邵薇 300; 謝帛翰H.H 200; 宋安琪 100; JHVR 75;K & Y 1949;',
		'感 恩' => '陳志展&陳謝琛 200; 陳文韻 1000; Stella Chen 200; 嚴健明Ken Yim 100; 李幼竹 50; Bright & Vivian 50; 周文和全家 50; Rick & Cheryl 500;',
		'建 堂' => '吳貴茂全家 50; 蔡尚恩 5; Lee H.W 15; 蔡重良全家 150;',
		'宣 教' => '翁浩夫婦 700;',
		'購地認獻' => '胡羽光 20; The Chen F/T 50; 胡保雄夫婦 300; 陳小喬 50; 張紅蕾 50; 張月美 25; 袁玲玲 50; C.V.J. 10; 李磊全家 260; Brock全家 20; 謝坤儒&杜斯斯 40; Victoria 10; E & E 50; 凃秀鴻夫婦 100; Sam & Kelly 100; 謝帛翰H.H 100;',
	)
))->add();

(new Slides\WeeklyVerse($ppt, '所以我告訴你們，凡你們禱告祈求的，無論是甚麼，只要信是得着的，就必得着。', '馬可福音11:24'))->add(); // 金句
(new Slides\Hymn($ppt, 191))->add(); // 唱詩
(new Slides\LordsPrayer($ppt))->add(); // 主禱文
(new Slides\Ending($ppt))->add(); // 結束

require __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'OHPGen' . DIRECTORY_SEPARATOR . 'footer.php';