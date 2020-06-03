<?php

include_once 'DataBase.php';

class XmlFeedModel
{
    protected $link;
    protected $title;
    protected $description;
    protected $pubDate;
    protected $query;

    public function saveData(DataBase $connect): void
    {
            $this->query = "INSERT INTO xmlfeed (link, title, description, pubDate)
    VALUES ( '" . $this->link . "', '" . $this->title . "', '" . $this->description . "', '" . $this->pubDate . "')";
        $connect->connect()->exec($this->query);
    }

     public function setLink(string $value): string
    {
        $this->link = $value;
    }

    public function setTitle(string $value): string
    {
        $this->title = $value;
    }

    public function setDescription(string $value): string
    {
        $this->description = $value;
    }

    public function setPubDate(string $value): string
    {
        $this->pubDate = $value;
    }
}
