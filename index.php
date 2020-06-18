<?php
include_once './src/parserPages/PageParser.php';
include_once './src/dataBase/XmlFeedModel.php';
include_once './src/dataBase/Database.php';
include_once './src/dataBase/InsertData.php';


$currentPage = new PageParser();
$xmlModel = new XmlFeedModel();
$connectDB = new Database();
$insertData = new InsertData();

$sourceLink = 'https://usn.ubuntu.com/usn/rss.xml';
$dataAfterParsingPage = $currentPage->getValuesInItem($xmlModel, $sourceLink);
$insertData->multiInsertInDatabase($connectDB, $dataAfterParsingPage);
