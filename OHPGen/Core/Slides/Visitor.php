<?php
/**
 * Created by IntelliJ IDEA.
 * User: Rick Lan
 * Date: 12/06/17
 * Time: 22:40
 */

namespace Core\Slides;

use PhpOffice\PhpPresentation\Style\Alignment;
use PhpOffice\PhpPresentation\Style\Color;
use PhpOffice\PhpPresentation\Style\Font;

class Visitor extends Main
{
    /** @var int  */
    protected $visitors = 3;

    protected function addStartSlide(): void
    {
        // dont do anything
    }

    protected function mainSlide(): void
    {
        $font = new Font();
        $font->setName(FONT_FACE);

        $startY = BANNER_HEIGHT;
        $slide = $this->newSlide();
        $shape = $slide->createRichTextShape();
        $shape
            ->setHeight(40)
            ->setWidth(PPT_WIDTH)
            ->setOffsetX(0)
            ->setOffsetY($startY);
        $shape
            ->getActiveParagraph()
            ->setFont($font)
            ->getAlignment()
            ->setHorizontal(Alignment::HORIZONTAL_CENTER)
            ->setVertical(Alignment::VERTICAL_CENTER);
        $shapeText = $shape->createTextRun('我們誠心歡迎初次參加本教會崇拜的朋友');
        $shapeText
            ->getFont()
            ->setBold(true)
            ->setSize(27)
            ->setColor(new Color(Color::COLOR_YELLOW));

        $startY += 50;
        $shape = $slide->createDrawingShape();
        $imgData = getimagesize(__DIR__ . '/../Assets' . DIRECTORY_SEPARATOR . 'placeholder.jpg');
        $shape
            ->setPath(__DIR__ . '/../Assets' . DIRECTORY_SEPARATOR . 'placeholder.jpg')
            ->setWidth($imgData[0]*0.65)
            ->setHeight($imgData[1]*0.65)
            ->setOffsetX((PPT_WIDTH-$imgData[0]*0.65)/2)
            ->setOffsetY($startY);

        $startY += $imgData[1]*0.65 + 5;
        $shape = $slide->createRichTextShape();
        $shape
            ->setHeight(40)
            ->setWidth(PPT_WIDTH)
            ->setOffsetX(0)
            ->setOffsetY($startY);
        $shape
            ->getActiveParagraph()
            ->setFont($font)
            ->getAlignment()
            ->setHorizontal(Alignment::HORIZONTAL_CENTER)
            ->setVertical(Alignment::VERTICAL_CENTER);
        $shapeText = $shape->createTextRun('『Name』');
        $shapeText
            ->getFont()
            ->setBold(true)
            ->setSize(28)
            ->setColor(new Color(Color::COLOR_YELLOW));
    }

    protected function addMainSlide(): void
    {
        for ($i = 0; $i < $this->visitors; $i++) {
            $this->mainSlide();
        }
    }
}