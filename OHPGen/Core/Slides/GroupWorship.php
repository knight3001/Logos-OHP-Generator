<?php
/**
 * Created by IntelliJ IDEA.
 * User: Rick Lan
 * Date: 12/06/17
 * Time: 22:40
 */

namespace Core\Slides;

class GroupWorship extends Main
{
    /** @var  string */
    protected $groupName;
    /** @var  string */
    protected $songName;
    /** @var  string */
    protected $lyric;

    public function __construct(&$ppt, $groupName = null, $songName = null, $lyric = null)
    {
        $this->groupName = $groupName;
        $this->songName = $songName;
        $this->lyric = $lyric;
        Main::__construct($ppt);
    }

    protected function addStartSlide(): void
    {
        $this->sectionStartSlide('獻詩', $this->groupName?? '[PlaceHolder]');
    }

    protected function addMainSlide(): void
    {
        $slide = $this->newSlide();
        $sideTitle = $this->sideTitleShape();
        $slide->addShape($sideTitle);
        $sideTitle->createTextRun('獻詩');

        $zhSubtitle = $this->zhSubTitleShape();
        $slide->addShape($zhSubtitle);
        $zhSubtitle->createTextRun($this->songName?? '[PlaceHolder]');

        $content = $this->contentShape();
        $slide->addShape($content);
        $content->createTextRun($this->lyric?? '[PlaceHolder]');
    }
}