<?php

include_once 'Parser.php';

class Ubuntu extends Parser
{
    public function getParserUbuntu(string $link, array $tags): array
    {
        $arrayTags = [];
        $xml = simplexml_load_file($link);
        foreach ($xml->xpath('//item') as $item) {
            foreach ($tags as $tag) {

                $arrayTags ["$tag"] = $item->$tag->__toString();

            $this->data[] = $arrayTags;
            $arrayTags = [];
            }
        }
        return $this->data;
    }

}