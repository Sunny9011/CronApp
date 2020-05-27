<?php
include_once 'Ubuntu.php';
include_once 'XmlFeedModel.php';
include_once 'DataBase.php';

$objectUbuntu = new Ubuntu();
$new = new XmlFeedModel();
$objectDataBase = new DataBase();

$link = 'https://threatpost.com/category/web-security/feed/';
$arrayTag = ['link', 'description', 'title', 'pubDate'];
$dataAfterParser = $objectUbuntu->getParserUbuntu($link, $arrayTag);
$new->addNewRecordInDB($dataAfterParser, $objectDataBase);