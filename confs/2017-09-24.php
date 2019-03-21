<?php
require __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'OHPGen' . DIRECTORY_SEPARATOR . 'header.php';
use \Core\Slides;

// 早禱
(new Slides\Worship($ppt, '02_禱告.ini'))->add();

// pw
(new Slides\Worship($ppt, '04_前來敬拜.ini'))->add();
(new Slides\Worship($ppt, '04_神本為大.ini'))->add();
(new Slides\Worship($ppt, '05_榮美的救主.ini'))->add();
(new Slides\Worship($ppt, '05_神羔羊配得.ini'))->add();
// 主日
(new Slides\Opening($ppt))->add(); // 關手機
(new Slides\Hymn($ppt, 278))->add(); // 唱詩
(new Slides\Verse($ppt, '創', 41, 38, 52))->add(); // 讀經
(new Slides\Hymn($ppt, 16))->add(); // 唱詩
(new Slides\ApostlesCreed($ppt))->add(); // 認信
(new Slides\GroupWorship($ppt, '提摩太'))->add(); // 獻詩
(new Slides\Preach( // 講道
    $ppt,
    '學習真道',
    '陳小冬牧師',
    array(
        new Slides\Verse($ppt, '創', 41, 38, 52), // 讀經
    ), // 序言
    array(
        '在聖經中學習 – 真道 – 得智慧' => array(
            new Slides\Verse($ppt, '創', 41, 38, 39), // 讀經
            new Slides\Verse($ppt, '箴', 3, 1, 18), // 讀經
		),
        '在失敗中學習 – 得勝 – 瑪拿西' => array(
            new Slides\Verse($ppt, '創', 41, 51), // 讀經
            new Slides\Verse($ppt, '創', 37, 2, 5), // 讀經
            new Slides\Verse($ppt, '創', 37, 23, 27), // 讀經
        ),
        '在受苦中學習 – 昌盛 – 以法蓮' => array(
            new Slides\Verse($ppt, '創', 41, 52), // 讀經
            new Slides\Verse($ppt, '創', 39, 1, 5), // 讀經
            new Slides\Verse($ppt, '創', 39, 7, 9), // 讀經
            new Slides\Verse($ppt, '創', 39, 20, 23), // 讀經
            new Slides\Verse($ppt, '創', 45, 3, 5), // 讀經
            new Slides\Verse($ppt, '創', 41, 38, 41), // 讀經
        ),
    )
))->add();
(new Slides\Tithing($ppt))->add(); // 奉獻
(new Slides\Visitor($ppt))->add(); // 新朋友
(new Slides\Report(
    $ppt,
    array(
		'我們誠心歡迎初次參加本教會敬拜的朋友。請留下姓名、地址、讓我們關心您，並邀請您參加各團契讀經小組、禱告會。',
		'下主日將有聖洗禮，目前已報名受洗的新肢體：朱永強、張曉舟、姜越洋、李芷盈、陳雅恩，願意受洗歸入主名下者，請向陳牧師報名。另外，每週主日（除了每個月第2個主日以外）早上9：00在副堂教室，陳牧師將為已經受洗的初信者、即將受洗歸入主名下的人或希望對福音有更多認識的新朋友開談道班，歡迎大家踴躍參加。',
		'下主日為聖餐主日，請弟兄姊妹預備心領受主的聖餐，並紀念主耶穌的救贖宏恩。',
		'下主日將有教會大掃除，請弟兄姊妹帶便服、清潔工具等，一起來打掃，關心神家裡的事。',
		'本週六(9月30日)下午3：00為教會九月份建堂禁食禱告會，將由活石團契負責敬拜讚美，請弟兄姊妹踴躍參加。',
		'2018年第30屆亞細亞聖徒訪韓聖會將在5月15日到5月19日舉行，地點在首爾汝夷島基督教中央純福音教會，明年聖會型式是5天的特會，請在招待處領取報名表，向顏長老報名及每位繳200元訂金，目前報名熱烈，請參加者儘速繳交報名表並以確實繳交200元訂金者為優先，請大家儘速報名，以提早預訂住宿與相關行程。',
		'教會為了購回建堂認股人，手中所持有的土地認購的股份，全部收歸教會所有，以利教會永續發展。經董事會和長執會的決議: 發起建堂奉獻。請主內弟兄姊妹(限已受洗的基督徒)，憑著信心簽立  「基督教恩道會教會建堂購地認獻立約書」，請大家注意以下幾點:(1)奉獻起訖日期:請儘量填入2017年至2021年(每月固定奉獻)。(2)奉獻金額多寡:完全不限，但請每位弟兄姊妹都能憑著信心簽立，並務必在「認獻人」欄位簽名。(3)傳達正確訊息: 真正了解認獻的意義，乃是支持教會永續發展。(4)在填寫奉獻袋時，請註明「購地認獻」，以方便會計部門作業。簽好之後請交給各團契輔導，再交由顏長老統計之。',
		'會計部門消息: 各團契的記帳及報稅方式將使用XERO會計系統，並已於日前對各團契做說明，請各團契儘快將會計同工個人的email寄到logospa@gmail.com，並於本週六(9月30日)前完成7~9月XERO的帳目輸入，若有任何問題，請儘快提出。',
		'請弟兄姊妹特別注意，10月份整個月都是福音月，請每位弟兄姊妹至少帶一位新人來教會，並且天天要在工作場所、鄰舍、親戚、朋友間傳揚福音。',
		'為配合10月福音月，下週六(10月7日)下午3:00的青年聯合團契的活動是「聯合迎新會」，請弟兄姊妹邀請新朋友參加。',
		'教會10~11月福音隊的服事表已公佈在佈告欄，每週六早上10:30在Sunnypark集合，請團契輔導注意服事日期，鼓勵大家踴躍參加。',
		'為預備聖誕晚會的詩歌，恩道聯合詩班每週四晚上6：30開始練習，請各團契指派3位弟兄姊妹參加聯合詩班的聖誕晚會詩歌練習。',
		'布里斯本教牧聯禱會將於下週一(10月2日)上午10點在本堂舉行，請傳道長老務必出席，並請弟兄姊妹為眾教會同心興旺福音代禱。',
    )
))->add();
(new Slides\Intercession( // 代禱
    $ppt,
    array(
		'為教會擴建工程所需的經費與後續施工的順利平安代禱。',
		'為教會各團契擴張為牧區所需的同工與信心的看見代禱。',
		'為謝麗玉長老娘、毛天琦姊妹(Angela)、郭曉真姊妹(Jessica)的身體早日康復代禱。',
    )
))->add();
(new Slides\Dedication( // 上週奉獻
    $ppt,
    '主日敬拜1880.65；主日學46.60；週二禱告會57；週四禱告會337.75；週五西區團契96.05；週六聯合團契 43.40；西區佈道主日敬拜220.80；',
    array(
        '什 一' => '胡羽恆 100; The Chen F/T 50; 鄭朝元 110; 黃隆聲夫婦 120; P.J 650; 陳振傳夫婦 300; 康世興全家 100; 浣熊L. L. 200; JHK 260; JHRL 200; C.V.J. 150; 謝坤儒&杜斯斯 160; 宋瑞琪 120; 謝帛翰H.H 150; 宋安琪 120; JHVR 100; 劉琦全家 50; EN Liao 130; JPH 350; Tak Lei, Lam 30; N.H 5; Yan 100; M & C 200; 方咏賢 20; 李翔 25;',
        '感 恩' => '鄭次郎夫婦 15; Hong & Sonia 100; 吳福瑞全家 50; Bright & Vivian 50; Becky 5;李森麟全家 50; Jack Tang Family 100; Joe & Kathy 20;',
        '建 堂' => 'Fiona & Steve 200; Tseng 200; Lee H.W 20; Bright & Vivian 50; 李森麟全家 50;
補登 17/09: Fiona & Steve 200; Tseng 200; Lee H.W 20; Bright & Vivian 50; 李森麟全家 50;',
        '宣 教' => '翁浩夫婦 200; Tseng 100;',
        '購地認獻' => 'R&J Yen F/T 300; The Chen F/T 50; 吳貴茂全家 50; 黃耀群夫婦 100; JHK 100; 蔡重良全家 120; C.V.J. 10; 鄭朝鴻全家 40; Brock全家 20; 謝坤儒&杜斯斯 40; 宋瑞琪 100; Sophia Qin 150; E & E 150; 凃秀鴻夫婦 100; Sam & Kelly 100; 謝帛翰H.H 50; 宋安琪 20; EN Liao 60; Nicholas Yim 10; 李曉蘭 20; 蔡尚恩 10;',
    )
))->add();

(new Slides\WeeklyVerse($ppt, '你們要先求祂的國和祂的義，這些東西都要加給你們了。所以，不要為明天憂慮；因為明天自有明天的憂慮；一天的難處一天當就夠了。', '馬太福音 6:33-34'))->add(); // 金句
(new Slides\Hymn($ppt, 460))->add(); // 唱詩
(new Slides\LordsPrayer($ppt))->add(); // 主禱文
(new Slides\Ending($ppt))->add(); // 結束

require __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'OHPGen' . DIRECTORY_SEPARATOR . 'footer.php';