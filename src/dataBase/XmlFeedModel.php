<?php

include_once 'Database.php';

class XmlFeedModel
{
    protected $link;
    protected $title;
    protected $description;
    protected $pubDate;

    public function getLink(): string
    {
        return $this->link;
    }

    public function setLink(string $value): void
    {
        $this->link = $value;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle(string $value): void
    {
        $this->title = $value;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function setDescription(string $value): void
    {
        $this->description = $value;
    }

    public function getPubDate(): string
    {
        return $this->pubDate;
    }

    public function setPubDate(string $value): void
    {
        $this->pubDate = $value;
    }
}
