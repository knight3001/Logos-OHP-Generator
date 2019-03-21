<?php
/**
 * Created by IntelliJ IDEA.
 * User: Rick Lan
 * Date: 13/06/17
 * Time: 22:02
 */

namespace Core\Slides;


use PhpOffice\PhpPresentation\Shape\RichText;

class ApostlesCreed extends Main
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
        $sideTitle->createTextRun('認信');

        $zhTitle = $this->zhSubTitleShape();
        $Slide->addShape($zhTitle);
        $zhTitle->createTextRun('使徒信經');

        $enTitle = $this->enSubTitleShape();
        $Slide->addShape($enTitle);
        $enTitle->createTextRun('Apostle\'s Creed');

        /** @var RichText $content */
        $zhContent = $this->contentShape();
        $zhContent->setHeight($zhContent->getHeight()/2);
        $zhContent->getActiveParagraph()->getFont()->setSize(22);

        $Slide->addShape($zhContent);
        $zhText = '我信上帝，全能的父，創造天地的主。我信我主耶穌基督，是上帝的獨生子，因聖靈感孕，為童貞女馬利亞所生，在本丟彼拉多手下受難，被釘在十字架上，受死，埋葬，降在陰間，第三天從死裏復活，升天，坐在全能父上帝的右邊，將來必從那裡降臨，審判活人死人。我信聖靈，我信聖而公之教會，我信聖徒相通，我信罪得赦免，我信身體復活，我信永生。阿們！';
        $zhContent->createTextRun($zhText);

        $enContent = $this->contentShape();
        $enContent->setHeight($enContent->getHeight()/2);
        $enContent->setOffsetY($enContent->getOffsetY()+($zhContent->getHeight()));
        $enContent->getActiveParagraph()->getFont()->setSize(16.7)->setName('Calibri (Body)');

        $Slide->addShape($enContent);
        $enText = 'I Believe in God the Father Almighty, Maker of heaven and earth; And in Jesus Christ His only Son our Lord; Who was conceived by the Holy Spirit, born of the Virgin Mary, suffered under Pontius Pilate, was crucified, dead, and buried; He descended into hell, the third day He rose again from the dead; he ascended into heaven, and sit on the right hand of God the Father Almighty, from thence He shall come to judge the living and the dead. I believe in the Holy Spirit; the holy Christian church; The communion of saints; the forgiveness of sins; the resurrection of the body and the life everlasting. Amen.';
        $enContent->createTextRun($enText);
    }
}