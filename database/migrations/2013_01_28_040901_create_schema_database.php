<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSchemaDatabase extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        createSchema('laravel_eloquent_relationship');
    }

    /**
     * Creates a new database schema.
     * @param  string $schemaName The new schema name.
     * @return bool
     */
    function createSchema($schemaName)
    {
        return DB::getConnection()->statement('CREATE DATABASE :schema', array('schema' => $schemaName));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // 
    }
}
