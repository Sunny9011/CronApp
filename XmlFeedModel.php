<?php

class XmlFeedModel
{
    public function addNewRecordInDB(array $parser, DataBase $dataBase): void
    {
        foreach ($parser as $item) {
            $sql = "INSERT INTO xmlfeed (link, title, description, pubDate)
    VALUES ( '" . $item ['link'] . "', '" . $item ['title'] . "', '" . $item ['description'] . "', '" . $item ['pubDate'] . "')";
            $request = $dataBase->connect()->exec($sql);
        }
    }
}
