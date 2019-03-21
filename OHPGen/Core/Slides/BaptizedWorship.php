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

class BaptizedWorship extends Base
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
        $oBkgImage->setPath(__DIR__ . '/../Assets/Chroma1080.png');
        $slide->setBackground($oBkgImage);
        return $slide;
    }

    protected function addStartSlide(): void
    {
        //
    }

    protected function lyricShape(): AbstractShape
    {
        $font = new Font();
        $font
            ->setName(FONT_FACE)
            ->setBold(true)
            ->setSize(54)
            ->setColor(new Color(Color::COLOR_WHITE));

        $shape = new RichText();
        $shape->setWidth(1280);
        $shape->setHeight(54);
        $shape->setOffsetX(0);
        $shape->setOffsetY(720-105);
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
        $this->addMainSlideCore('【 ' . $this->name . ' 】'); // first page for song title
        foreach ($this->lyrics as $lyric) {
            $texts = explode("\\n", $lyric);
            foreach ($texts as $text) {
                $text = trim($text);
                if (!empty($text)) {
                    $this->addMainSlideCore($text);
                }
            }
        }
    }

    protected function addMainSlideCore($lyric): void
    {
        $slide = $this->newSlide();
        $shape = $this->lyricShape();
        $slide->addShape($shape);
        $shape->createTextRun(implode("\n", explode("\\n", $lyric)));
    }
}