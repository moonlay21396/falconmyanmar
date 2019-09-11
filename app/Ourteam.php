<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ourteam extends Model
{
    protected $fillable = [
        'id',
        'photo',
        'name',
        'position',
        'fb_link'
    ];
}
