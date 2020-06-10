<?php
include_once './parserPages/Ubuntu.php';
include_once './parserPages/ThreatPost.php';
include_once './dataBase/XmlFeedModel.php';
include_once './dataBase/DataBase.php';


$objectUbuntu = new Ubuntu();
$objectThreatPost = new ThreatPost();
$xmlModel = new XmlFeedModel();
$connectDB = new DataBase();

$sourceLinkUbuntu = 'https://usn.ubuntu.com/usn/rss.xml';
$sourceLinkThreat = 'https://threatpost.com/category/web-security/feed/';
$objectUbuntu->parsingPageAndWritingDatabase($xmlModel, $connectDB, $sourceLinkUbuntu);
$objectThreatPost->parsingPageAndWritingDatabase($xmlModel, $connectDB, $sourceLinkThreat);