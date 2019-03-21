<?php
/**
 * Created by IntelliJ IDEA.
 * User: Rick Lan
 * Date: 12/06/17
 * Time: 22:40
 */

namespace Core\Slides;

use PhpOffice\PhpPresentation\Style\Alignment;

class Baptized extends Main
{
    protected $names;
    public function __construct($ppt, $names = array())
    {
        $this->names = $names;
        parent::__construct($ppt);
    }

    protected function addStartSlide(): void
    {
        $this->sectionStartSlide('大主日', '[大主日 - Begin]');
        $this->sectionStartSlide('大主日', '聖洗禮');
    }

    protected function addMainSlide(): void
    {
        $slide = $this->newSlide();
        $sideTitle = $this->sideTitleShape();
        $slide->addShape($sideTitle);
        $sideTitle->createTextRun('聖洗禮');

        $zhSubtitle = $this->zhSubTitleShape();
        $slide->addShape($zhSubtitle);
        $zhSubtitle->createTextRun('將受洗的弟兄姐妹如下：');

        $content = $this->contentShape();
        $content
            ->getActiveParagraph()
            ->getFont()
            ->setSize(36);
        $content
            ->getActiveParagraph()
            ->getAlignment()
            ->setHorizontal(Alignment::HORIZONTAL_CENTER)
            ->setVertical(Alignment::VERTICAL_CENTER);
        $slide->addShape($content);
        $content->createTextRun(implode('、', $this->names));

        $this->newSlide();
        (new Hymn($this->ppt, 79))->add();
    }

    protected function addEndSlide(): void
    {
        $this->sectionStartSlide('大主日', '[大主日 - End]');
    }
}