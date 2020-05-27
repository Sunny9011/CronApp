<?php

include_once 'Parser.php';

class Ubuntu extends Parser
{
    public $link = 'https://threatpost.com/category/web-security/feed/';
    public $arrayTag = ['link', 'description', 'title', 'pubDate'];

    public function getParserUbuntu(): array
    {
        $arrayTags = [];
        $xml = simplexml_load_file($this->link);
        foreach ($xml->xpath('//item') as $item) {
            foreach ($this->arrayTag as $tag) {
                $arrayTags ["$tag"] = $item->$tag->__toString();
            }
            $this->data[] = $arrayTags;
            $arrayTags = [];
        }
        return $this->data;
    }

}