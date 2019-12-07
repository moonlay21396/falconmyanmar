<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'id',
        'photo',
        'title',
        'category_id',
        'detail',
        'summertable',
        'download_link'
    ];
}
