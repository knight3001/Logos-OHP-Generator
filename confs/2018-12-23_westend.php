<?php
define('USE_LOGO', true);
require __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'OHPGen' . DIRECTORY_SEPARATOR . 'header.php';
use \Core\Slides;

////// 早禱
(new Slides\Worship($ppt, '04_我們呼求.ini'))->add();
////
////// pw
(new Slides\Worship($ppt, '07_耶和華行了大事.ini'))->add();
(new Slides\Worship($ppt, '05_獻上感恩祭.ini'))->add();
(new Slides\Worship($ppt, '06_君王就在這裡.ini'))->add();

// 主日
(new Slides\Opening($ppt))->add(); // 關手機
(new Slides\Hymn($ppt, 170))->add(); // 唱詩
(new Slides\Verse($ppt, '書', 1, 1, 6))->add(); // 讀經
(new Slides\Hymn($ppt, 275))->add(); // 唱詩
(new Slides\ApostlesCreed($ppt))->add(); // 認信
(new Slides\GroupWorship($ppt, '聯合詩班'))->add(); // 獻詩
(new Slides\Preach( // 講道
    $ppt,
    '從幫手到担重任',
    '林欣燕長老',
    array(
        new Slides\Verse($ppt, '書', 1, 1, 6), // 讀經
    ), // 序言
    array(
        '當幫手時的約書亞-謙卑跟隨-"跟"出來的' => array(
            new Slides\Verse($ppt, '出', 24, 12, 13),
            new Slides\Verse($ppt, '申', 1, 38),
        ),
        '做學徒時的約書亞-飽經磨練-"磨"出來的' => array(
            new Slides\Verse($ppt, '出', 32, 17, 18),
            new Slides\Verse($ppt, '出', 33, 11),
            new Slides\Verse($ppt, '詩', 66, 10),
        ),
        '担重任時的約書亞-敬畏服從-"服"出來的' => array(
            new Slides\Verse($ppt, '腓', 2, 13, 14),
            new Slides\Verse($ppt, '詩', 86, 11),
            new Slides\Verse($ppt, '書', 1, 1, 3),
        ),
    ),
    array(
        new Slides\Verse($ppt, '書', 24, 15),
    )
))->add();
(new Slides\Tithing($ppt))->add(); // 奉獻
(new Slides\Visitor($ppt))->add(); // 新朋友
(new Slides\Report(
    $ppt,
    array(
        '我們誠心歡迎初次參加本教會敬拜的朋友。請留下姓名、地址、讓我們關心您，並邀請您參加各團契讀經小組、禱告會。',
        '上週一(12月 17日)受洗肢體：曹陽，請為他身心靈成長、蒙恩一生堅定跟隨主代禱。感謝主，今年共90位接受聖洗禮，將一切榮耀歸給主!',
        '2019年教會年度主題:「宣教、植堂」，主題經文:使徒行傳1章8節、使徒行傳16章3~9節。',
        '2019年1月6日將有聖洗禮，目前已報名者:劉鳳清、楊念希(小兒洗)、楊銘希(小兒洗) 、穆菲、Alvin Mu(小兒洗)，願意受洗歸入主名下者，請向陳牧師報名。每週主日（除了每個月第2個主日以外）早上9點在副堂教室，陳牧師將為即將受洗或希望對福音有更多認識新朋友開談道班，歡迎參加。',
        '教會將舉辦聖樂詩歌比賽，請各牧區團契組隊練習，相關訊息請參閱佈告欄。',
        '今年聖誕節晚會將於明天(12月24日) 晚上7:30在母堂舉行，節目內容有牧師短講、詩歌讚美、聯合清唱劇及抽獎活動等，會後有茶點的分享(各團契準備約50元的茶點分享)，也請同工們在明天下午5:30以前到教會，另外，本主日(23/12) 下午1:30將舉行聖誕晚會最後一次彩排，請所有參與服事的弟兄姊妹務必參加，鼓勵大家在聖誕佳節每人都作宣教士，請大家邀請新人參加聖誕晚會，並為此聖工代禱。',
        '教會將於下週一 (12月31日)晚上10:00舉行跨年禱告會，請大家一起來數算主的恩典，為今年獻上感恩也為明年仰望主引導，新的一年得勝有餘。未來三個星期的週二及週四的禱告會與週六牧區慶典活動的調整如下：',
        '新的一年又即將開始了，教會推行一年讀完一遍聖經(依照週報所列進度)，完成者即贈送一本啟導本聖經和獎狀，立志者請弟兄姊妹們向各團契輔導領取2019年空白立約書、讀經作業規定與讀經進度表，並向各團契輔導報名並簽立約書。另外，請各團契輔導將已經完成或即將完成者的名單及讀經作業儘快交給陳師母。',
        '請大家注意，當開車來母堂，車速務必在10km/h以內，並以車頭朝外的方式停車，同時留意小孩安全(請家長要特別看顧小孩)。',
    )
))->add();
(new Slides\Intercession( // 代禱
    $ppt,
    array(
        '為宣教與牧區慶典事工、新朋友加入、聖徒更新服事與培訓代禱。',
        '為返鄉弟兄姊妹學業、事業、家庭及一生走在主蒙福之路代禱。',
        '劉自強(顧錦花姊妹的先生)已於上週六辭世，求主安慰家屬，以及料理後事的一切事宜，有主的平安代禱。',
        '感謝主，胡劭威、陳宜貝夫婦於上週三得一女，母女平安。',
    )
))->add();
(new Slides\Dedication( // 上週奉獻
    $ppt,
    '主日敬拜  77；主日學  0；',
    array(
        '什 一' => '李磊全家160；康世兴200；马榕蔚50',
        '購地' => '李磊全家160；阎书憧5',
    )
))->add();

(new Slides\WeeklyVerse($ppt, '敬畏耶和華心存謙卑，就得富有，尊榮，生命為賞賜。', '箴言 22:4'))->add(); // 金句
(new Slides\Hymn($ppt, 407))->add(); // 唱詩
(new Slides\LordsPrayer($ppt))->add(); // 主禱文
(new Slides\Ending($ppt))->add(); // 結束

require __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'OHPGen' . DIRECTORY_SEPARATOR . 'footer.php';