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

class Intercession extends Main
{

    /** @var  string[] */
    protected $intersessions;

    public function __construct(&$ppt, $intercessions)
    {
        $this->intersessions = $intercessions;
        Main::__construct($ppt);
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
            ->setSize(24)
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
            ->setHorizontal(Alignment::HORIZONTAL_LEFT)
            ->setVertical(Alignment::VERTICAL_CENTER);
        $shape->getActiveParagraph()->setFont($font);

        return $shape;
    }

    protected function addStartSlide(): void
    {
    }

    protected function addMainSlide(): void
    {
        foreach ($this->intersessions as $key => $intersession) {
            $this->intersessions[$key] = trim($intersession);
        }
        $this->bulletSlide(1, '代禱消息', implode("\n", $this->intersessions));
    }
}