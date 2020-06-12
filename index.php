<?php
include_once './parserPages/PageParser.php';
include_once './dataBase/XmlFeedModel.php';
include_once './dataBase/DataBase.php';


$currentPage = new PageParser();
$xmlModel = new XmlFeedModel();
$connectDB = new DataBase();

$sourceLink = 'https://usn.ubuntu.com/usn/rss.xml';
$dataAfterParsingPage = $currentPage->parsingCurrentPage($xmlModel, $sourceLink);
$xmlModel->writingParsingPageToDatabase($connectDB, $dataAfterParsingPage);