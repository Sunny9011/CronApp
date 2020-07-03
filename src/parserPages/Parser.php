<?php

abstract class Parser
{
    /**
     * @return array
     */
    abstract public function getValuesInItem(string $link): ?array;
}