<?php
/**
 * Created by IntelliJ IDEA.
 * User: Rick Lan
 * Date: 13/06/17
 * Time: 22:02
 */

namespace Core\Slides;

use PhpOffice\PhpPresentation\Style\Alignment;
use PhpOffice\PhpPresentation\Style\Border;
use PhpOffice\PhpPresentation\Style\Color;
use PhpOffice\PhpPresentation\Style\Font;

class Dedication extends Main
{

    /** @var  string */
    protected $lastWeek;
    /** @var  array */
    protected $dedications;

    public function __construct(&$ppt, $lastWeek, $dedications)
    {
        $this->lastWeek = $lastWeek;
        $this->dedications = $dedications;
        Main::__construct($ppt);
    }

    protected function addStartSlide(): void
    {
    }

    protected function addMainSlide(): void
    {
        $Slide = $this->newSlide();
        $sideTitle = $this->sideTitleShape();
        $Slide->addShape($sideTitle);
        $sideTitle->createTextRun('上週奉獻');

        $tableShape = $Slide
            ->createTableShape(12)
            ->setHeight(MAIN_CONTENT_HEIGHT)
            ->setWidth(MAIN_CONTENT_WIDTH-5)
            ->setOffsetX(MAIN_CONTENT_X)
            ->setOffsetY(BANNER_HEIGHT);

        $this->insertLastWeekRow($tableShape->createRow(), $this->lastWeek);
        foreach ($this->dedications as $title => $dedication) {
            $this->insertRow($tableShape->createRow(), $title, $dedication);
        }
    }

    private function getCellFont(): Font
    {
        $font = new Font();
        $font
            ->setName(FONT_FACE)
            ->setBold(true)
            ->setSize(15)
            ->setColor(new Color(Color::COLOR_YELLOW));
        return $font;
    }

    protected function insertLastWeekRow($Row, $content): void
    {
        $content = $this->processContent($content);
        $Cell = $Row->getCell(0)->setColSpan(12);
        $Cell
            ->getActiveParagraph()
            ->setFont($this->getCellFont())
            ->getAlignment()
            ->setHorizontal(Alignment::HORIZONTAL_LEFT)
            ->setVertical(Alignment::VERTICAL_TOP);

        $this->setCellBorderStyle($Cell);

        $Cell->createTextRun($content);
    }

    private function processContent($content): string
    {
        $content = str_replace('＆', '&', $content);
        $content = str_replace('；', ';', $content);
        $aContent = explode(';', $content);
        foreach ($aContent as $key => $thisContent) {
            $aContent[$key] = trim($thisContent);
        }
        return implode('; ', $aContent);
    }

    protected function insertRow($Row, $title, $content): void
    {
        $title = trim($title);
        $content = $this->processContent($content);
        $content = str_replace('＆', '&', $content);
        $content = str_replace('；', ';', $content);
        $aContent = explode(';', $content);
        foreach ($aContent as $key => $thisContent) {
            $aContent[$key] = trim($thisContent);
        }
        $Cell = $Row->getCell(0);
        $Cell
            ->getActiveParagraph()
            ->setFont($this->getCellFont())
            ->getAlignment()
            ->setHorizontal(Alignment::HORIZONTAL_CENTER)
            ->setVertical(Alignment::VERTICAL_CENTER);

        $this->setCellBorderStyle($Cell);

        $Cell->createTextRun($title);

        // content cell
        $Cell = $Row->getCell(1)->setColSpan(11);
        $Cell
            ->getActiveParagraph()
            ->setFont($this->getCellFont())
            ->getAlignment()
            ->setHorizontal(Alignment::HORIZONTAL_LEFT)
            ->setVertical(Alignment::VERTICAL_TOP);

        $this->setCellBorderStyle($Cell);

        $Cell->createTextRun($content);
    }

    private function setCellBorderStyle($cell): void
    {
        $cell
            ->getBorders()
            ->getTop()
            ->setLineWidth(1)
            ->setLineStyle(Border::LINE_SINGLE)
            ->setColor(new Color(Color::COLOR_YELLOW));
        $cell
            ->getBorders()
            ->getLeft()
            ->setLineWidth(1)
            ->setLineStyle(Border::LINE_SINGLE)
            ->setColor(new Color(Color::COLOR_YELLOW));
        $cell
            ->getBorders()
            ->getBottom()
            ->setLineWidth(1)
            ->setLineStyle(Border::LINE_SINGLE)
            ->setColor(new Color(Color::COLOR_YELLOW));
        $cell
            ->getBorders()
            ->getRight()
            ->setLineWidth(1)
            ->setLineStyle(Border::LINE_SINGLE)
            ->setColor(new Color(Color::COLOR_YELLOW));
    }
}