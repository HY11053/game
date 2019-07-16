<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMscategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mscategories', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('reid')->default(0);
            $table->integer('topid')->default(0);
            $table->integer('sortrank')->nullable();
            $table->string('typename')->nullable();
            $table->string('typedir');
            $table->string('title');
            $table->string('description')->nullable();
            $table->string('keywords')->nullable();
            $table->smallInteger('dirposition')->default(1);
            $table->integer('is_write');
            $table->integer('mid')->default(1);
            $table->timestamps();
            $table->index('reid');
            $table->index('topid');
            $table->index('sortrank');
            $table->index('typedir');
            $table->index('dirposition');
            $table->index('is_write');
            $table->index('mid');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mscategories');
    }
}
