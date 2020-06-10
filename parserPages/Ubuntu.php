<?php

include_once 'Parser.php';

class Ubuntu extends Parser
{
    public function parsingPageAndWritingDatabase(XmlFeedModel $objectXmlModel, DataBase $connectToDB, string $link): void
    {
        $xml = simplexml_load_file($link);
        foreach ($xml->xpath('//item') as $item) {
            var_dump($objectXmlModel->setLink($item->link->__toString()));die();
                $objectXmlModel->setLink($item->link->__toString());
                $objectXmlModel->setDescription($item->description->__toString()) ;
                $objectXmlModel->setPubDate($item->pubDate->__toString());
                $objectXmlModel->setTitle($item->title->__toString());
                $objectXmlModel->writingParsingPageToDatabase($connectToDB);
        }
    }
}