<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSpecsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('specs', function (Blueprint $table) {
            $table->id();
            $table->string('slug')->unique()->default('undefined');
            $table->date('launch')->nullable()->default('NULL');
            $table->string('display')->nullable()->default('NULL');
            $table->string('platform')->nullable()->default('NULL');
            $table->string('cpu')->nullable()->default('NULL');
            $table->smallInteger('rom',6)->nullable()->default('NULL');
            $table->smallInteger('ram',6)->nullable()->default('NULL');
            $table->smallInteger('camera',6)->nullable()->default('NULL');
            $table->smallInteger('battery',6)->nullable()->default('NULL');
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
        Schema::dropIfExists('specs');
    }
}
