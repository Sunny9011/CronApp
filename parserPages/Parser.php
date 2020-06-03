<?php

abstract class Parser
{

    abstract public function pageParsing(XmlFeedModel $objectXmlFeedModel, DataBase $connect);

}