<?php

include_once 'DataBase.php';

class XmlFeedModel
{
    protected $link;
    protected $title;
    protected $description;
    protected $pubDate;
    protected $query;

    public function writingParsingPageToDatabase(DataBase $connect): void
    {
        $this->query = "INSERT INTO xmlfeed (link, title, description, pubDate)
    VALUES ( '" . $this->link . "', '" . $this->title . "', '" . $this->description . "', '" . $this->pubDate . "')";
        $connect->connect()->exec($this->query);
    }

    public function setLink(string $value): string
    {
        return $this->link = $value;
    }

    public function setTitle(string $value): string
    {
        return $this->title = $value;
    }

    public function setDescription(string $value): string
    {
        return $this->description = $value;
    }

    public function setPubDate(string $value): string
    {
        return $this->pubDate = $value;
    }
}
