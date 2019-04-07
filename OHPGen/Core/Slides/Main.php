<?php
/**
 * Created by IntelliJ IDEA.
 * User: Rick Lan
 * Date: 12/06/17
 * Time: 22:40
 */

namespace Core\Slides;
use PhpOffice\PhpPresentation\Shape\RichText;
use PhpOffice\PhpPresentation\Style\Font;
use PhpOffice\PhpPresentation\AbstractShape;
use PhpOffice\PhpPresentation\Style\Alignment;
use PhpOffice\PhpPresentation\Style\Color;
use PhpOffice\PhpPresentation\Slide;
use PhpOffice\PhpPresentation\Slide\Background\Image;


define('MAIN_TOP_ZH_TITLE_WIDTH', (PPT_WIDTH-BANNER_HEIGHT+3)/2);
define('MAIN_TOP_ZH_TITLE_HEIGHT', 30);
define('MAIN_TOP_ZH_TITLE_X', SIDE_TITLE_WIDTH);
define('MAIN_TOP_ZH_TITLE_Y', BANNER_HEIGHT-3);

define('MAIN_TOP_EN_TITLE_WIDTH', (PPT_WIDTH-BANNER_HEIGHT+3)/2);
define('MAIN_TOP_EN_TITLE_HEIGHT', 30);
define('MAIN_TOP_EN_TITLE_X', SIDE_TITLE_WIDTH+MAIN_TOP_ZH_TITLE_WIDTH);
define('MAIN_TOP_EN_TITLE_Y', BANNER_HEIGHT-3);

define('MAIN_CONTENT_WIDTH', PPT_WIDTH - SIDE_TITLE_WIDTH - 3);
define('MAIN_CONTENT_HEIGHT', PPT_HEIGHT - BANNER_HEIGHT - MAIN_TOP_ZH_TITLE_HEIGHT);
define('MAIN_CONTENT_X', SIDE_TITLE_WIDTH + 3);
define('MAIN_CONTENT_Y', BANNER_HEIGHT + MAIN_TOP_ZH_TITLE_HEIGHT);

define('MAIN_START_CONTENT_WIDTH', PPT_WIDTH - SIDE_TITLE_WIDTH - 3);
define('MAIN_START_CONTENT_HEIGHT', PPT_HEIGHT - BANNER_HEIGHT);
define('MAIN_START_CONTENT_X', SIDE_TITLE_WIDTH + 3);
define('MAIN_START_CONTENT_Y', BANNER_HEIGHT);

define('MAIN_PAGE_WIDTH', PPT_WIDTH/2);
define('MAIN_PAGE_HEIGHT', 20);
define('MAIN_PAGE_X', PPT_WIDTH-MAIN_PAGE_WIDTH);
define('MAIN_PAGE_Y', PPT_HEIGHT-MAIN_PAGE_HEIGHT);

abstract class Main extends Base
{
    /**
     * Subtitle Shape - Chinese
     * @return AbstractShape
     * @throws \Exception
     */
    protected function zhSubTitleShape(): AbstractShape
    {
        $font = new Font();
        $font
            ->setName(FONT_FACE)
            ->setBold(true)
            ->setSize(20)
            ->setColor(new Color(Color::COLOR_YELLOW));

        $shape = new RichText();
        $shape->setWidth(MAIN_TOP_ZH_TITLE_WIDTH);
        $shape->setHeight(MAIN_TOP_ZH_TITLE_HEIGHT);
        $shape->setOffsetX(MAIN_TOP_ZH_TITLE_X);
        $shape->setOffsetY(MAIN_TOP_ZH_TITLE_Y);
        $shape
            ->getActiveParagraph()
            ->getAlignment()
            ->setHorizontal(Alignment::HORIZONTAL_LEFT)
            ->setVertical(Alignment::VERTICAL_CENTER);
        $shape->getActiveParagraph()->setFont($font);
        return $shape;
    }

    /**
     * Subtitle Shape - English
     * @return AbstractShape
     * @throws \Exception
     */
    protected function enSubTitleShape(): AbstractShape
    {
        $font = new Font();
        $font
            ->setName(FONT_FACE)
            ->setBold(true)
            ->setSize(20)
            ->setColor(new Color(Color::COLOR_YELLOW));

        $shape = new RichText();
        $shape->setWidth(MAIN_TOP_EN_TITLE_WIDTH);
        $shape->setHeight(MAIN_TOP_EN_TITLE_HEIGHT);
        $shape->setOffsetX(MAIN_TOP_EN_TITLE_X);
        $shape->setOffsetY(MAIN_TOP_EN_TITLE_Y);
        $shape
            ->getActiveParagraph()
            ->getAlignment()
            ->setHorizontal(Alignment::HORIZONTAL_RIGHT)
            ->setVertical(Alignment::VERTICAL_CENTER);
        $shape->getActiveParagraph()->setFont($font);
        return $shape;
    }

    /**
     * Content Shape
     * @return AbstractShape
     * @throws \Exception
     */
    protected function contentShape(): AbstractShape
    {
        $font = new Font();
        $font
            ->setName('Microsoft YaHei')
            ->setBold(true)
            ->setSize(27)
            ->setColor(new Color(Color::COLOR_YELLOW));

        $shape = new RichText();
        $shape->setWidth(MAIN_CONTENT_WIDTH);
        $shape->setHeight(MAIN_CONTENT_HEIGHT);
        $shape->setOffsetX(MAIN_CONTENT_X);
        $shape->setOffsetY(MAIN_CONTENT_Y);
        $shape
            ->getActiveParagraph()
            ->getAlignment()
            ->setHorizontal(Alignment::HORIZONTAL_LEFT)
            ->setVertical(Alignment::VERTICAL_TOP);
        $shape->getActiveParagraph()->setFont($font);
        return $shape;
    }

    /**
     * Start Content Shape
     * @return AbstractShape
     * @throws \Exception
     */
    protected function startContentShape(): AbstractShape
    {
        $font = new Font();
        $font
            ->setName(FONT_FACE)
            ->setBold(true)
            ->setSize(36)
            ->setColor(new Color(Color::COLOR_YELLOW));

        $shape = new RichText();
        $shape->setWidth(MAIN_START_CONTENT_WIDTH);
        $shape->setHeight(MAIN_START_CONTENT_HEIGHT);
        $shape->setOffsetX(MAIN_START_CONTENT_X);
        $shape->setOffsetY(MAIN_START_CONTENT_Y);
        $shape
            ->createParagraph()
            ->getAlignment()
            ->setHorizontal(Alignment::HORIZONTAL_CENTER)
            ->setVertical(Alignment::VERTICAL_CENTER);
        $shape->getActiveParagraph()->setFont($font);
        return $shape;
    }

    /**
     * New Slide
     * @return Slide
     * @throws \Exception
     */
    protected function newSlide(): Slide
    {
        $slide = $this->ppt->createSlide();
        $oBkgImage = new Image();
        if (defined('USE_LOGO') && USE_LOGO) {
            $oBkgImage->setPath(__DIR__ . '/../Assets/verse_background_w_logo.png');
        } else {
            $oBkgImage->setPath(__DIR__ . '/../Assets/verse_background.png');
        }
//        $oBkgImage->setPath(__DIR__ . '/../Assets/verse_background.png');
        $slide->setBackground($oBkgImage);
        return $slide;
    }

    /**
     * @param string $sub
     * @param string $main
     * @param bool $isVisible
     * @throws \Exception
     */
    protected function sectionStartSlide($sub, $main, $isVisible = true): void
    {
        $Slide = $this->newSlide();
        $sideTitle = $this->sideTitleShape();
        $Slide->addShape($sideTitle);
        $sideTitle->createTextRun($sub);

        $content = $this->startContentShape();
        $Slide->addShape($content);
        $content->createTextRun($main);
        $Slide->setIsVisible($isVisible);
    }

    /**
     * @return AbstractShape
     * @throws \Exception
     */
    protected function pageNoShape(): AbstractShape
    {
        $font = new Font();
        $font
            ->setName(FONT_FACE)
            ->setBold(true)
            ->setSize(12)
            ->setColor(new Color(Color::COLOR_YELLOW));

        $shape = new RichText();
        $shape->setWidth(MAIN_PAGE_WIDTH);
        $shape->setHeight(MAIN_PAGE_HEIGHT);
        $shape->setOffsetX(MAIN_PAGE_X);
        $shape->setOffsetY(MAIN_PAGE_Y);
        $shape
            ->getActiveParagraph()
            ->getAlignment()
            ->setHorizontal(Alignment::HORIZONTAL_RIGHT)
            ->setVertical(Alignment::VERTICAL_CENTER);
        $shape->getActiveParagraph()->setFont($font);
        return $shape;
    }
}