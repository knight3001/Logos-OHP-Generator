<?php
/**
 * Created by IntelliJ IDEA.
 * User: Rick Lan
 * Date: 13/06/17
 * Time: 22:02
 */

namespace Core\Slides;

use PhpOffice\PhpPresentation\Shape\RichText;

class LordsPrayer extends Main
{
    protected function addStartSlide(): void
    {
        // dont do anything
    }

    protected function addMainSlide(): void
    {
        $Slide = $this->newSlide();
        $sideTitle = $this->sideTitleShape();
        $Slide->addShape($sideTitle);
        $sideTitle->createTextRun('主禱文');

        $zhTitle = $this->zhSubTitleShape();
        $Slide->addShape($zhTitle);
        $zhTitle->createTextRun('主禱文');

        $enTitle = $this->enSubTitleShape();
        $Slide->addShape($enTitle);
        $enTitle->createTextRun('The Lord\'s Prayer');

        /** @var RichText $content */
        $zhContent = $this->contentShape();
        $zhContent->setHeight($zhContent->getHeight()/2);
        $zhContent->getActiveParagraph()->getFont()->setSize(25);

        $Slide->addShape($zhContent);
        $zhText = '我們在天上的父，願人都尊你的名為聖，願你的國降臨，願你的旨意行在地上，如同行在天上，我們日用的飲食，今日賜給我們，免我們的債，如同我們免了人的債，不叫我們遇見試探，救我們脫離兇惡，因為國度、權柄、榮耀全是你的，直到永遠，阿們！';
        $zhContent->createTextRun($zhText);

        $enContent = $this->contentShape();
        $enContent->setHeight($enContent->getHeight()/2);
        $enContent->setOffsetY($enContent->getOffsetY()+($zhContent->getHeight()));
        $enContent->getActiveParagraph()->getFont()->setSize(22)->setName('Calibri (Body)');

        $Slide->addShape($enContent);
        $enText = 'Our Father in heaven, hallowed be your name, your kingdom come, your will be done on earth as it is in heaven. Give us today our daily bread. Forgive our sins as we forgive those who sins against us. And lead us not into temptation, but deliver us from evil. For Thine is the kingdom, and the power, and the glory, forever. Amen.';
        $enContent->createTextRun($enText);
    }

}