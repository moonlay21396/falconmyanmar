<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    protected $fillable = [
        'id',
        'about_us',
        'vision',
        'mission',
        'value',
        'our_feature',
        'why_choose_us_text',
        'our_accreditation'
    ];
}
