<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePhonemanagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('phonemanages', function (Blueprint $table) {
            $table->increments('id');
            $table->string('phoneno',500);
            $table->string('name')->nullable();
            $table->string('address')->nullable('');
            $table->ipAddress('ip')->nullable();
            $table->string('note')->nullable();
            $table->string('host')->nullable();
            $table->text('referer')->nullable();
            $table->integer('status')->default(0);
            $table->timestamps();
            $table->index('phoneno');
            $table->index('created_at');
            $table->index('status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('phonemanages');
    }
}
