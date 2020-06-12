<?php

abstract class Parser
{
    abstract public function parsingCurrentPage(XmlFeedModel $objectXmlFeedModel, string $link): array;
}