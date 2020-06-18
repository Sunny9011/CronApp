<?php

abstract class Parser
{
    abstract public function getValuesInItem(XmlFeedModel $objectXmlFeedModel, string $link): array;
}