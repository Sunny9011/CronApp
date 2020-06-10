<?php

include_once 'Parser.php';

class ThreatPost extends Parser
{

    public function parsingPageAndWritingDatabase(XmlFeedModel $objectXmlFeedModel, DataBase $connectToDB, string $link): void
    {
        $xml = simplexml_load_file($link);
        foreach ($xml->xpath('//item') as $item) {
            $objectXmlFeedModel->setLink($item->link->__toString());
            $objectXmlFeedModel->setDescription($item->description->__toString()) ;
            $objectXmlFeedModel->setPubDate($item->pubDate->__toString());
            $objectXmlFeedModel->setTitle($item->title->__toString());
            $objectXmlFeedModel->writingParsingPageToDatabase($connectToDB);
        }
    }
}