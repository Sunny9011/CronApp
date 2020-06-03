<?php
include_once './parserPages/Ubuntu.php';
include_once './parserPages/ThreatPost.php';
include_once './dataBase/XmlFeedModel.php';
include_once './dataBase/DataBase.php';


$objectUbuntu = new Ubuntu();
$objectThreatPost = new ThreatPost();
$xmlModel = new XmlFeedModel();
$connectDB = new DataBase();


$objectUbuntu->pageParsing($xmlModel, $connectDB);
$objectThreatPost->pageParsing($xmlModel, $connectDB);