<?php
/**
 * Created by IntelliJ IDEA.
 * User: Rick Lan
 * Date: 12/06/17
 * Time: 22:40
 */

namespace Core\Slides;

class Opening extends Main
{
    protected function addStartSlide(): void
    {
        // dont do anything
    }

    protected function addMainSlide(): void
    {
        $this->centerImageSlide('sign_mark.11.15.png');
        $this->centerImageSlide('sign_mobile_off.png');
        $this->centerImageSlide('sign_quiet.png');
        $this->sectionStartSlide('序樂', '會 眾 默 禱');
        $this->centerImageSlide('sign_quiet_praying.png');
    }

    protected function centerImageSlide($image): void
    {
        $slide = $this->newSlide();
        $shape = $slide->createDrawingShape();
        $imgData = getimagesize(__DIR__ . '/../Assets' . DIRECTORY_SEPARATOR . $image);
        $shape
            ->setPath(__DIR__ . '/../Assets' . DIRECTORY_SEPARATOR . $image)
            ->setWidth($imgData[0]*0.7)
            ->setHeight($imgData[1]*0.7)
            ->setOffsetX((PPT_WIDTH-$imgData[0]*0.7)/2)
            ->setOffsetY(BANNER_HEIGHT+(((PPT_HEIGHT-BANNER_HEIGHT)-$imgData[1]*0.7)/2));
    }
}