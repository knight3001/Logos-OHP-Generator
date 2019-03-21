<?php
define('USE_LOGO', true);
require __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'OHPGen' . DIRECTORY_SEPARATOR . 'header.php';
use \Core\Slides;

////// 早禱
(new Slides\Worship($ppt, '07_每一天我需要祢.ini'))->add();
////
////// pw
(new Slides\Worship($ppt, '05_在你寶座前.ini'))->add();
(new Slides\Worship($ppt, '08_新的異象新的方向.ini'))->add();
(new Slides\Worship($ppt, '05_豐盛的應許.ini'))->add();

// 主日
(new Slides\Opening($ppt))->add(); // 關手機
(new Slides\Hymn($ppt, 211))->add(); // 唱詩
(new Slides\Verse($ppt, '提後', 2, 1, 10))->add(); // 讀經
(new Slides\Hymn($ppt, 169))->add(); // 唱詩
(new Slides\ApostlesCreed($ppt))->add(); // 認信
(new Slides\Preach( // 講道
    $ppt,
    '門徒帶出門徒',
    '林欣燕長老',
    array(
        new Slides\Verse($ppt, '提後', 2, 1, 10),
    ), // 序言
    array(
        '建立生命連結的關係' => array(
            new Slides\Verse($ppt, '提後', 2, 1),
            new Slides\Verse($ppt, '提前', 5, 23),
            new Slides\Verse($ppt, '加', 4, 19),
            new Slides\Verse($ppt, '林前', 4, 15),
            new Slides\Verse($ppt, '約', 1, 38, 39),
        ),
        '支取上頭的恩典能力' => array(
            new Slides\Verse($ppt, '提後', 2, 1),
        ),
        '交託忠心能教導的人' => array(
            new Slides\Verse($ppt, '提後', 2, 2),
        ),
        '操練勝過苦難的品格' => array(
            new Slides\Verse($ppt, '提後', 2, 3),
            new Slides\Verse($ppt, '提後', 2, 4, 6),
            new Slides\Verse($ppt, '提後', 2, 7),
            new Slides\Verse($ppt, '提後', 2, 8, 9),
        ),
        '活出熱愛福音的見證' => array(
            new Slides\Verse($ppt, '提後', 2, 9, 10),
        ),
    ),
    array(
        new Slides\Verse($ppt, '提後', 2, 1, 10),
    )
))->add();
(new Slides\Tithing($ppt))->add(); // 奉獻
(new Slides\Visitor($ppt))->add(); // 新朋友
(new Slides\Report(
    $ppt,
    array(
        '我們誠心歡迎初次參加本教會敬拜的朋友。請留下姓名、地址、讓我們關心您，並邀請您參加各團契讀經小組、禱告會。',
        '下週一(2月4日)適逢農曆除夕，教會將提前於下主日(2月3日)過農曆春節，中午備有豐盛的愛筵，請每家帶一道豐盛的年菜與大家分享，並請弟兄姊妹邀請新朋友一起來分享主的愛。',
        '下主日將有聖洗禮，目前已報名者：陳麗波、鄭光宏，願意受洗歸入主名下者，請向林长老報名。每週主日（除了每個月第2個主日以外）早上9：00在副堂教室，陳牧師將為已受洗的初信者、即將受洗或希望對福音有更多認識的新朋友開談道班，歡迎大家參加。',
        '下主日為聖餐主日，請預備心領受主的聖餐，並紀念主耶穌救贖宏恩。',
        '教會禱告會在每週二早上9：00和週四晚上7：00開始，請弟兄姊妹踴躍參加，為自己、家庭、工作、團契擴張、教會、宣教、植堂、國家蒙恩迫切禱告。',
        '週六牧區聯合慶典聚會，本週六(2月2日)下午4點到6點的活動請參閱佈告欄(5:30~6:00敬拜讚美、牧長祝福禱告，6點開始愛筵)。另外，每週六下午2點在教會召開牧區擴張的禱告造就會，請長執、牧區長、正副輔導務必參加，若不克出席，請向陳牧師請假。',
        '2月10日主日愛筵後將有教會大掃除，各牧區團契負責打掃的區域分配圖，請參閱佈告欄，請大家帶便服、清潔工具等，一起來打掃，關心神家裡的事。',
        '教會將舉辦聖樂詩歌比賽，請各牧區團契開始組隊練習，相關訊息:(1)組隊原則: 牧區聯合組隊、或牧區與團契聯合組隊或團契聯合組隊(但要有新朋友加入，至少1位)。(2)組隊報名:請各牧區團契務必在2019年1月底前向顧錦瑞傳道報名。(3)比賽曲目:共兩首(指定曲與自選曲各一)，指定曲請由以下5首選一首:聖城、哈利路亞、預備耶和華的路、牧人之歌、普世歡騰，自選曲可自行決定，詳細曲目資訊請詢問顧錦瑞傳道。(4)比賽日期:預定2019年4月20日(週六)舉行(比賽時間將另定)。(5)評審過程:分專業評審、現場投票與網路投票等(細則將另定)。(6)獎勵辦法:經長執會開會決定，將提供獎金或等值獎品如下:冠軍-500元、亞軍-300元、季軍-200元。',
        '教會推行一年讀完一遍聖經(依照週報所列進度)，完成者即贈送一本啟導本聖經和獎狀，立志者請弟兄姊妹們向各團契輔導領取2019年空白立約書、讀經作業規定與讀經進度表，並向各團契輔導報名並簽立約書。另外，請各團契輔導將已經完成或即將完成者的名單及讀經作業儘快交給陳師母，目前已完成者:蔡曉緯、蕭苑瑜、蔡尚恩、蔡尚雅、 蔡尚妍、蕭承杰、康詠珩，將於下主日舉行頒獎。',
        '第31屆亞細亞聖徒訪韓聖會將在7月15日到7月22日舉行，本屆主題是「當聖靈降臨在你們身上」，相關訊息請參閱佈告欄。',
        'UQ 將在2月20日(週三)舉行校園Open day，請各堂有負擔的弟兄姐妹來支援UQ校園團契。有負擔者請與翁浩傳道或張芸蓁姊妹聯絡。',
        'Griffith大學(GU)將在2月21日(週四)舉行校園Market Day，請各堂有負擔的弟兄姐妹來支援GU校園團契。有負擔者請與顏瑞峰傳道或鄭淑玲姊妹聯絡。',
        '各讀經小組將從明天(1月28日)起恢復聚會，請大家關心新人，並帶入小組接受裝備與造就。',
    )
))->add();
(new Slides\Intercession( // 代禱
    $ppt,
    array(
        '為宣教與牧區慶典事工、新朋友加入、聖徒更新服事與培訓代禱。',
        '為教會在2020年達到週六慶典活動至少要有1000人參加聚會代禱。',
        '感謝主，魏趙琪(Sky)、張寒雪(Mindy)夫婦於上週得一子，母子平安。',
    )
))->add();
(new Slides\Dedication( // 上週奉獻
    $ppt,
    '主日敬拜  75；',
    array(
        '感 恩' => '感 恩	李磊全家 50；林毅恩 100',
        '建 堂' => '建 堂	郑博耀 300',
    )
))->add();

(new Slides\WeeklyVerse($ppt, '除了我以外，你不可有別的　神。', '出埃及記 20:3'))->add(); // 金句
(new Slides\Hymn($ppt, 169))->add(); // 唱詩
(new Slides\LordsPrayer($ppt))->add(); // 主禱文
(new Slides\Ending($ppt))->add(); // 結束

require __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'OHPGen' . DIRECTORY_SEPARATOR . 'footer.php';