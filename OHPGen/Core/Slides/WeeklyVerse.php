<?php

/**
 * Created by IntelliJ IDEA.
 * User: Rick Lan
 * Date: 11/06/17
 * Time: 20:00
 */
namespace Core\Slides;

use PhpOffice\PhpPresentation\AbstractShape;
use PhpOffice\PhpPresentation\Shape\RichText;
use PhpOffice\PhpPresentation\Style\Alignment;
use PhpOffice\PhpPresentation\Style\Color;
use PhpOffice\PhpPresentation\Style\Font;

class WeeklyVerse extends Main
{
    /** @var  string */
    protected $verse;
    /** @var  string */
    protected $book;
    public function __construct(&$ppt, $verse, $book)
    {
        $this->verse = $verse;
        $this->book = $book;
        Main::__construct($ppt);
    }

    protected function addStartSlide(): void
    {
        // do nothing
    }

    protected function addMainSlide(): void
    {
        $Slide = $this->newSlide();
        $sideTitle = $this->sideTitleShape();
        $Slide->addShape($sideTitle);
        $sideTitle->createTextRun('本周金句');

        $content = $this->verseShape();
        $Slide->addShape($content);
        $content->createTextRun('『' . $this->verse . '』');

        $bookShape = $this->bookShape();
        $Slide->addShape($bookShape);
        $bookShape->createTextRun($this->book);
    }

    protected function verseShape(): AbstractShape
    {
        try {
            $font = new Font();
            $font
                ->setName(FONT_FACE)
                ->setBold(true)
                ->setSize(36)
                ->setColor(new Color(Color::COLOR_YELLOW));

            $shape = new RichText();
            $shape->setWidth(MAIN_CONTENT_WIDTH);
            $shape->setHeight(MAIN_CONTENT_HEIGHT-150);
            $shape->setOffsetX(MAIN_CONTENT_X);
            $shape->setOffsetY(BANNER_HEIGHT);
            $shape
                ->getActiveParagraph()
                ->getAlignment()
                ->setHorizontal(Alignment::HORIZONTAL_CENTER)
                ->setVertical(Alignment::VERTICAL_BOTTOM);
            $shape->getActiveParagraph()->setFont($font);
            return $shape;
        } catch (\Exception $e) {
            echo $e->getMessage();
        }
    }
    protected function bookShape(): AbstractShape
    {
        try {
            $font = new Font();
            $font
                ->setName(FONT_FACE)
                ->setBold(true)
                ->setSize(24)
                ->setColor(new Color(Color::COLOR_YELLOW));

            $shape = new RichText();
            $shape->setWidth(MAIN_CONTENT_WIDTH);
            $shape->setHeight(150);
            $shape->setOffsetX(MAIN_CONTENT_X);
            $shape->setOffsetY(PPT_HEIGHT-150);
            $shape
                ->getActiveParagraph()
                ->getAlignment()
                ->setHorizontal(Alignment::HORIZONTAL_RIGHT)
                ->setVertical(Alignment::VERTICAL_TOP);
            $shape->getActiveParagraph()->setFont($font);
            return $shape;
        } catch (\Exception $e) {
            echo $e->getMessage();
        }
    }
}