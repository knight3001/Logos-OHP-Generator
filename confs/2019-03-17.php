<?php
require __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'OHPGen' . DIRECTORY_SEPARATOR . 'header.php';
use \Core\Slides;

//// 早禱
//(new Slides\Worship($ppt, '06_從早晨到夜晚.ini'))->add();
//
//// pw
(new Slides\Worship($ppt, '07_永恆唯一的盼望.ini'))->add();
(new Slides\Worship($ppt, '09_你是否感到群山震動.ini'))->add();
(new Slides\Worship($ppt, '02_安靜.ini'))->add();
(new Slides\Worship($ppt, '04_愛中相遇.ini'))->add();
// 主日
(new Slides\Opening($ppt))->add(); // 關手機
(new Slides\Hymn($ppt, 19))->add(); // 唱詩
(new Slides\Verse($ppt, '約', 3, 1, 21))->add(); // 讀經
(new Slides\Hymn($ppt,186))->add(); // 唱詩
(new Slides\ApostlesCreed($ppt))->add(); // 認信
(new Slides\GroupWorship($ppt, '母堂主日學'))->add(); // 獻詩
(new Slides\Preach( // 講道
    $ppt,
    '欲善其事-先利其器',
    '陳小冬牧師',
	array(
	    new Slides\Verse($ppt, '約', 3, 1, 21), // 讀經
    ), // 序言
    array(
        '只用智商(IQ)-不能明白神的國' => array(
            new Slides\Verse($ppt, '約', 3, 9, 15), // 讀經
            new Slides\Verse($ppt, '約', 3, 9, 18), // 讀經
        ),
        '加上情商(EQ)-略能感覺神的國' => array(
            new Slides\Verse($ppt, '約', 3, 1, 4), // 讀經
            new Slides\Verse($ppt, '約', 3, 19, 21), // 讀經
        ),
        '運用靈商(SQ)-才能受教神的國' => array(
            new Slides\Verse($ppt, '約', 3, 5, 19), // 讀經
        ),
        '信靠耶穌(HS)-必能進入神的國' => array(
            new Slides\Verse($ppt, '約', 3, 14, 17), // 讀經
            new Slides\Verse($ppt, '約', 16, 12, 15), // 讀經
        ),
    ),
	array(
        new Slides\Verse($ppt, '約', 3, 16, 17), // 讀經
    ) // 結論
))->add();
(new Slides\Tithing($ppt))->add(); // 奉獻
(new Slides\Visitor($ppt))->add(); // 新朋友
(new Slides\Report(
    $ppt,
	array(
        '我們誠心歡迎初次參加本教會敬拜的朋友。請留下姓名、地址、讓我們關心您，並邀請您參加各團契讀經小組、禱告會。',
        '4月7日將有聖洗禮，目前已報名者:劉為、楊方利、周玉英、李宗耀(嬰兒洗)，願意受洗歸入主名下者，請向陳牧師報名。每週主日（除了每個月第2個主日以外）早上9：00在副堂教室，陳牧師將為已受洗的初信者、即將受洗或希望對福音有更多認識的新朋友開談道班，歡迎參加。',
        '教會禱告會在每週二早上9：00和週四晚上7：00開始，請弟兄姊妹踴躍參加，為自己、家庭、工作、團契擴張、教會、宣教、植堂、國家蒙恩迫切禱告(請大家注意，本週四3月21日的禱告會將會清點各牧區團契參加的人數，請牧區長及輔導務必鼓勵弟兄姊妹參加禱告)。',
        '教會聯合詩班於每週四晚上6點開始練習詩歌，請各團契指派3位弟兄姊妹參加聯合詩班(請大家互相鼓勵參與，請團契輔導確實執行)。',
        '週六牧區聯合慶典聚會，本週六3月23日下午4點到6點的活動請參閱佈告欄(5:30~6:00敬拜讚美、牧長祝福禱告，6點開始愛筵)。另外，每週六下午2點在教會召開牧區擴張的禱告造就會，請長執、牧區長、正副輔導務必參加，若不克出席，請向陳牧師請假。',
        '各團契負責教會週邊分配區域的環境維護(請參閱公佈欄-1.提多牧區、2.牧愛牧區，3.提摩太牧區，4 .腓利牧區、愛家團契、磯法團契，5.迦拿團契，6.恩道牧區。)，如除草、噴藥等定期性的維護工作，請牧區團契輔導務必確實督導並落實執行。',
        '聖樂部消息:教會將舉辦聖樂詩歌比賽，將分初賽、複賽、決賽，目前初賽已有7 隊報名，將於4月20日週六舉行初賽，將取5隊進入複賽(5月18日舉行)，再取3隊進入決賽(6月22日舉行) ，比賽曲目共兩首(自選)，請參加隊伍要邀請新朋友加入練習，相關比賽訊息請詢問顧錦瑞傳道。另外，有報名詩歌比賽的牧區請注意，請儘快將各牧區參與比賽的人數及曲目提供給聖樂部做統整，請註明參與的人數與新朋友人數，相關訊息請詢問陳玲慧長老。',
        '第31屆亞細亞聖徒訪韓聖會將在7月15日到7月22日舉行，本屆主題是「當聖靈降臨在你們身上」，相關訊息請參閱佈告欄。',
        '神學部消息:為培植更多宣教與植堂的神國工人，本堂恩道潛能開發學校將於3~4月份開設以下神學裝備課程，相關訊息如下：',
    )
))->add();
(new Slides\Intercession( // 代禱
    $ppt,    
	array(
        '為宣教與牧區慶典事工、新朋友加入、聖徒更新服事與培訓代禱。',
        '為教會在2020年達到週六慶典活動至少要有1000人參加聚會代禱。',
 	)
))->add();
(new Slides\Dedication( // 上週奉獻
	$ppt,
	'主日敬拜498.40；主日學42.90；週二禱告會83.00；週四禱告會210.40；雙語堂主日敬拜407.35；雙語堂主日學9.80；西區佈道所主日敬拜76.80；西區週三聚會119.25；週六牧區聯合292.15；南區佈道所主日敬拜57.55；',
	array(
		'什 一' => 'R&J Yen F/T 50; The Chen F/T 50; 黃隆聲夫婦 120; Fiona & Steve 200; WBH 800; 康世興全家 200; I-en& Melissa 200; L.L 200; K & Y 1060; 謝帛翰H.H 100; JPH 200; 余明花10; Katie Yiu 100; 陳小喬 50; 劉琦全家 50; 顧錦花&劉惠苓 120; Nicholas Yim 75; Ian &Yona 130; 桂星 110; 嚴健明Ken Yim 100; JHRL 100; James Hsu 700; C.V.J. 1010; 鄭朝鴻全家 200; 方明川夫婦 100; L.W. 100; 謝坤儒&杜斯斯 180; Antony & Rachel 200; 趙芯斕 675;邵薇 600; 姚堯全家 300; 蔡曉緯夫婦 200; JHVR 90; 張立斌 50;',
		'感 恩' => 'Glory F/T (Mary) 20; 吳貴茂全家50; 蔡尚恩 5; Lee H.W 20; Stella Chen 100; 羅仁煥夫婦 100; 周文和全家 50; Jack Tang Family 100; Joe & Kathy 50;',
		'建 堂' => '蔡重良全家 130; Nicholas Yim 10; 蔡尚雅 5;',
		'宣 教' => '鄭次郎夫婦 20; WBH 300; 翁浩夫婦 400;',
		'購地認獻' => '胡羽恆 100; 胡羽光 20; The Chen F/T 50; 胡保雄夫婦 300; 黃耀群夫婦 100; 扈立清 200; Debby Chen 300;陳小喬 50; 桂星 20; 黎滿香 5; 張月美 25; C.V.J. 20; 鄭朝鴻全家 100; 李磊全家 150; Frank湯夫婦 120; 謝坤儒&杜斯斯 40; 丁瑞良夫婦 20; Sam & Kelly 100; E & E 90;謝帛翰H.H 100; Edwin 50;',
	)
))->add();

(new Slides\WeeklyVerse($ppt, '人不要誇口說驕傲的話，也不要出狂妄的言語；因耶和華是大有知識的　神，人的行為被祂衡量。', '撒母耳記上2:3'))->add(); // 金句
(new Slides\Hymn($ppt, 33))->add(); // 唱詩
(new Slides\LordsPrayer($ppt))->add(); // 主禱文
(new Slides\Ending($ppt))->add(); // 結束

require __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'OHPGen' . DIRECTORY_SEPARATOR . 'footer.php';