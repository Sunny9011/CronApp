<?php

class NewRecord
{
    public function addNewRecordInDB($parser, $dataBase)
    {
        foreach ($parser as $item) {
            $sql = "INSERT INTO ubuntu (link, title, description, pubDate)
    VALUES ( '" . $item ['link'] . "', '" . $item ['title'] . "', '" . $item ['description'] . "', '" . $item ['pubDate'] . "')";
            $request = $dataBase->connect()->exec($sql);
        }
    }
}
