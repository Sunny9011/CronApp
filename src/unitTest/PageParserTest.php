<?php

include_once '../parserPages/PageParser.php';
include_once '../dataBase/XmlFeedModel.php';

use PHPUnit\Framework\TestCase;

class PageParserTest extends TestCase
{

    protected $objectPage;

    public function setUp()
    {
        parent::setUp();
        $this->objectPage = new PageParser();
    }

    public function testPageParser()
    {
        $sourceLink = 'https://usn.ubuntu.com/usn/rss.xml';
        $haystack = $this->objectPage->getValuesInItem($sourceLink);
        $this->assertIsArray($haystack);
        $actual = $haystack[0];
        $this->assertInstanceOf('XmlFeedModel', $actual, 'Failed asserting is not an instance of class');
    }

    public function testXmlFile()
    {
        $wrongLink = 'https://usn.ubuntu.com';
        $response = $this->objectPage->getValuesInItem($wrongLink);
        $actual = 'This link cannot be parsing';
        $this->assertEquals($actual, $response);
    }

    public function tearDown()
    {
        parent::tearDown();
    }
}