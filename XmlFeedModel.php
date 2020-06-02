<?php

include_once 'DataBase.php';

class XmlFeedModel
{
    protected $link;
    protected $title;
    protected $description;
    protected $pubDate;
    protected $query;
    protected $dataBaseConnect;

    public function __construct()
    {
        $this->dataBaseConnect = new DataBase();
    }

    public function generateQuery()
    {
            $this->query = "INSERT INTO xmlfeed (link, title, description, pubDate)
    VALUES ( '" . $this->getLink() . "', '" . $this->getTitle() . "', '" . $this->getDescription() . "', '" . $this->getPubDate() . "')";

    }

    public function saveData()
    {
        $this->generateQuery();
        $request = $this->dataBaseConnect->connect()->exec($this->query);
        $this->query = '';
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

    public function getLink()
    {
        return $this->link;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function getPubDate()
    {
        return $this->pubDate;
    }

}
