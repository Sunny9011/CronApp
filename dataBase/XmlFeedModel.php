<?php

include_once 'DataBase.php';

class XmlFeedModel
{
    protected $link;
    protected $title;
    protected $description;
    protected $pubDate;
    protected $query;

    public function saveData($connect)
    {
            $this->query = "INSERT INTO xmlfeed (link, title, description, pubDate)
    VALUES ( '" . $this->link . "', '" . $this->title . "', '" . $this->description . "', '" . $this->pubDate . "')";
        $connect->connect()->exec($this->query);
    }

     public function setLink($value)
    {
        $this->link = $value;
    }

    public function setTitle($value)
    {
        $this->title = $value;
    }

    public function setDescription($value)
    {
        $this->description = $value;
    }

    public function setPubDate($value)
    {
        $this->pubDate = $value;
    }
}
