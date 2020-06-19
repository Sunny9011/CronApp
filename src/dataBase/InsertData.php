<?php


class InsertData
{
    protected $query;

    public function multiInsertIntoDatabase(Database $connect, array $dataAfterParsingPage): void
    {
        $this->query = "INSERT INTO `xmlfeed`(link, title, description, pubDate) VALUES ";

        $preparedRowsForInsertion = [];
        foreach ($dataAfterParsingPage as $value) {
            $gettingProperties = $this->addElementToInsert($value);
            $preparedRowsForInsertion[] = '(' . implode(', ', $gettingProperties) . ')';
        }

        $this->query .= implode(', ', $preparedRowsForInsertion);
        $connect->connect()->exec($this->query);
    }

    public function addElementToInsert(XmlFeedModel $objectParsedPage): array
    {
        $propertiesObjectXml = [];
        $propertiesObjectXml[] = '\'' . $objectParsedPage->getLink() . '\'';
        $propertiesObjectXml[] = '\'' . $objectParsedPage->getTitle() . '\'';
        $propertiesObjectXml[] = '\'' . $objectParsedPage->getDescription() . '\'';
        $propertiesObjectXml[] = '\'' . $objectParsedPage->getPubDate() . '\'';

        return $propertiesObjectXml;
    }
}