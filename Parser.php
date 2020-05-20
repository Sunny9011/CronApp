<?php

class Parser
{
    public $data = [];

    public function parserPage(string $link)
    {
        $tags = [];
        $xml = simplexml_load_file($link);
        foreach ($xml->xpath('//item') as $item) {
            $tags ['link'] = $item->link->__toString();
            $tags ['title'] = $item->title->__toString();
            if (is_object($item->description)) {
                $tags ['description'] = $item->description->__toString();
            } else {
                $tags ['description'] = $item->description;
            }
            $tags ['pubDate'] = $item->pubDate->__toString();

            $this->data[] = $tags;
            $tags = [];
        }
        return $this->data;
    }
}