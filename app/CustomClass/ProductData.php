<?php


namespace App\CustomClass;


use App\Category;
use App\CategoryProduct;
use App\Product;

class ProductData
{

    private $id;
    private $product_data;

    function __construct($product_id) {
        $product=Product::findOrFail($product_id);
        $this->id=$product->id;
        $this->setProductData($product);
    }

    /**
     * @return mixed
     */
    public function getProductData()
    {
        $this->product_data['photo_url']=Path::$domain_url.'/upload/product/'.$this->product_data['photo'];

        $products_id = $this->product_data['id'];
        $product_id = CategoryProduct::where('product_id', $products_id)->get();
        $category_arr = [];
        foreach ($product_id as $data) {
            $category = $data->category_id;
            $categories = Category::where('id', $category)->get();
            array_push($category_arr, $categories['0']->name);
        }
        $this->product_data['category'] = $category_arr;

        return $this->product_data;
    }

    /**
     * @param mixed $blog_data
     */
    private function setProductData($product_data)
    {
        $this->product_data = $product_data;
    }

}