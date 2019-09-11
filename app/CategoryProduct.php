<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoryProduct extends Model
{
    protected $fillable =[
       'id',
       'product_id',
       'category_id'
    ];
}
