<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Download extends Model
{
    protected $fillable = [
        'id',
        'photo',
        'name',
        'description',
        'pdf'
    ];
}
