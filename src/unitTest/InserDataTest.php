<?php

include_once '../dataBase/InsertData.php';
include_once '../dataBase/XmlFeedModel.php';

use PHPUnit\Framework\TestCase;

class InsertDataTest extends TestCase
{
    protected $objectInsert;
    protected $objectXmlFeed;

    public function setUp()
    {
        parent::setUp();
        $this->objectInsert = new InsertData();
        $this->objectXmlFeed = new XmlFeedModel();
    }

    public function testAddElementToInsert()
    {
        $this->objectXmlFeed->setTitle(5);
        $this->objectXmlFeed->setPubDate(10);
        $this->objectXmlFeed->setLink(8);
        $this->objectXmlFeed->setDescription(20);
        $actualNumbers = $this->objectInsert->addElementToInsert($this->objectXmlFeed);
        $fakeNumbers = [5,10,8,20];
        $this->assertNotEquals($fakeNumbers, $actualNumbers,'array must have strings not numbers');
    }
    public function testPropertyObject()
    {
        $this->objectXmlFeed->setTitle('Title');
        $this->objectXmlFeed->setPubDate('date');
        $this->objectXmlFeed->setLink('https://usn.ubuntu.com/usn/rss.xml');
        $this->objectXmlFeed->setDescription('Some description');
        $this->assertNotEmpty($this->objectXmlFeed->getTitle(),'Property is empty');
        $actualString = $this->objectInsert->addElementToInsert($this->objectXmlFeed);
        $fakeStrings = ['https://usn.ubuntu.com/usn/rss.xml', 'Title', 'Some description', 'date'];
        $this->assertEquals($fakeStrings, $actualString, 'Data not equals expected');
    }

    public function tearDown()
    {
        parent::tearDown();
    }
}