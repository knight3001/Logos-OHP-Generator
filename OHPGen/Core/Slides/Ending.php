<?php
/**
 * Created by IntelliJ IDEA.
 * User: Rick Lan
 * Date: 12/06/17
 * Time: 22:40
 */

namespace Core\Slides;


class Ending extends Main
{
    protected function addStartSlide(): void
    {
        // dont do anything
    }

    protected function addMainSlide(): void
    {
        $this->sectionStartSlide('頌讚', '哈 利 路 亞');
        $this->sectionStartSlide('祝禱', '阿 們 頌');
        $this->sectionStartSlide('殿樂', '默 禱');
    }
}