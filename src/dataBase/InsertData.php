<?php


class InsertData
{
    protected $query;

    public function multiInsertInDatabase(Database $connect, array $dataAfterParsingPage): void
    {
        $this->query = "INSERT INTO `xmlfeed`(link, title, description, pubDate) VALUES ";

        $array1 = [];
        foreach ($dataAfterParsingPage as $value) {
            $data = $this->addElementToInsert($value);
            $array1[] = '(' . implode(', ', $data) . ')';
        }
        $this->query .= implode(', ', $array1);
        $connect->connect()->exec($this->query);
    }

    public function addElementToInsert(XmlFeedModel $value)
    {
        $array   = [];
        $array[] = '\'' . $value->getLink(). '\'';
        $array[] = '\'' . $value->getTitle(). '\'';
        $array[] = '\'' . $value->getDescription(). '\'';
        $array[] = '\'' . $value->getPubDate(). '\'';

        return $array;
    }
}