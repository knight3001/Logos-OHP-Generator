<?php

/**
 * Created by IntelliJ IDEA.
 * User: Rick Lan
 * Date: 11/06/17
 * Time: 20:00
 */
namespace Core\Slides;

class Tithing extends Main
{
    protected function addStartSlide(): void
    {
        $slide = $this->newSlide();
        $sideTitle = $this->sideTitleShape();
        $slide->addShape($sideTitle);
        $sideTitle->createTextRun('奉獻');

        $zhSubtitle = $this->zhSubTitleShape();
        $slide->addShape($zhSubtitle);
        $zhSubtitle->createTextRun('有關於十分之一奉獻的經文');

        $enSubtitle = $this->enSubTitleShape();
        $slide->addShape($enSubtitle);
        $enSubtitle->createTextRun('瑪拉基書 Malachi');

        $content = $this->contentShape();
        $slide->addShape($content);
        $content->createTextRun("3:10 萬軍之耶和華說、你們要將當納的十分之一全然送入倉庫、使我家有糧、以此試試我、是否為你們敞開天上的窗戶、傾福與你們、甚至無處可容。\n\n3:10 Let your tenths come into the store-house so that there may be food in my house, and put me to the test by doing so, says the Lord of armies, and see if I do not make the windows of heaven open and send down such a blessing on you that there is no room for it.");
    }

    protected function addMainSlide(): void
    {
        (new Hymn($this->ppt, '386_將最好獻主.ini', true))->add();
    }

    protected function addEndSlide(): void
    {
        // dont do anything
    }
}