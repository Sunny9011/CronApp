<?php

abstract class Parser
{
    public $data = [];

    public function parserPage(): array
    {
        return $this->data;
    }
}