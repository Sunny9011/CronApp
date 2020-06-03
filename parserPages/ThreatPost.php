<?php

include_once 'Parser.php';

class ThreatPost extends Parser
{
    public $link = 'https://threatpost.com/category/web-security/feed/';
    public $tags = ['link', 'description', 'title', 'pubDate'];

    public function pageParsing(XmlFeedModel $objectXmlFeedModel, DataBase $connectToDB):void
    {
        $xml = simplexml_load_file($this->link);
        foreach ($xml->xpath('//item') as $item) {
            $objectXmlFeedModel->setLink($item->link->__toString());
            $objectXmlFeedModel->setDescription($item->description->__toString()) ;
            $objectXmlFeedModel->setPubDate($item->pubDate->__toString());
            $objectXmlFeedModel->setTitle($item->title->__toString());
            $objectXmlFeedModel->writingParsingPageToDatabase($connectToDB);
        }
    }
}