<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAreasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('areas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('parentid');
            $table->string('name');
            $table->string('name_cn');
            $table->integer('deep');
            $table->string('id_path');
            $table->string('name_path');
            $table->integer('status');
            $table->integer('sort');
            $table->index('parentid');
            $table->index('name');
            $table->index('name_cn');
            $table->index('deep');
            $table->index('id_path');
            $table->index('name_path');
            $table->index('status');
            $table->index('sort');
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
        Schema::drop('areas');
    }
}
