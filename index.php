<?php
include_once 'Ubuntu.php';
include_once 'XmlFeedModel.php';


$objectUbuntu = new Ubuntu();
$xmlModel = new XmlFeedModel();


$dataAfterParser = $objectUbuntu->getParserUbuntu($xmlModel);