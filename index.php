<?php
include_once 'Ubuntu.php';
include_once 'XmlFeedModel.php';
include_once 'DataBase.php';

$objectUbuntu = new Ubuntu();
$new = new XmlFeedModel();
$objectDataBase = new DataBase();

$dataAfterParser = $objectUbuntu->getParserUbuntu();
$new->addNewRecordInDB($dataAfterParser, $objectDataBase);