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

        $objectXmlFeed->setTitle(5);
        $objectXmlFeed->setPubDate(10);
        $objectXmlFeed->setLink(8);
        $objectXmlFeed->setDescription(20);
        $actualNumbers = $objectInsert->addElementToInsert($objectXmlFeed);
        $fakeNumbers = [5,10,8,20];
        $this->assertNotEquals($fakeNumbers, $actualNumbers,'array must have strings not numbers');

        $objectXmlFeed->setTitle('Title');
        $objectXmlFeed->setPubDate('date');
        $objectXmlFeed->setLink('https://usn.ubuntu.com/usn/rss.xml');
        $objectXmlFeed->setDescription('Some description');

        $this->assertNotEmpty($objectXmlFeed->getTitle(),'Property is empty');

        $actualString = $objectInsert->addElementToInsert($objectXmlFeed);
        $fakeStrings = ['https://usn.ubuntu.com/usn/rss.xml', 'Title', 'Some description', 'date'];
        $this->assertEquals($fakeStrings, $actualString, 'Data not equals expected');
    }
}