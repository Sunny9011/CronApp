<?php

class Parser
{
    public $data = [];
    public $mysql;

    public function parserPage(string $link)
    {
        $xml = simplexml_load_file($link);
        foreach ($xml->xpath('//item') as $item) {

            $this->data[] = $item->link;
            $this->data[] = $item->title;
            $this->data[] = $item->description;
            $this->data[] = $item->pubDate;
        }
    }

    public function getParsPage()
    {
        return $this->data;
    }

    public function connectDataBase()
    {
        try {
            $user = 'root';
            $pass = '';
            $dbh = new PDO('mysql:host=localhost;dbname=ubuntu', $user, $pass);
            foreach($dbh->query('SELECT * from ubuntu') as $row) {
                print_r($row);
            }
            $dbh = null;
        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    }
}

$someOneLink = 'https://usn.ubuntu.com/rss.xml';
$someOneLink1 = 'https://threatpost.com/category/web-security/feed/';
$test = new Parser();
$test->parserPage($someOneLink1);
var_dump($test->connectDataBase());