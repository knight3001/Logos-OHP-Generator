<?php
require __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'OHPGen' . DIRECTORY_SEPARATOR . 'header.php';
use \Core\Slides;

//// 早禱
(new Slides\Worship($ppt, '06_從早晨到夜晚.ini'))->add();
//
//// pw
(new Slides\Worship($ppt, '05_屬天的喜樂.ini'))->add();
(new Slides\Worship($ppt, '09_來宣揚主耶穌的聖名.ini'))->add();
(new Slides\Worship($ppt, '04_是因為祢.ini'))->add();
(new Slides\Worship($ppt, '03_我身旁.ini'))->add();
// 主日
(new Slides\Opening($ppt))->add(); // 關手機
(new Slides\Hymn($ppt, 161))->add(); // 唱詩
(new Slides\Verse($ppt, '徒', 11, 1, 30))->add(); // 讀經
(new Slides\Hymn($ppt,256))->add(); // 唱詩
(new Slides\ApostlesCreed($ppt))->add(); // 認信
(new Slides\GroupWorship($ppt, '提摩太牧區'))->add(); // 獻詩
(new Slides\Preach( // 講道
    $ppt,
    '三力',
    '陳小冬牧師',
	array(
	    new Slides\Verse($ppt, '徒', 11, 1, 30), // 讀經
    ), // 序言
    array(
        '上帝的能力' => array(
            new Slides\Verse($ppt, '徒', 11, 15, 18), // 讀經
            new Slides\Verse($ppt, '徒', 11, 19, 26), // 讀經
            new Slides\Verse($ppt, '徒', 11, 4, 12), // 讀經
        ),
        '自己的努力' => array(
            new Slides\Verse($ppt, '徒', 11, 11, 14), // 讀經
            new Slides\Verse($ppt, '徒', 11, 11, 14), // 讀經
            new Slides\Verse($ppt, '徒', 11, 19, 21), // 讀經
        ),
        '其他的助力' => array(
            new Slides\Verse($ppt, '徒', 11, 21, 30), // 讀經
            new Slides\Verse($ppt, '徒', 11, 1, 4), // 讀經
            new Slides\Verse($ppt, '徒', 11, 24, 26), // 讀經
        ),
    ),
	array(
        new Slides\Verse($ppt, '提後', 4, 1, 8), // 讀經
    ) // 結論
))->add();
(new Slides\Tithing($ppt))->add(); // 奉獻
(new Slides\Visitor($ppt))->add(); // 新朋友
(new Slides\Report(
    $ppt,
	array(
        '我們誠心歡迎初次參加本教會敬拜的朋友。請留下姓名、地址、讓我們關心您，並邀請您參加各團契讀經小組、禱告會。',
        '3月3日將有聖洗禮，目前已報名者: 劉為、趙紅、陳百溢(堅信禮)，願意受洗歸入主名下者，請向陳牧師報名。每週主日（除了每個月第2個主日以外）早上9：00在副堂教室，陳牧師將為已受洗的初信者、即將受洗或希望對福音有更多認識的新朋友開談道班，歡迎參加。',
        '教會禱告會在每週二早上9：00和週四晚上7：00開始，請弟兄姊妹踴躍參加，為自己、家庭、工作、團契擴張、教會、宣教、植堂、國家蒙恩迫切禱告(請大家注意，本週四2月21日的禱告會將會清點各牧區團契參加的人數，請牧區長及輔導務必鼓勵弟兄姊妹參加禱告)。',
        '教會聯合詩班已恢復練習，時間:每週四晚上6點開始，請各團契指派3位弟兄姊妹參加聯合詩班(需要簽到)。',
        '週六牧區聯合慶典聚會，本週六(2月23日)下午4點到6點的活動請參閱佈告欄(5:30~6:00敬拜讚美、牧長祝福禱告，6點開始愛筵)。',
        '會計部消息:目前各團契申請經費（包括週六慶典活動經費）的方式，需要重新調整申請流程(加上審批流程)為以下方式：(1)申請經費時，一律要由申請人填請款單，按需要每個禮拜提申請或每個月提申請，不要超過一個月。(2)慶典活動經費與團契經費分開申請,器材與消耗品分開申請。(3)牧區長、輔導需做第一次審查後 在請款單上簽字以示負責。(4)Item and cost and GST 要列清楚,可以先做成Excel表,印出附在請款單後面.Excel表可以方便upload到Xero accounting。(5)請款單再送給出納(cashier)交董事和審批權限人簽核。(6)Upload form 之後才發給經費。',
        '聖樂部消息:教會將於4月20日(週六)舉辦聖樂詩歌比賽，比賽曲目共兩首(自選)，請邀請新朋友加入練習，相關訊息請詢問顧錦瑞傳道。',
        '環保部消息:請各團契配合實施以下注意事項:(1)請以團契為單位，每個團契負責清洗兩張副堂的桌子，請抬到室外用清水沖洗，並擦乾後抬回原處，分別標示團契名稱於兩張桌上以示負責。(2)每週六慶典活動的晚餐結束後，請各牧區團契務必要確實清理用餐場地。(3)有些寄放在教會冰箱的個人食品，請儘快取走，過期食物請勿放在冰箱。(4)若牧區團契的餐盤碗筷等用品需要放在副堂內的置物櫃，請遵照以下規定A.務必要用有蓋子的置物箱封裝好。B.務必要標示團契名稱於置物箱外。以上4點對教會的整潔與維護很重要，請各牧區長及團契輔導要確實執行。',
        '第31屆亞細亞聖徒訪韓聖會將在7月15日到7月22日舉行，本屆主題是「當聖靈降臨在你們身上」，相關訊息請參閱佈告欄。',
        'UQ 將在本週三 (2月20日)舉行校園Open day，有負擔者請與翁浩傳道或張芸蓁姊妹聯絡。Griffith大學(GU)將在本週四 (2月21日)舉行校園Market Day，有負擔者請與顏瑞峰傳道或鄭淑玲姊妹聯絡。',
        '請各牧區長、團契輔導於本週六(2月23日) 下午2點在副堂開會，內容是「牧區長及輔導造就課程與策劃4~6月的服事表」，請傳道、長執、牧區長、團契正副輔導、正副會長務必準時參加，若無法出席，請向陳師母請假。原時段的牧區造就禱告會暫停一次，下週六(3月2日)下午2點再恢復舉行。',
        '下一季4~6月服事表在編排中，請各牧區(包括西區、南區、中區)、團契請將下一季服事表於下週二(2月26日)前上傳到Google Sheets，請參閱Line「輔導副輔導群組」的連結，相關訊息請洽詢康世興傳道。',
    )
))->add();
(new Slides\Intercession( // 代禱
    $ppt,    
	array(
        '為宣教與牧區慶典事工、新朋友加入、聖徒更新服事與培訓代禱。',
        '為教會在2020年達到週六慶典活動至少要有1000人參加聚會代禱。',
        '感謝主，阮明浩(Ryan)、王琦(Wendy)夫婦於上週得一女，母女平安。',
 	)
))->add();
(new Slides\Dedication( // 上週奉獻
	$ppt,
	'主日敬拜705.65；主日學31.40；週二禱告會72.10；週四禱告會237.95；週六牧區聯合234.40；雙語堂主日敬拜1049.20；雙語堂主日學17.10；西區週三聚會158.45；西區佈道所主日敬拜75.20；南區佈道所主日敬拜106.90；中區佈道所主日敬拜41.10；西區週三聚會 85.80；',
	array(
		'什 一' => '鄭次郎夫婦 60; The Chen F/T 50; 黃隆聲夫婦 120; Fiona & Steve 200; WBH 800; 康世興全家 200; 翁浩夫婦 300; 方明川夫婦 100; L.L 200; Lee H.W 70; JPH 250; 扈立清 200; W.Y 50; 顧錦花 50; Nicholas Yim 80; Ian &Yona 350; 嚴健明Ken Yim 100; Roma馬榕蔚60; C.V.J. 100;李磊全家 150; Brock全家 20;蔡曉緯夫婦 200;趙芯斕1136;白孟玄全家 270; Antony & Rachel 400;宋安琪 100;K & Y 955;',
		'感 恩' => 'R&J Yen F/T 300; 蔡哲雄夫婦 50; Tseng 200; Stella Chen 100; 羅仁煥夫婦 100; Bright & Vivian 50; 方培丞 300;',
		'建 堂' => '蔡重良全家 130;',
		'宣 教' => '翁浩夫婦 400;',
		'購地認獻' => '胡羽光 20; The Chen F/T 50; WBH 300; 胡保雄夫婦 300; 蔡尚恩 20; 黃耀群夫婦 100; 張紅蕾 50; C.V.J. 10; 丁瑞良夫婦 20; E & E 100; Sam & Kelly 100; 謝帛翰H.H 50; 丁偉&張小琼 50; 蔡尚雅 10;',
	)
))->add();

(new Slides\WeeklyVerse($ppt, '唯獨我的僕人迦勒，因他另有一個新志，專一跟從我，我就把他領進他所去過的那地；他的後裔也必得那地為業。', '民 14:24'))->add(); // 金句
(new Slides\Hymn($ppt, 445))->add(); // 唱詩
(new Slides\LordsPrayer($ppt))->add(); // 主禱文
(new Slides\Ending($ppt))->add(); // 結束

require __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'OHPGen' . DIRECTORY_SEPARATOR . 'footer.php';