<?php

class Category
{
    private $categoriesTable;
    public function __construct(\Youtech\DatabaseTable
    $categoriesTable)
    {
        $this->categoriesTable = $categoriesTable;
    }
}
