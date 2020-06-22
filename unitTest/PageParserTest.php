<?php

include_once '../src/parserPages/PageParser.php';
include_once '../src/dataBase/XmlFeedModel.php';

use PHPUnit\Framework\TestCase;

class PageParserTest extends TestCase
{
    public function testPageParser()
    {
        $objectPage = new PageParser();
        $sourceLink = 'https://usn.ubuntu.com/usn/rss.xml';
        $haystack = $objectPage->getValuesInItem($sourceLink);
        $this->assertIsArray($haystack);
        $this->assertEquals(10, count($haystack));
        $expected = $haystack[0];
        $this->assertInstanceOf('XmlFeedModel', $expected,
            $message = 'Failed asserting is not an instance of class');
    }
}