<?php

/**
 * Created by IntelliJ IDEA.
 * User: Rick Lan
 * Date: 11/06/17
 * Time: 19:54
 */
namespace Core\Slides;

use PhpOffice\PhpPresentation\AbstractShape;
use PhpOffice\PhpPresentation\Shape\RichText;
use PhpOffice\PhpPresentation\Style\Alignment;
use PhpOffice\PhpPresentation\Style\Color;
use PhpOffice\PhpPresentation\Style\Font;

class Hymn extends Main
{
    /** @var  string */
    protected $songFile;
    /** @var  int */
    protected $id;
    /** @var  string */
    protected $name;
    /** @var  int */
    protected $count;
    /** @var  string[] */
    protected $lyrics;

    protected $currentPage = 1;

    protected $noOpening;


    public function __construct(&$ppt, $songNo, $noOpening = false)
    {
        $songNo = str_pad($songNo, 3, '0', STR_PAD_LEFT);
        $result = glob(HYMN_DIR . "/{$songNo}_*.ini");
        if ($result) {
            $this->songFile = $result[0];
            $this->noOpening = $noOpening;
            $this->loadContents();
            Main::__construct($ppt);
        } else {
            throw new \Exception($songNo . ' is not found.');
//            trigger_error('Unable to find Hymn ' . $songNo . ' (' . HYMN_DIR . "/{$songNo}_*.ini" . ')', E_USER_WARNING);
        }
    }
    protected function loadContents(): void
    {
        $fileContent = parse_ini_file($this->songFile, true);
        $this->id = $fileContent['conf']['id'];
        $this->name = $fileContent['conf']['name'];
        $this->count = $fileContent['conf']['count'];
        $this->lyrics = array();
        for ($i = 0; $i < $this->count; $i++) {
            $this->lyrics[] = $fileContent[$i];
        }
    }

    protected function addStartSlide(): void
    {
        if (!$this->noOpening) {
            $this->sectionStartSlide('唱詩', sprintf("紅 色 詩 歌 本\n\n第 %1\$s 首\n\n%2\$s", $this->id, $this->name));
        }
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
        $sideTitle->createTextRun('唱詩');

        $topTitle = $this->zhSubTitleShape();
        $slide->addShape($topTitle);
        $topTitle->createTextRun($this->id . ' ' . $this->name);

        if (count($lyric) === 1) {
            $shape = $this->oneRowShape();
            $slide->addShape($shape);
            $shape->createTextRun(implode("\n", explode("\\n", current($lyric))));
        } else {
            if (isset($lyric['verse'])) {
                $verse = $this->verseShape();
                $slide->addShape($verse);
                $verse->createTextRun(implode("\n", explode("\\n", $lyric['verse'])));
            }
            if (isset($lyric['chorus'])) {
                $chorus = $this->chorusShape();
                $slide->addShape($chorus);
                $chorus->createTextRun(implode("\n", explode("\\n", $lyric['chorus'])));

            }
        }
        $page = $this->pageNoShape();
        $slide->addShape($page);
        $page->createTextRun($this->currentPage . '/' . count($this->lyrics));
        $this->currentPage++;
    }

    protected function oneRowShape(): AbstractShape
    {
        $font = new Font();
        $font
            ->setName(FONT_FACE)
            ->setBold(true)
            ->setSize(30)
            ->setColor(new Color(Color::COLOR_YELLOW));

        $shape = new RichText();
        $shape->setWidth(MAIN_CONTENT_WIDTH);
        $shape->setHeight(MAIN_CONTENT_HEIGHT);
        $shape->setOffsetX(MAIN_CONTENT_X);
        $shape->setOffsetY(MAIN_CONTENT_Y);
        $shape
            ->getActiveParagraph()
            ->getAlignment()
            ->setHorizontal(Alignment::HORIZONTAL_CENTER)
            ->setVertical(Alignment::VERTICAL_CENTER);
        $shape->getActiveParagraph()->setFont($font);
        return $shape;
    }

    protected function verseShape(): AbstractShape
    {
        $font = new Font();
        $font
            ->setName(FONT_FACE)
            ->setBold(true)
            ->setSize(30)
            ->setColor(new Color(Color::COLOR_YELLOW));

        $shape = new RichText();
        $shape->setWidth(MAIN_CONTENT_WIDTH);
        $shape->setHeight(MAIN_CONTENT_HEIGHT/2);
        $shape->setOffsetX(MAIN_CONTENT_X);
        $shape->setOffsetY(MAIN_CONTENT_Y);
        $shape
            ->getActiveParagraph()
            ->getAlignment()
            ->setHorizontal(Alignment::HORIZONTAL_CENTER)
            ->setVertical(Alignment::VERTICAL_TOP);
        $shape->getActiveParagraph()->setFont($font);
        return $shape;
    }

    protected function chorusShape(): AbstractShape
    {
        $font = new Font();
        $font
            ->setName(FONT_FACE)
            ->setBold(true)
            ->setSize(30)
            ->setColor(new Color(Color::COLOR_YELLOW));

        $shape = new RichText();
        $shape->setWidth(MAIN_CONTENT_WIDTH);
        $shape->setHeight(MAIN_CONTENT_HEIGHT/2);
        $shape->setOffsetX(MAIN_CONTENT_X);
        $shape->setOffsetY(MAIN_CONTENT_Y+(MAIN_CONTENT_HEIGHT/2));
        $shape
            ->getActiveParagraph()
            ->getAlignment()
            ->setHorizontal(Alignment::HORIZONTAL_CENTER)
            ->setVertical(Alignment::VERTICAL_TOP);
        $shape->getActiveParagraph()->setFont($font);
        return $shape;
    }
}