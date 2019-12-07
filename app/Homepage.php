<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HomePage extends Model
{
    protected $fillable = [
        'id',
        'photo',
        'name',
        'description'
    ];
}
