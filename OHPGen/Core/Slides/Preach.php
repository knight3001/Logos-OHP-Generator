<?php
/**
 * Created by IntelliJ IDEA.
 * User: Rick Lan
 * Date: 13/06/17
 * Time: 22:02
 */

namespace Core\Slides;


use PhpOffice\PhpPresentation\AbstractShape;
use PhpOffice\PhpPresentation\Shape\RichText;
use PhpOffice\PhpPresentation\Style\Alignment;
use PhpOffice\PhpPresentation\Style\Bullet;
use PhpOffice\PhpPresentation\Style\Color;
use PhpOffice\PhpPresentation\Style\Font;

class Preach extends Main
{
    /** @var  string */
    protected $title;
    /** @var  string */
    protected $preacher;
	/** @var  array */
	protected $intro;
    /** @var  array */
    protected $outlines;
    /** @var  array */
    protected $conclusions;

    /** @var  int */
    protected $count = 1;

    public function __construct(&$ppt, $title, $preacher, $intro, $outlines, $conclusions)
    {
        $this->title = $title;
        $this->preacher = $preacher;
		$this->intro = $intro;
        $this->outlines = $outlines;
        $this->conclusions = $conclusions;
        Main::__construct($ppt);
    }

    protected function outlinesSlide(): void
    {
        $this->bulletSlide(1, '證道大綱', implode("\n", array_keys($this->outlines)));
    }

    protected function bulletSlide($startIdx, $subTitle, $content): void
    {
        $Slide = $this->newSlide();
        $sideTitle = $this->sideTitleShape();
        $Slide->addShape($sideTitle);
        $sideTitle->createTextRun($subTitle);

        $Bullets = $this->bulletParagraphShape($startIdx);
        $Slide->addShape($Bullets);
        $Bullets->createTextRun($content);
    }

    protected function bulletParagraphShape($startIdx): AbstractShape
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
            ->getActiveParagraph()
            ->getBulletStyle()
            ->setBulletType(Bullet::TYPE_NUMERIC)
            ->setBulletNumericStartAt($startIdx)
            ->setBulletColor(new Color(Color::COLOR_YELLOW));
        $shape->getActiveParagraph()->setFont($font);

        $shape
            ->getActiveParagraph()
            ->getAlignment()
            ->setHorizontal(Alignment::HORIZONTAL_CENTER)
            ->setVertical(Alignment::VERTICAL_CENTER);
        $shape->getActiveParagraph()->setFont($font);

        return $shape;
    }

    protected function openingSlide(): void
    {
        // preach sub title
        $Slide = $this->newSlide();
        $sideTitle = $this->sideTitleShape();
        $Slide->addShape($sideTitle);
        $sideTitle->createTextRun('證道大綱');

        // preach title
        $content = $this->startContentShape();
        $Slide->addShape($content);
        $content->createTextRun('「' . trim((string)$this->title) . '」');

        // preacher name
        $content->createParagraph()
            ->getAlignment()
            ->setHorizontal(Alignment::HORIZONTAL_RIGHT);
        $content->getActiveParagraph()->getFont()->setSize(27);
        $content->createTextRun("\n- " . trim((string)$this->preacher));
    }

    protected function addStartSlide(): void
    {
        $this->openingSlide();
        $this->bulletSlide(1, '證道大綱', implode("\n", array_keys($this->outlines)));
		if (count($this->intro)) {
			foreach ($this->intro as $Verse) {
                $Verse->add();
			}
		}
    }

    protected function addMainSlide(): void
    {
        /**
             * @var  string $outlineTitle
             * @var  Verse[] $Verses
             */
        foreach ($this->outlines as $outlineTitle => $Verses) {
            $this->bulletSlide($this->count, '證道大綱', $outlineTitle);
            foreach ($Verses as $Verse) {
                $Verse->add();
            }
            $this->count++;
        }
    }

    protected function addEndSlide(): void
    {
        $this->bulletSlide(1, '證道大綱', implode("\n", array_keys($this->outlines)));
        if (count($this->conclusions)) {
            foreach ($this->conclusions as $Verse) {
                $Verse->add();
            }
        }
    }
}