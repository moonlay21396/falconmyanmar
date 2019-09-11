<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Whychooseus extends Model
{
    protected $fillable = [
        'id',
        'fontawesome',
        'title',
        'text'
    ];
}
