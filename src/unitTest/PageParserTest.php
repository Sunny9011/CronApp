<?php

include_once '../parserPages/PageParser.php';
include_once '../dataBase/XmlFeedModel.php';

use PHPUnit\Framework\TestCase;

class PageParserTest extends TestCase
{
    public function testPageParser()
    {
        $objectPage = new PageParser();
        $sourceLink = 'https://usn.ubuntu.com/usn/rss.xml';
        $this->assertNotEmpty($sourceLink, 'This link empty!');
        $haystack = $objectPage->getValuesInItem($sourceLink);
        $this->assertIsArray($haystack);
        $expected = $haystack[0];
        $this->assertInstanceOf('XmlFeedModel', $expected,
            $message = 'Failed asserting is not an instance of class');
    }
}