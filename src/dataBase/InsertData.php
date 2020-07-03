<?php


class InsertData
{
    protected $query;

    /**
     * @return void
     */
    public function multiInsert(Database $connect, array $collectionObjects): void
    {
        $this->query = "INSERT INTO `xmlfeed`(link, title, description, pubDate) VALUES ";

        $preparedRowsForInsertion = [];
        foreach ($collectionObjects as $value) {
            if ($value === XmlFeedModel::class) {
                $preparedRowsForInsertion[] = '(' . '\'' . $value->getLink() . '\'' . ', ' .
                    '\'' . $value->getTitle() . '\'' . ', ' .
                    '\'' . $value->getDescrition() . '\'' . ', ' .
                    '\'' . $value->getPubDate() . '\'' . ', '
                    . ')';
            } else {
                echo 'Invalid value or object!';
            }
        }

        $this->query .= implode(', ', $preparedRowsForInsertion);
        $connect->connect()->exec($this->query);
    }
}