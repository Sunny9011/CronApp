<?php

abstract class Parser
{
    abstract public function parsingPageAndWritingDatabase(XmlFeedModel $objectXmlFeedModel, DataBase $connect, string $link): void;
}