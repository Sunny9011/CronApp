<?php


class InsertData
{
    protected $query;

    public function multiInsertInDatabase(Database $connect, array $dataAfterParsingPage): void
    {
        $this->query = "INSERT INTO `xmlfeed`(link, title, description, pubDate) VALUES ";

        foreach ($dataAfterParsingPage as $i => $value) {
            $this->query .= "('{$value->getLink()}', ";
            $this->query .= "'{$value->getTitle()}', ";
            $this->query .= "'{$value->getDescription()}', ";
            $this->query .= "'{$value->getPubDate()}')";

            if ($i + 1 < count($dataAfterParsingPage)) {
                $this->query .= ", ";
            }
        }

        $connect->connect()->exec($this->query);
    }
}