<?php


namespace App\CustomClass;

use App\Category;

class CategoryData
{

    private $id;
    private $category_data;

    function __construct($category_id)
    {
        $category = Category::findOrFail($category_id);
        $this->id = $category->id;
        $this->setCategoryData($category);
    }

    /**
     * @return mixed
     */
    public function getCategoryData()
    {
        return $this->category_data;
    }

    /**
     * @param mixed $blog_data
     */
    private function setCategoryData($category_data)
    {
        $this->category_data = $category_data;
    }





}
