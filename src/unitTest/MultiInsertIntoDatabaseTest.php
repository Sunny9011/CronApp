<?php

include_once '../dataBase/XmlFeedModel.php';
include_once '../dataBase/Database.php';

use PHPUnit\Framework\TestCase;


class MultiInsertIntoDatabaseTest extends TestCase
{
    protected $connectDB;

    public function setUp()
    {
        parent::setUp();
        $this->connectDB = new Database();
    }

    public function testMultiInsertIntoDatabase()
    {



    }
}