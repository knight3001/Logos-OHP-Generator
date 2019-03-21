<?php
/**
 * Created by IntelliJ IDEA.
 * User: Rick Lan
 * Date: 12/06/17
 * Time: 22:09
 */

namespace Core\Slides;

use PhpOffice\PhpPresentation\AbstractShape;
use PhpOffice\PhpPresentation\PhpPresentation;
use PhpOffice\PhpPresentation\Shape\RichText;
use PhpOffice\PhpPresentation\Slide;
use PhpOffice\PhpPresentation\Style\Alignment;
use PhpOffice\PhpPresentation\Style\Color;
use PhpOffice\PhpPresentation\Style\Font;

define('PPT_WIDTH', 960);
define('PPT_HEIGHT', 540);

define('BANNER_WIDTH', 960);
define('BANNER_HEIGHT', 70);
define('BANNER_X', 0);
define('BANNER_Y', 0);

define('SIDE_TITLE_WIDTH', 70);
define('SIDE_TITLE_HEIGHT', PPT_HEIGHT - BANNER_HEIGHT);
define('SIDE_TITLE_X', 0);
define('SIDE_TITLE_Y', BANNER_HEIGHT);

define('FONT_FACE', 'Microsoft YaHei');

abstract class Base
{
    /**
     * @var PhpPresentation
     */
    protected $ppt;

    public function __construct(&$ppt)
    {
        $this->ppt = $ppt;
    }

    abstract protected function newSlide(): Slide;
    abstract protected function addStartSlide(): void;
    abstract protected function addMainSlide(): void;
    protected function addEndSlide(): void
    {
        $this->newSlide();
    }

    public function add(): void
    {
        $this->addStartSlide();
        $this->addMainSlide();
        $this->addEndSlide();
    }

    /**
     * @return AbstractShape
     */
    protected function sideTitleShape(): AbstractShape
    {
        try {
            $font = new Font();
            $font
                ->setName(FONT_FACE)
                ->setBold(true)
                ->setSize(30)
                ->setColor(new Color(Color::COLOR_YELLOW));

            $shape = new RichText();
            $shape->setWidth(SIDE_TITLE_WIDTH);
            $shape->setHeight(SIDE_TITLE_HEIGHT);
            $shape->setOffsetX(SIDE_TITLE_X);
            $shape->setOffsetY(SIDE_TITLE_Y);
            $shape
                ->getActiveParagraph()
                ->getAlignment()
                ->setHorizontal(Alignment::HORIZONTAL_CENTER)
                ->setVertical(Alignment::VERTICAL_CENTER);
            $shape->getActiveParagraph()->setFont($font);
            return $shape;
        } catch (\Exception $e) {
            echo $e->getMessage();
        }
    }
}