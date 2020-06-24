<?php

include_once '../dataBase/InsertData.php';
include_once '../dataBase/XmlFeedModel.php';

use PHPUnit\Framework\TestCase;

class InsertDataTest extends TestCase
{
    public function testAddElementToInsert()
    {
        $objectInsert = new InsertData();
        $objectXmlFeed = new XmlFeedModel();
        $actualResult = $objectInsert->addElementToInsert($objectXmlFeed);
        $objectXmlFeed->setTitle(5);
        $objectXmlFeed->setPubDate(10);
        $objectXmlFeed->setLink(8);
        $objectXmlFeed->setDescription(20);
        $fakeObjectXml = $objectInsert->addElementToInsert($objectXmlFeed);
        $needle = ['', '', '', '', '', '', '', '', '', ''];
        $invalidValues = [3,5,7,10,30];
        $fakeData = [5,10,8,20];
        $this->assertEquals($needle, $actualResult);
        $this->assertNotEquals($invalidValues, $actualResult);
        $this->assertNotEquals($fakeData, $fakeObjectXml);
    }
}