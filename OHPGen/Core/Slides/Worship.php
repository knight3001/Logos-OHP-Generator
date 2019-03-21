<?php
/**
 * Created by IntelliJ IDEA.
 * User: Rick Lan
 * Date: 12/06/17
 * Time: 22:40
 */

namespace Core\Slides;


use PhpOffice\PhpPresentation\AbstractShape;
use PhpOffice\PhpPresentation\Shape\RichText;
use PhpOffice\PhpPresentation\Slide;
use PhpOffice\PhpPresentation\Slide\Background\Image;
use PhpOffice\PhpPresentation\Style\Alignment;
use PhpOffice\PhpPresentation\Style\Color;
use PhpOffice\PhpPresentation\Style\Font;

class Worship extends Base
{
    /** @var  int */
    protected $songFile;

    /** @var  int */
    protected $name;
    /** @var  int */
    protected $count;
    /** @var  string[] */
    protected $lyrics;

    public function __construct(&$ppt, $songFile)
    {
        $this->songFile = $songFile;
        $this->loadContents();
        parent::__construct($ppt);
    }

    protected function loadContents(): void
    {
        if (!file_exists(__DIR__ . '/../Assets/worship/' . $this->songFile)) {
            throw new \Exception($this->songFile . ' is not found.');
        }
        $fileContent = parse_ini_file(__DIR__ . '/../Assets/worship/' . $this->songFile, true);
        $this->name = $fileContent['conf']['name'];
        $this->count = $fileContent['conf']['count'];
        $this->lyrics = array();
        for ($i = 0; $i < $this->count; $i++) {
            $this->lyrics[] = $fileContent['lyric'][$i];
        }
    }

    protected function newSlide(): Slide
    {
        $slide = $this->ppt->createSlide();
        $oBkgImage = new Image();
        if (defined('USE_LOGO') && USE_LOGO) {
            $oBkgImage->setPath(__DIR__ . '/../Assets/worship_background_w_logo.png');
        } else {
            $oBkgImage->setPath(__DIR__ . '/../Assets/worship_background.jpg');
        }
//        $oBkgImage->setPath(__DIR__ . '/../Assets/worship_background.jpg');
        $slide->setBackground($oBkgImage);
        return $slide;
    }

    protected function addStartSlide(): void
    {
        // dont do anything
    }

    protected function sideTitleShape(): AbstractShape
    {
        /** @var RichText $Shape */
        $Shape = parent::sideTitleShape();
        $Shape->setHeight(PPT_HEIGHT-BANNER_HEIGHT);
        $Shape->setOffsetY(BANNER_HEIGHT);
        $Shape->getActiveParagraph()->getFont()->setColor(new Color(Color::COLOR_BLACK));
        return $Shape;
    }

    protected function lyricShape(): AbstractShape
    {
        $font = new Font();
        $font
            ->setName(FONT_FACE)
            ->setBold(false)
            ->setSize(38)
            ->setColor(new Color(Color::COLOR_BLACK));

        $shape = new RichText();
        $shape->setWidth(PPT_WIDTH-SIDE_TITLE_WIDTH);
        $shape->setHeight(PPT_HEIGHT-BANNER_HEIGHT);
        $shape->setOffsetX(SIDE_TITLE_WIDTH);
        $shape->setOffsetY(BANNER_HEIGHT);
        $shape
            ->getActiveParagraph()
            ->getAlignment()
            ->setHorizontal(Alignment::HORIZONTAL_CENTER)
            ->setVertical(Alignment::VERTICAL_CENTER);
        $shape->getActiveParagraph()->setFont($font);
        return $shape;
    }

    protected function addMainSlide(): void
    {
        foreach ($this->lyrics as $lyric) {
            $this->addMainSlideCore($lyric);
        }
    }

    protected function addMainSlideCore($lyric): void
    {
        $slide = $this->newSlide();

        $sideTitle = $this->sideTitleShape();
        $slide->addShape($sideTitle);
        $sideTitle->createTextRun($this->name);

        $shape = $this->lyricShape();
        $slide->addShape($shape);
        $shape->createTextRun(implode("\n", explode("\\n", $lyric)));
    }
}