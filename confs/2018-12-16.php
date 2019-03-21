<?php
require __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'OHPGen' . DIRECTORY_SEPARATOR . 'header.php';
use \Core\Slides;

//// 早禱
//(new Slides\Worship($ppt, '03_祢的愛.ini'))->add();
//
//// pw
(new Slides\Worship($ppt, '05_我獻上感謝.ini'))->add();
(new Slides\Worship($ppt, '06_專心仰望耶穌.ini'))->add();
(new Slides\Worship($ppt, '05_行神蹟的神.ini'))->add();
(new Slides\Worship($ppt, '07_你神蹟如此真實.ini'))->add();
// 主日
(new Slides\Opening($ppt))->add(); // 關手機
(new Slides\Hymn($ppt, 442))->add(); // 唱詩
(new Slides\Verse($ppt, '徒', 9, 31, 43))->add(); // 讀經
(new Slides\Hymn($ppt,341))->add(); // 唱詩
(new Slides\ApostlesCreed($ppt))->add(); // 認信
(new Slides\GroupWorship($ppt, '提多牧區'))->add(); // 獻詩
(new Slides\Preach( // 講道
    $ppt,
    '神蹟與宣教',
    '陳小冬牧師',
	array(
	    new Slides\Verse($ppt, '徒', 9, 31, 43), // 讀經
    ), // 序言
    array(
        '在呂大-醫治癱子神蹟-鄉民看見就歸服主' => array(
            new Slides\Verse($ppt, '徒', 9, 33, 35),
        ),
        '在約帕-多加死裏復活-許多人聽見信了主' => array(
            new Slides\Verse($ppt, '徒', 9, 38, 42),
        ),
        '在各處-教會都得平安-聖靈安慰人數增多' => array(
            new Slides\Verse($ppt, '徒', 9, 31, 32),
            new Slides\Verse($ppt, '徒', 9, 43),
        ),
    ),
	array(
        new Slides\Verse($ppt, '徒', 9, 31),
    ) // 結論
))->add();
(new Slides\Tithing($ppt))->add(); // 奉獻
(new Slides\Visitor($ppt))->add(); // 新朋友
(new Slides\Report(
    $ppt,
	array(
        '我們誠心歡迎初次參加本教會敬拜的朋友。請留下姓名、地址、讓我們關心您，並邀請您參加各團契讀經小組、禱告會。',
        '感謝主，2018年共計89位接受聖洗禮成為家人，將一切榮耀歸給主!',
        '2019年教會年度主題:「宣教、植堂」，主題經文:使徒行傳1章8節、使徒行傳16章3~9節。',
        '2019年1月6日將有聖洗禮，目前已報名者:劉鳳清、楊念希(小兒洗)、楊銘希(小兒洗) 、穆菲、Alvin Mu(小兒洗)，願意受洗歸入主名下者，請向陳牧師報名。每週主日（除了每個月第2個主日以外）早上9點在副堂教室，陳牧師將為即將受洗或希望對福音有更多認識新朋友開談道班，歡迎參加。',
        '教會將舉辦聖樂詩歌比賽，請各牧區團契組隊練習，相關訊息請參閱佈告欄。',
        '今年聖誕節晚會將於下週一(12月24日) 晚上7:30在母堂舉行，節目內容有牧師短講、詩歌讚美、戲劇及抽獎活動等，會後有茶點的分享(各團契準備約50元的茶點分享)，也請同工們在當天下午5:30以前到教會，另外，本週四(20/12) 晚上7點、本週六(22/12)下午3:00、下主日(23/12) 下午1:30將舉行聖誕晚會彩排，請所有參與服事的弟兄姊妹務必參加，其他注意事項:內容	日期	地點	注意事項	負責同工',
        '教會將於12月31日(週一)晚上10:00舉行跨年禱告會，請大家一起來數算主的恩典，為今年獻上感恩也為明年仰望主引導，新的一年得勝有餘。未來三個星期的週二及週四的禱告會與週六牧區慶典活動的調整如下：',
        '新的一年又即將開始了，教會推行一年讀完一遍聖經(依照週報所列進度)，完成者即贈送一本啟導本聖經和獎狀，立志者請弟兄姊妹們向各團契輔導領取2019年空白立約書、讀經作業規定與讀經進度表，並向各團契輔導報名並簽立約書。另外，請各團契輔導將已經完成或即將完成者的名單及讀經作業儘快交給陳師母。',
        '請大家注意，當開車來母堂，車速務必在10km/h以內，並以車頭朝外的方式停車(reverse park)，同時留意小孩安全(請家長要特別看顧小孩)。',
    )
))->add();
(new Slides\Intercession( // 代禱
    $ppt,    
	array(
        '為宣教與牧區慶典事工、新朋友加入、聖徒更新服事與培訓代禱。',
        '為返鄉弟兄姊妹學業、事業、家庭及一生走在主蒙福之路代禱。',
 	)
))->add();
(new Slides\Dedication( // 上週奉獻
	$ppt,
	'主日敬拜519.95；主日學22.60；週二禱告會72.00；西區佈道所主日敬拜246.60；雙語堂主日敬拜836.60；雙語堂主日學11.65；中區佈道所主日敬拜45.10；南區佈道所主日敬拜50.00；西區週三聚會78.80；週六牧區聯合528.75；迦拿愛家聚會 65.00；',
	array(
		'什 一' => '鄭次郎夫婦 60; R&J Yen F/T 50; The Chen F/T 50; 黃隆聲夫婦 200; Fiona & Steve 200; WBH 800; 康世興全家 200; K & Y 50; JHK 260; 扈立清 200; 林歡 50; Nicholas Yim 150; Ian &Yona 75; 嚴健明Ken Yim 100; JHRL 100; James Hsu 700; 蔡曉緯夫婦 200;Roma馬榕蔚 152; C.V.J. 140; 鄭朝鴻全家 400; 李磊全家 40; YANG 50; 趙芯斕 310; Antony & Rachel 200; 邵薇 600; Gloria Chang 585; 謝帛翰H.H 250; 宋安琪 100; JHVR 85; 閻書憧 200; ',
		'感 恩' => 'R&J Yen F/T 300; Dave & Pauline 500; 路博涵 50; 羅仁煥夫婦 100; Roma馬榕蔚 70; Bright & Vivian 50; 周文和全家 30; Andy陳富鴻 100;',
		'建 堂' => '蔡尚恩 5; 蔡重良全家 130; Nicholas Yim 10;',
		'宣 教' => '翁浩夫婦 700;',
		'購地認獻' => '胡羽光 20; The Chen F/T 50; 黃耀群夫婦 100; 張紅蕾 50; 黎滿香 5; 袁玲玲 50; Rachel Lin 100; C.V.J. 10; 鄭朝鴻全家 150; 鄭又恩&鄭又道 50; 李磊全家 40; 丁瑞良夫婦 20; E & E 100; Sam & Kelly 100; 謝帛翰H.H 100;',
	)
))->add();

(new Slides\WeeklyVerse($ppt, '你要專心仰賴耶和華，不可依靠自己的聰明；在你一切所行的事上，都要認定祂，祂必指引你的路。', '箴言 3:5-6'))->add(); // 金句
(new Slides\Hymn($ppt, 445))->add(); // 唱詩
(new Slides\LordsPrayer($ppt))->add(); // 主禱文
(new Slides\Ending($ppt))->add(); // 結束

require __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'OHPGen' . DIRECTORY_SEPARATOR . 'footer.php';