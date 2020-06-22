<?php

include_once '../src/dataBase/InsertData.php';
include_once '../src/dataBase/XmlFeedModel.php';

use PHPUnit\Framework\TestCase;

class InsertDataTest extends TestCase
{
    public function testAddElementToInsert()
    {
        $objectInsert = new InsertData();
        $objectXmlFeed = new XmlFeedModel();
        $actualResult = $objectInsert->addElementToInsert($objectXmlFeed);
        $needle = ['', '', '', '', '', '', '', '', '', ''];
        $this->assertEquals($needle, $actualResult);
    }
}