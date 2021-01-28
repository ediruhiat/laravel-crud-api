<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBrandsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('brands', function (Blueprint $table) {
            $table->id();
            $table->string('slug')->unique()->default('undefined');
            $table->string('brand_name')->nullable()->default('NULL');;
            $table->string('country')->nullable()->default('NULL');;
            $table->timestamps();
        });

        //Insert some stuff
        DB::table('brands')->insert(
            array(
                'slug' => 'sony-corp-japan',
                'brand_name' => 'Sony',
                'country' => 'Japan',
                'created_at' => '2021-01-27 07:42:23',
                'updated_at' => '2021-01-27 07:42:23',
            )
        );

        DB::table('brands')->insert(
            array(
                'slug' => 'xiaomi-inc-china',
                'brand_name' => 'Xiaomi',
                'country' => 'China',
                'created_at' => '2021-01-27 07:42:33',
                'updated_at' => '2021-01-27 07:42:33',
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
        Schema::dropIfExists('brands');
    }
}
