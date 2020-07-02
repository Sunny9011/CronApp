<?php

include_once '../dataBase/XmlFeedModel.php';
include_once '../dataBase/Database.php';

use PHPUnit\Framework\TestCase;


class MultiInsertIntoDatabaseTest extends TestCase
{
    protected $connectDB;
    protected $insertData;
    protected $xmlFeedObject;

    public function setUp()
    {
        parent::setUp();
        $this->connectDB     = new Database();
        $this->insertData    = new InsertData();
        $this->xmlFeedObject = new XmlFeedModel();
    }

    public function testMultiInsertIntoDatabase(): void
    {
        $getRowBD   = 'SELECT title FROM xmlfeed';
        $collection = [];
        $this->xmlFeedObject->setTitle('title');
        $this->xmlFeedObject->setPubDate('date');
        $this->xmlFeedObject->setLink('https://usn.ubuntu.com/usn/rss.xml');
        $this->xmlFeedObject->setDescription('Some description');

        $collection[] = $this->xmlFeedObject->getLink();
        $collection[] = $this->xmlFeedObject->getTitle();
        $collection[] = $this->xmlFeedObject->getDescription();
        $collection[] = $this->xmlFeedObject->getPubDate();

        $this->insertData->multiInsertIntoDatabase($this->connectDB, $collection);
        $expected = $this->connectDB->connect()->exec($getRowBD);
        $this->assertEquals($expected, 'title');
    }
}