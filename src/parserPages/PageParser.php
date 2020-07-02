<?php

include_once 'Parser.php';

class PageParser extends Parser
{
    /**
     * @return array
     */
    public function getValuesInItem(string $link): ?array
    {
        $collection = [];
        @$xml = simplexml_load_file($link);
        if ($xml) {
            foreach ($xml->xpath('//item') as $item) {
                $objectXmlModel = new XmlFeedModel();
                $objectXmlModel->setLink($item->link->__toString());
                $objectXmlModel->setDescription($item->description->__toString());
                $objectXmlModel->setPubDate($item->pubDate->__toString());
                $objectXmlModel->setTitle($item->title->__toString());
                $collection []  = $objectXmlModel;
            }
            return $collection;
        }
        return null;
    }
}