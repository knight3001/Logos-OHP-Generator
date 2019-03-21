<?php
include(__DIR__ . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php');
include(__DIR__ . DIRECTORY_SEPARATOR . 'Core' . DIRECTORY_SEPARATOR . 'Slides' . DIRECTORY_SEPARATOR . 'Base.php');
function autoloader($class)
{
    require $class . ".php";
}
spl_autoload_register('autoloader');


function wordToArrayContent($file) {
    $content = '';
    $zip = zip_open($file);
    if (!$zip || is_numeric($zip)) return false;
    while ($zip_entry = zip_read($zip)) {
        if (zip_entry_open($zip, $zip_entry) === FALSE) continue;
        if (zip_entry_name($zip_entry) !== "word/document.xml") continue;
        $content .= zip_entry_read($zip_entry, zip_entry_filesize($zip_entry));
        zip_entry_close($zip_entry);
    }// end while
    zip_close($zip);
    $content = str_replace('</w:r></w:p></w:tc><w:tc>', " ", $content);
    $content = str_replace('</w:r></w:p>', "\r\n", $content);
    $content = strip_tags($content);

    $aContent = explode("\r\n", $content);
    //$fp = fopen('weeklyReport.txt', 'w');
    //fwrite($fp, $content);
    //fclose($fp);
    //var_dump($aContent);
    return $aContent;
}

function arrayContentToOHPGen($aContent)
{
    $lines = count($aContent);
    $myContent = array();
    $myContent[0]['Beginning'] = '';
    $myContent[8]['Visitor'] = '';
    $myContent[4]['ApostlesCreed'] = '';

    for ($i = 0; $i < $lines; $i++) {
        if ($aContent[$i] === '宣召..司會') {
            //唱詩第112首(主斷開一切鎖鍊)會眾
            $thisContent = $aContent[$i + 1];
            preg_match('/^唱詩第(\d+)首/', $thisContent, $match);
            $myContent[1]['Hymn'] = $match[1];
            $i += 1;
            continue;
        }
        if ($aContent[$i] === '禱告司會') {
            //讀  經(弗 5:15~17、太 11:29)
            $thisContent = $aContent[$i + 1];
            preg_match('/^讀  經\((.*)\)司會/', $thisContent, $match);
            $match[1] = '太7:21~28、太25:19~30、啟20:4~15';
            $aReading = explode('、', $match[1]);
            foreach ($aReading as $reading) {
                $reading = trim($reading);
                preg_match('/(\d+):(\d+)~(\d+)/', $reading, $thisMatch);
                $book = '';
                $chapter = '';
                $start = '';
                $end = '';
                if (count($thisMatch) === 4) {
                    $book = trim(str_replace($thisMatch[1] . ':' . $thisMatch[2] . '~' . $thisMatch[3], '', $reading));
                    $chapter = $thisMatch[1];
                    $start = $thisMatch[2];
                    $end = $thisMatch[3];
                } else {
                    preg_match('/(\d+):(\d+)/', $reading, $thisMatch);
                    if (count($thisMatch) === 3) {
                        $book = trim(str_replace($thisMatch[1] . ':' . $thisMatch[2], '', $reading));
                        $chapter = $thisMatch[1];
                        $start = $thisMatch[2];
                        $end = null;
                    }
                }
                $myContent[2]['Verse'][] = array($book, $chapter, $start, $end);
            }
            $i += 1;
            //唱  詩第175首(給我穿上能力)會眾
            $thisContent = $aContent[$i + 1];
            preg_match('/^唱  詩第(\d+)首/', $thisContent, $match);
            $myContent[3]['Hymn'] = $match[1];
            $i += 1;
            continue;
        }
        if (substr_count($aContent[$i], '獻    詩') > 0) {
            //獻    詩腓利
            $thisContent = $aContent[$i];
            preg_match('/^獻    詩(.*)/', $thisContent, $match);
            $myContent[5]['GroupWorship'] = $match[1];
            continue;
        }
        if (substr_count($aContent[$i], '證    道') > 0) {
            //證    道「門徒要學習」. 康世興長老
            $thisContent = $aContent[$i];
            preg_match('/^證    道「(.*)」. (.*)/', $thisContent, $match);
            $myContent[6]['Preach']['title'] = $match[1];
            $myContent[6]['Preach']['preacher'] = $match[2];
            continue;
        }
        if (substr_count($aContent[$i], '奉獻報告') > 0) {
            $thisContent = $aContent[$i];
            //奉獻報告第386首(將最好獻主)陳玲慧執事
            preg_match('/^奉獻報告第(\d+)首/', $thisContent, $match);
            $myContent[7]['Tithing'] = array(
                'extract' => $match[1],
                'original' => $thisContent
            );
            $i += 1;
            //唱  詩第275首(我跟隨主)會眾
            $thisContent = $aContent[$i];
            preg_match('/^唱  詩第(\d+)首/', $thisContent, $match);
            $myContent[13]['Hymn'] = $match[1];
            continue;
        }
        if ($aContent[$i] === '信息大綱：') {
            //門徒沒有學習–會成蠢徒
            //門徒敷衍學習–常裝糊塗
            //門徒跟著學習–才是學徒. 雅各得賜福-以掃被棄絕
            //4. 4. 直接教訓當遵行
            //2017年教會主題：「門徒、學徒、使徒(二)」
            $j = $i + 1;
            while (substr_count($aContent[$j], '4. 4. ') === 0) {
                $myContent[6]['Preach']['index'][] = $aContent[$j];
                $j++;
            }
            $i = $j;
            continue;
        }
        if (substr_count($aContent[$i], '◎本週金句') > 0) {
            $thisContent = $aContent[$i];
            //◎本週金句:『人不要誇口說驕傲的話，也不要出狂妄的言語；因耶和華是大有智識的神，人的行為被他衡量。』
            //撒母耳記上 2:3
            //◎讀經小組:
            preg_match('/^◎本週金句:『(.*)』$/', $thisContent, $match);
            $myContent[12]['WeeklyVerse'] = array(
                'extract' => $match[1],
                'book' => $aContent[$i + 1],
                'original' => $thisContent
            );
            $i += 1;
            continue;
        }
        if ($aContent[$i] === '◎ 教會消息與代禱 ◎') {
            $j = $i + 1;
            while ($aContent[$j] !== '代禱消息：') {
                $myContent[9]['Report'][] = $aContent[$j];
                $j++;
            }
            $j += 1;
            while ($aContent[$j] !== '◎上週聚會人數:') {
                $myContent[10]['Intercession'][] = $aContent[$j];
                $j++;
            }
            $i = $j;
            continue;
        }
        if ($aContent[$i] === '◎上週奉獻：') {
            $j = $i + 1;
            $myContent[11] = array();
            $myContent[11]['Dedication'] = array();
            $myContent[11]['Dedication']['LastWeek'] = '';
            $myContent[11]['Dedication']['OneTenth'] = '';
            $myContent[11]['Dedication']['ThanksGiving'] = '';
            $myContent[11]['Dedication']['Building'] = '';
            $myContent[11]['Dedication']['XiuanJiao'] = '';
            while (substr_count($aContent[$j], '什 一 ') === 0) {
                $myContent[11]['Dedication']['LastWeek'] .= $aContent[$j];
                $j++;
            }
            while (substr_count($aContent[$j], '感 恩 ') === 0) {
                $myContent[11]['Dedication']['OneTenth'] .= trim(str_replace('什 一', '', $aContent[$j]));
                $j++;
            }
            while (substr_count($aContent[$j], '建 堂 ') === 0) {
                $myContent[11]['Dedication']['ThanksGiving'] .= trim(str_replace('感 恩', '', $aContent[$j]));
                $j++;
            }
            while (substr_count($aContent[$j], '宣 教 ') === 0) {
                $myContent[11]['Dedication']['Building'] .= trim(str_replace('建 堂', '', $aContent[$j]));
                $j++;
            }
            while (substr_count($aContent[$j], '◎本週讀經：') === 0) {
                $myContent[11]['Dedication']['XiuanJiao'] .= trim(str_replace('宣 教', '', $aContent[$j]));
                $j++;
            }
            $i = $j;
            continue;
        }
    }
    $myContent[count($myContent)]['LordsPrayer'] = '';
    $myContent[count($myContent)]['Ending'] = '';
    ksort($myContent);
    return $myContent;
}

$OHPGenArray = arrayContentToOHPGen(wordToArrayContent('weeklyReport.docx'));

$ppt = new \PhpOffice\PhpPresentation\PhpPresentation();
$ppt->getLayout()->setDocumentLayout(\PhpOffice\PhpPresentation\DocumentLayout::LAYOUT_SCREEN_16X9, true);
$ppt->removeSlideByIndex(0);

foreach ($OHPGenArray as $key => $slideData) {
    foreach ($slideData as $slide => $data) {
        $className = '　\Core\Slides\\' . $slide;
        if ($slide === 'Opening') {
            new $className($ppt);
        } else if ($slide === 'Hymn') {
            new $className($ppt, $data);
        } else if ($slide === 'Verse') {
            foreach ($data as $verse) {
                new $className($ppt, $verse[0], $verse[1], $verse[2], $verse[3]);
            }
        } else if ($slide === 'GroupWorship') {
            new $className($ppt, $data);
        } else if ($slide === 'Preach') {
            $aOutline = array();
            foreach ($data['index'] as $outline) {
                $aOutline[$outline] = array();
            }
            new $className($ppt, $data['title'], $data['preacher'], $aOutline);
        }
    }
}


$oWriterPPTX = \PhpOffice\PhpPresentation\IOFactory::createWriter($ppt, 'PowerPoint2007');
$oWriterPPTX->save("test.pptx");
