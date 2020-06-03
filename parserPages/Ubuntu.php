<?php

include_once 'Parser.php';

class Ubuntu extends Parser
{
    public $link = 'https://usn.ubuntu.com/usn/rss.xml';
    public $tags = ['link', 'description', 'title', 'pubDate'];

    public function pageParsing(XmlFeedModel $objectXmlModel, DataBase $connectToDB): void
    {
        $xml = simplexml_load_file($this->link);
        foreach ($xml->xpath('//item') as $item) {
                $objectXmlModel->setLink($item->link->__toString());
                $objectXmlModel->setDescription($item->description->__toString()) ;
                $objectXmlModel->setPubDate($item->pubDate->__toString());
                $objectXmlModel->setTitle($item->title->__toString());
                $objectXmlModel->saveData($connectToDB);
        }
    }
}