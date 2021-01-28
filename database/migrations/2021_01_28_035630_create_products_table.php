<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->integer('brand_id',11);
            $table->string('slug')->unique()->default('undefined');
            $table->string('name');
            $table->string('model')->nullable()->default('NULL');
            $table->integer('specs_id',11)->nullable()->default('NULL');
            $table->integer('price',11);
            $table->foreign('specs_id')->references('specs_id')->on('specs');
            $table->foreign('brand_id')->references('brand_id')->on('brands');
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
