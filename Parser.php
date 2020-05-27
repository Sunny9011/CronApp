<?php

abstract class Parser
{
    public $data = [];

    public function parserPage(string $link): array
    {
        return $this->data;
    }
}