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
            $table->date('launch')->nullable()->default('2000-01-01 00:00:00');
            $table->string('display')->nullable()->default('NULL');
            $table->string('platform')->nullable()->default('NULL');
            $table->string('cpu')->nullable()->default('NULL');
            $table->smallInteger('rom')->nullable()->default(0);
            $table->smallInteger('ram')->nullable()->default(0);
            $table->smallInteger('camera')->nullable()->default(0);
            $table->smallInteger('battery')->nullable()->default(0);
            $table->timestamps();
        });

        //Insert some stuff
        DB::table('specs')->insert(
            array(
                'slug' => 'xperia-xz-specs',
                'launch' => '2016-09-01',
                'display' => 'IPS LCD',
                'platform' => 'Android 6.0.1 (Marshmallow)',
                'cpu' => 'Qualcomm MSM8996 Snapdragon 820 (14 nm)',
                'rom' => 32,
                'ram' => 3,
                'camera' => 23,
                'battery' => 2900,
                'created_at' => '2021-01-27 07:42:23',
                'updated_at' => '2021-01-27 07:42:23',
            )
        );

        DB::table('specs')->insert(
            array(
                'slug' => 'xperia-xz1-specs',
                'launch' => '2017-08-31',
                'display' => 'IPS LCD, HDR10',
                'platform' => 'Android 8.0 (Oreo)',
                'cpu' => 'Qualcomm MSM8998 Snapdragon 835 (10 nm)',
                'rom' => 64,
                'ram' => 4,
                'camera' => 19,
                'battery' => 2700,
                'created_at' => '2021-01-27 07:42:23',
                'updated_at' => '2021-01-27 07:42:23',
            )
        );

        DB::table('specs')->insert(
            array(
                'slug' => 'redmi-note-8-specs',
                'launch' => '2019-08-29',
                'display' => 'IPS LCD',
                'platform' => 'Android 9.0 (Pie)',
                'cpu' => 'Qualcomm SDM665 Snapdragon 665 (11 nm)',
                'rom' => 32,
                'ram' => 3,
                'camera' => 48,
                'battery' => 4000,
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
        Schema::dropIfExists('specs');
    }
}
