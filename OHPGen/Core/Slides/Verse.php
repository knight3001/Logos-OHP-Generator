<?php

/**
 * Created by IntelliJ IDEA.
 * User: Rick Lan
 * Date: 11/06/17
 * Time: 20:00
 */
namespace Core\Slides;

use Core\VerseTable;

class Verse extends Main
{
    private $book;
    private $chapter;
    private $start;
    private $end;

    private $enContents;
    private $zhContents;


    public function __construct(&$ppt, $book, $chapter, $start, $end = null)
    {
        $this->book = $book;
        $this->chapter = $chapter;

        if ($end === null) {
            $end = $start;
        }

        $max = max($start, $end);
        $min = min($start, $end);

        $this->start = $min;
        $this->end = $max;
        $this->loadContents();
        parent::__construct($ppt);
    }

    public static function LoadByBookName(&$ppt, $bookName, $chapter, $start, $end = null)
    {
        $book = null;
        if (trim($end) === '') {
            $end = null;
        }
        foreach (VerseTable::$table as $shortName => $details) {
            if ($details[2] === $bookName) {
                $book = $shortName;
            }
        }
        if ($book === null) {
            return null;
        }
        return new static($ppt, $book, $chapter, $start, $end);
    }

    protected function loadContents(): void
    {
        $idxEnContents = array();
        $idxZhContents = array();
        $enContents = explode("\n", file_get_contents(__DIR__ . '/../Assets/books/' . VerseTable::$table[$this->book][2] . '-NIV.txt'));
        $zhContents = explode("\n", file_get_contents(__DIR__ . '/../Assets/books/' . VerseTable::$table[$this->book][2] . '-CUV.txt_utf8.txt'));
        $lines = count($enContents);

        for ($i = 0; $i < $lines; $i++) {
            $aEnContent = explode(' ', $enContents[$i]);
            $idx = $aEnContent[0];
            $aZhContent = explode(' ', $zhContents[$i]);

            unset($aEnContent[0], $aZhContent[0]);
            $trimmedEnContent = trim(implode(' ', $aEnContent));
            $trimmedZhContent = trim(implode(' ', $aZhContent));
            $idxEnContents[$idx] = $trimmedEnContent;
            $idxZhContents[$idx] = $trimmedZhContent;
        }

        $end = $this->end ?? $this->start;

        for ($i = $this->start; $i <= $end; $i++) {
            $this->zhContents["$this->chapter:$i"] = $idxZhContents["$this->chapter:$i"];
            $this->enContents["$this->chapter:$i"] = $idxEnContents["$this->chapter:$i"];
        }
    }

    protected function getTitleString($en = false): string
    {
        $enFormat = '%1$s %2$s:%3$s' . ($this->end !== null? '-%4$s' : '');
        $zhFormat = '%1$s%2$s章%3$s' . ($this->end !== null? '-%4$s' : '') . '節';
        return sprintf(
            $en? $enFormat : $zhFormat,
            VerseTable::$table[$this->book][$en? 2 : 0],
            $this->chapter,
            $this->start,
            $this->end ?? null
        );
    }

    protected function addStartSlide(): void
    {
        $this->sectionStartSlide('讀經', $this->getTitleString(false));
    }

    protected function addMainSlide(): void
    {
        $end = $this->end?? $this->start;
        for ($i = $this->start; $i <= $end; $i++) {
            $verse =
                "$this->chapter:$i " . $this->zhContents["$this->chapter:$i"] . "\n" .
                "$this->chapter:$i " . $this->enContents["$this->chapter:$i"];
            $this->addMainSlideCore($verse);
        }
    }

    protected function addMainSlideCore($verse): void
    {
        $slide = $this->newSlide();
        $sideTitle = $this->sideTitleShape();
        $slide->addShape($sideTitle);
        $sideTitle->createTextRun('讀經');

        $zhSubtitle = $this->zhSubTitleShape();
        $slide->addShape($zhSubtitle);
        $zhSubtitle->createTextRun($this->getTitleString());

        $enSubtitle = $this->enSubTitleShape();
        $slide->addShape($enSubtitle);
        $enSubtitle->createTextRun($this->getTitleString(true));

        $content = $this->contentShape();
        $slide->addShape($content);
        $content->createTextRun($verse);
    }
}