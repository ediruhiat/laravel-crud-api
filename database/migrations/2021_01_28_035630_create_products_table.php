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
            $table->unsignedBigInteger('brand_id')->nullable()->default(0);
            $table->string('slug')->unique()->default('undefined');
            $table->string('name');
            $table->string('model')->nullable()->default('NULL');
            $table->unsignedBigInteger('specs_id')->nullable()->default(0);
            $table->integer('price');
            $table->timestamps();            
            $table->foreign('specs_id')->references('id')->on('specs');
            $table->foreign('brand_id')->references('id')->on('brands');
        });

        //Insert some stuff
        DB::table('products')->insert(
            array(
                'brand_id' => 1,
                'slug' => 'xperia-xz',
                'name' => 'Xperia XZ',
                'model' => 'F8331',
                'specs_id' => 1,
                'price' => 9100000,
                'created_at' => '2021-01-27 07:42:23',
                'updated_at' => '2021-01-27 07:42:23',
            )
        );

        DB::table('products')->insert(
            array(
                'brand_id' => 1,
                'slug' => 'xperia-xz1',
                'name' => 'Xperia XZ1',
                'model' => 'G8341',
                'specs_id' => 2,
                'price' => 7800000,
                'created_at' => '2021-01-27 07:42:23',
                'updated_at' => '2021-01-27 07:42:23',
            )
        );

        DB::table('products')->insert(
            array(
                'brand_id' => 2,
                'slug' => 'redmi-note-8',
                'name' => 'Redmi Note 8',
                'model' => 'Ginkgo',
                'specs_id' => 3,
                'price' => 2550000,
                'created_at' => '2021-01-27 07:42:23',
                'updated_at' => '2021-01-27 07:42:23',
            )
        );
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
