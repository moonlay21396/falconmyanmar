<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'id',
        'photo',
        'title',
        'model_no',
        'part_no',
        'capacity',
        'type_of_extinguishant',
        'type',
        'pressurised_agent',
        'working_pressure',
        'test_pressure',
        'temperature_range',
        'discharge_time',
        'overall_height',
        'cylinder_diameter',
        'full_weight',
        'body_material',
        'finishing',
        'class_of_fire',
        'fire_rating',
        'manufactured_and_approved',
        'throw_range_discharge',
        'detail'
    ];
}
