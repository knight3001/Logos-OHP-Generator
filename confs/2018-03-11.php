<?php
require __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'OHPGen' . DIRECTORY_SEPARATOR . 'header.php';
use \Core\Slides;

//// 早禱
//(new Slides\Worship($ppt, '04_何等恩典.ini'))->add();
//
//// pw
(new Slides\Worship($ppt, '07_耶和華我的磐石.ini'))->add();
(new Slides\Worship($ppt, '05_行神蹟的神.ini'))->add();
(new Slides\Worship($ppt, '05_住在你裡面.ini'))->add();
(new Slides\Worship($ppt, '04_永遠尊貴.ini'))->add();
// 主日
(new Slides\Opening($ppt))->add(); // 關手機
(new Slides\Hymn($ppt, 170))->add(); // 唱詩
(new Slides\Verse($ppt, '提前', 4, 6, 16))->add(); // 讀經
(new Slides\Hymn($ppt,421))->add(); // 唱詩
(new Slides\ApostlesCreed($ppt))->add(); // 認信
(new Slides\GroupWorship($ppt, '磯法/興光'))->add(); // 獻詩
(new Slides\Preach( // 講道
    $ppt,
    '敬虔長進',
    '翁浩傳道',
	array(
    ), // 序言
    array(
        '學道 - 敬虔上努力操練自已' => array(
        ),
        '講道 – 操練自己也教導别人' => array(
        ),
        '行道 – 教導别人更行出榜樣' => array(
        ),
    )
))->add();
(new Slides\Tithing($ppt))->add(); // 奉獻
(new Slides\Visitor($ppt))->add(); // 新朋友
(new Slides\Report(
	$ppt,
	array(
        '我們誠心歡迎初次參加本教會敬拜的朋友。請留下姓名、地址、讓我們關心您，並邀請您參加各團契讀經小組、禱告會。',
        '請為上主日已接受洗禮的肢體：林明彥、余明花、周偉棟、祁瑩瑩、Jung、Xiaoying Xie、吳梓希，請為他們身心靈成長、蒙恩，一生堅定跟隨主代禱。',
        '4月1日將有聖洗禮，目前已報名受洗的肢體:孫毅、王翊萱，願意受洗歸入主名下者，請向陳牧師報名。每週主日（除了每個月第2個主日以外）早上9：00在副堂教室，陳牧師將為已受洗的初信者、即將受洗或希望對福音有更多認識的新朋友開談道班，歡迎大家參加。',
        '母堂4~6月的服事表已印製完成，公佈在公佈欄，並請服事同工們在招待處領取。',
        '教會禱告會在每週二早上9：00~10:30和週四晚上7：00~9:00開始，為自己、家庭、工作、團契擴張、教會、宣教、植堂、國家蒙恩禱告。',
        '教會4~6月份福音隊的服事表已公佈在佈告欄，每週六早上10:30在Sunnypark集合，請各團契輔導注意服事日期，鼓勵大家踴躍參加。',
        '今年第30屆亞細亞聖徒訪韓聖會將於5月15日到5月19日舉行，本屆主題「傳承與復興」，請已報名的弟兄姊妹，在3月16日前提供進出韓國的班機日期、時間以及班機號碼。另外，進入韓國的簽證，請務必事先確認(澳洲及台灣護照免簽證，其他護照需要進一步查詢)，相關訊息請洽詢顏瑞峰傳道或陳慧如師母。',
        '黃金海岸教會將於4月22日舉行「20週年感恩禮拜」及慶祝活動，因黃金海岸教堂場地有限，布里斯本母堂、雙語堂、西區可參加的人數將有所限制，目前規劃約200位弟兄姊妹前往慶賀，除了50~70位弟兄姊妹要參與聯合詩班與青年詩班的獻詩以外，其他約130~150位的名額由弟兄姊妹向各團契輔導報名，報名日期與注意事項如下:
        \n(1)報名的起訖日期:自即日起到3月25日為止。
        \n(2)報名的年齡條件:12歲以上(12歲以下者不列入200位名額內)。
        \n(3)優先可參加名單:採取先登記的弟兄姊妹列入優先。
        \n(4)各輔導注意事項:為更新報名人數，並刊登在週報上，請團契輔導
        \n每週五晚上8點前傳給康傳道，目前人數:75人(含詩班30人)。',
        '廚房部消息:經輔導會議決定，自本主日開始，主日午餐備餐服事請務必在早上9:15前完成，所有服事同工請儘快離開廚房準備參加主日禱告會，9:30將鎖廚房門，若有違規發生，將延長原團契2個月主日午餐備餐服事，請弟兄姊妹遵守規定，並請各團契輔導務必確實執行。',
        '神學課程消息:恩道潛能開發學校將開設「宣教學與福音策略」課程，日期時間:4月8日(主日)下午1:50開始，有負擔者請向翁浩傳道報名。',
        '恩道團契將於本週三 (3月14日)早上10:00有聚會，地點:Roma Park，有意參加者請與黃隆聲長老聯絡。',
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
	'主日敬拜1721.40；主日學46.95；週二禱告會 140.10；週四禱告會276.10；週六聯合團契45.40；週五西區團契158.30；',
	array(
		'什 一' => '陳小冬全家 500; 鄭次郎夫婦 60; R&J Yen F/T 50; The Chen F/T 50;黃隆聲夫婦 120; Jan & Nan 200; 梁振堯夫婦 50; P.J 650; 陳振傳夫婦 300; 康世興全家 100; JPH 250; JHK 260; 劉琦全家 50; Nicholas Yim 70; 李翔 100; JHRL 700; C.V.J. 110; JCVS 700;尤聖皓 & 李笑怡 2000; 李磊全家 160; YANG 100; 謝坤儒&杜斯斯 180; Victoria 145;宋瑞琪 50; Sophia Qin 270; 宋安琪 100; JHVR 50; 扈立清 200; 陳亞萍 10;',
		'感 恩' => '陳志展&陳謝琛 100; 梁振堯夫婦 50; Lydia Chen 20; Lee H.W 300; Bright & Vivian 50; 李森麟全家 50; Ryan & Wendy 50; Joe & Kathy 50;',
		'建 堂' => 'Fiona & Steve 200; Lydia Chen 20; Bright & Vivian 50; 李森麟全家 50; Victoria 10;',
		'宣 教' => '翁浩夫婦 400;',
		'購地認獻' => '胡羽恆 100; 胡羽光 20; The Chen F/T 50; 陳亞萍 10; 黃隆聲夫婦 800; 梁振堯夫婦 100; Audrey Cheng 30; 吳貴茂全家 50; 蔡尚恩 5; 李宗澤Matthew Li 10; JHK 100; 蔡重良全家 130; 嚴健明Ken Yim 250; C.V.J. 10; 李磊全家 160; 李翊鳴 10; Frank湯全家 120; 謝坤儒&杜斯斯 40; Sam & Kelly 100;',
	)
))->add();

(new Slides\WeeklyVerse($ppt, '耶和華喜悅燔祭和平安祭，豈如喜悅人聽從他的話呢？聽命勝於獻祭；順從勝於公羊的脂油。', '撒母耳記上 15:22'))->add(); // 金句
(new Slides\Hymn($ppt, 372))->add(); // 唱詩
(new Slides\LordsPrayer($ppt))->add(); // 主禱文
(new Slides\Ending($ppt))->add(); // 結束

require __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'OHPGen' . DIRECTORY_SEPARATOR . 'footer.php';