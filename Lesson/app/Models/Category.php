<?php

namespace App\Models;


class Category 
{
    private $newsCategory = [
        1 => ['title' => 'Buisness'],
        2 => ['title' => 'IT'],
        3 => ['title' => 'Medicine'],
        4 => ['title' => 'Politics'],
    ];

    public function getNewsCategory ()
    {
    
        // foreach($this->newsCategory as $value) {
        
        //     $result[] = $value['title'];
        // }

        // return $result;
        return $this->newsCategory;
    }
}
