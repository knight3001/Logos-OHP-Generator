<?php
require __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'OHPGen' . DIRECTORY_SEPARATOR . 'header.php';
use \Core\Slides;

// 早禱
(new Slides\Worship($ppt, '06_在祢呼召之地.ini'))->add();

// pw
(new Slides\Worship($ppt, '06_眾城門抬起頭.ini'))->add();
(new Slides\Worship($ppt, '04_看見復興.ini'))->add();
(new Slides\Worship($ppt, '05_永遠的依靠.ini'))->add();
(new Slides\Worship($ppt, '06_耶穌正在這裡.ini'))->add();
// 主日
(new Slides\Opening($ppt))->add(); // 關手機
(new Slides\Hymn($ppt, 7))->add(); // 唱詩
(new Slides\Verse($ppt, '提前', 4, 6, 16))->add(); // 讀經
(new Slides\Hymn($ppt, 233))->add(); // 唱詩
(new Slides\ApostlesCreed($ppt))->add(); // 認信
(new Slides\GroupWorship($ppt, '主日學'))->add(); // 獻詩
(new Slides\Preach( // 講道
    $ppt,
    '門徒生活操練',
    '陳邱美娣牧師',
	array(
        new Slides\Verse($ppt, '提前', 4, 6, 16), // 讀經
    ), // 序言
    array(
        '門徒生活–何事要操練' => array(),
        '門徒生活–為何要操練' => array(
            new Slides\Verse($ppt, '提前', 3, 16), // 讀經
        ),
        '門徒生活–操練的結果' => array(
            new Slides\Verse($ppt, '提前', 4, 8), // 讀經
        ),
    )
))->add();
(new Slides\Tithing($ppt))->add(); // 奉獻
(new Slides\Visitor($ppt))->add(); // 新朋友
(new Slides\Report(
	$ppt,
	array(
		'我們誠心歡迎初次參加本教會敬拜的朋友。請留下姓名、地址、讓我們關心您，並邀請您參加各團契讀經小組、禱告會。',
		'上主日受洗歸主的新肢體有：徐志強、王程槿、Jayden Jack Kwong、沈欣怡，請為他們身心靈成長蒙恩，一生堅定跟隨主代禱。',
		'8月6日將有聖洗禮，願意受洗歸入主名下者，請向陳牧師報名。另外，每週主日（除了每個月第2個主日以外）早上9：00在副堂教室，陳牧師將為已經受洗的初信者、即將受洗歸入主名下的人或希望對福音有更多認識的新朋友開談道班，歡迎大家踴躍參加。',
		'神學課程消息:恩道潛能開發學校將於7月30日(主日)開設「宣教學與福音策略(二) 」，沒上過以上課程(一)的弟兄姊妹，也非常歡迎試聽及報名，請大家踴躍來上課，並為今年教會弟兄姊妹「不是學生就是老師」代禱。',
		'教會為了購回建堂認股人，手中所持有的土地認購的股份，全部收歸教會所有，以利教會永續發展。經董事會和長執會的決議: 發起建堂奉獻。請主內弟兄姊妹(限已受洗的基督徒)，憑著信心簽立  「基督教恩道會教會建堂購地認獻立約書」，請大家注意以下幾點: (1)奉獻起訖日期:請儘量填入2017年至2021年(每月固定奉獻) 。 (2)奉獻金額多寡:完全不限，但請每位弟兄姊妹都能憑著信心簽立，並務必在「認獻人」欄位簽名。 (3)傳達正確訊息: 真正了解認獻的意義，乃是支持教會永續發展。 (4)在填寫奉獻袋時，請註明「購地認獻」，以方便會計部門作業。 簽好之後請交給各團契輔導，再交由顏長老統計之。',
		'教會7~9月福音隊的服事表已公佈在佈告欄，每週六早上10:30在Sunnypark集合，請團契輔導注意服事日期，鼓勵大家踴躍參加。',
		'為更新年度的會友通訊錄，請各團契輔導於七月底前將新年度的團契同工 (請務必註明同工職稱，如正副輔導、正副會長、各部門同工)以及目前會友的中英文姓名、電子郵件及聯絡電話以電子檔的方式E-mail給康長老。E-mail:kevinkanglogos@gmail.com。',
		'Griffith 大學在本週二 (7月11日)是校園Market Day，時間是從10:00AM~2:00PM，本堂將設立福音攤位，請弟兄姊妹踴躍參與校園福音事工，有負擔參與的弟兄姊妹請向鄭淑玲姊妹聯絡。',
		'各讀經小組將從明天(7月10日)起恢復聚會，請大家關心新人，並帶入小組接受裝備與造就。',
		'恩道團契將於本週三(7月12日)早上10點在教會聚會，主題是「烹飪分享」，有意者請每家帶一道菜與大家分享，歡迎弟兄姊妹參加。',
		'會計部消息 - 經長執會開會決定，從今年7月份開始，各團契向教會申請團契經費及年度報稅(GST)的方式有重大變更如下: (1)申請團契經費及報稅(退GST)，以每3個月為單位向會計部門請領，但已改為事後請領，請各輔導要先代墊3個月的團契費用，然後以各請款單及收據向會計部門實報實銷，以往在新的會計年度事先請領500元的方式將不再適用，請各團契輔導特別注意! (2)目前已請領經費的團契有:迦勒、敬拜讚美團、磯法、牧愛、活石、安親班、恩道，請以上團契的輔導儘快將所有預先請領款項退回會計部。 (3)各團契的記帳及報稅方式將有統一的作業流程及期限，將另行通知所有團契的輔導及相關會計同工開會做說明。'
	)
))->add();
(new Slides\Intercession( // 代禱
    $ppt,    
	array(
		'為教會擴建工程所需的經費與後續施工的順利平安代禱。',
		'為今年訪韓聖會：請弟兄姊妹為牧長及弟兄姊妹的出入平安及得著聖靈能力代禱。',
		'感謝主，蔡鴻傑(Hong)、陳嘉穎(Sonia)夫婦於上週得一千金，母女平安。',
	)
))->add();
(new Slides\Dedication( // 上週奉獻
	$ppt,
	'主日敬拜980.60；主日學34.65；週二禱告會194.20；週四禱告會267.55；週六聯合團契34.20；週五西區團契 126.60；',
	array(
		'什 一' => '陳小冬全家 400; 鄭次郎夫婦 50; 胡保華夫婦 1000; 胡羽恆 50; The Chen F/T 50; 陳亞萍 10; 黃隆聲夫婦 120; 梁振堯夫婦 420; P.J 650; 康世興全家 100 ; Lee H.W 70; I-en & Melissa 200; JHRL 200; C.V.J. 100; 鄭朝鴻全家 170; 李磊全家 300; JCVS 200;謝坤儒&杜斯斯 160;宋瑞琪 100; 唐俊英 150; Sophia Qin 20; Sam全家 50; 宋安琪 100; 劉琦全家 50; JPH 250; Tak Lei, Lam 40; 宋双鳳 52; MY12 100; Yan 50;K&Y 4000;Francis & Diana 7200;',
		'感 恩' => '梁振堯夫婦 50; Hong & Sonia 100; Irene & Terry 50; Bright & Vivian 50; 阮俊韋 50; Joe & Kathy 50;郭美惠 20;',
		'建 堂' => 'Fiona & Steve 200; Tseng 100; 李磊全家 300; Bright & Vivian 50; Frank湯全家 120; Becky 50; 宋瑞琪 100; 張筱麗全家 10; Jack Tang Family 200; 李翊鳴 10; 王靖 200;李宗澤Matthew Li 10;',
		'宣 教' => '翁浩夫婦 200; Tseng 100; 黃耀群夫婦 100;',
		'購地認獻' => '購地認獻	R&J Yen F/T 1500; The Chen F/T 50; 陳亞萍 10; C.C.Y F/T 50; 黃隆聲夫婦 800; 梁振堯夫婦 100; 蔡重良全家 120; C.V.J. 10; 謝坤儒&杜斯斯 40; JCVS 300; E & E 50; Ryan & Wendy 50;凃秀鴻夫婦 50; 宋安琪 20; JHVR 200; EN Liao 20; Audrey Cheng 30; 黃金英 50; 嚴健明 Ken Yim 200; Francis & Diana 19200;',
	)
))->add();

(new Slides\WeeklyVerse($ppt, '耶和華必然等候，要施恩給你們；必然興起，好憐憫你們，因為耶和華是公平的　神，凡等候祂的，都是有福的。', '賽 30:18'))->add(); // 金句
(new Slides\Hymn($ppt, 419))->add(); // 唱詩
(new Slides\LordsPrayer($ppt))->add(); // 主禱文
(new Slides\Ending($ppt))->add(); // 結束

require __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'OHPGen' . DIRECTORY_SEPARATOR . 'footer.php';