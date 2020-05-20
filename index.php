<?php
include_once 'Parser.php';
include_once 'NewRecord.php';
include_once 'DataBase.php';

$objectParser = new Parser();
$new = new NewRecord();
$objectDataBase = new DataBase();

$link = 'https://threatpost.com/category/web-security/feed/';
$dataAfterParser = $objectParser->parserPage($link);
$new->addNewRecordInDB($dataAfterParser, $objectDataBase);