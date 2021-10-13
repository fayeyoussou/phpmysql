<?php

class Category
{
    private $categoriesTable;
    public function __construct(\Youtech\DatabaseTable
    $categoriesTable)
    {
        $this->categoriesTable = $categoriesTable;
    }
    public function edit() {
        if (isset($_GET['id'])) {
            $category = $this->categoriesTable->findById($_GET['id']);
            }
          
            $title = 'Edit Category';
          
            return ['template' => 'editcategory.html.php',
            'title' => $title,
            'variables' => [
                'category' => $category ?? null
          
              //
              ]
            ];    
    }
}
