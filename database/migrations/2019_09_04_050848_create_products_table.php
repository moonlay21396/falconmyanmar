<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->integer('category_id');
            $table->string('model_no');
            $table->string('part_no');
            $table->string('capacity');
            $table->string('type_of_extinguishant');
            $table->string('type');
            $table->string('pressurised_agent');
            $table->string('working_pressure');
            $table->string('test_pressure');
            $table->string('temperature_range');
            $table->string('discharge_time');
            $table->string('overall_height');
            $table->string('cylinder_diameter');
            $table->string('full_weight');
            $table->string('body_material');
            $table->string('finishing');
            $table->string('class_of_fire');
            $table->string('fire_rating');
            $table->string('manufactured_and_approved');
            $table->string('throw_range_discharge');
            $table->text('detail');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
