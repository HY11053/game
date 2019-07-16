<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMsarticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('msarticles', function (Blueprint $table) {
            $table->increments('id');//id
            $table->integer('typeid');//栏目id
            $table->integer('ismake');//文档状态
            $table->integer('click');//点击数
            $table->string('title');//标题
            $table->string('flags')->nullable();//自定义文档属性
            $table->string('keywords')->nullable();//关键字
            $table->string('description')->nullable();//描述
            $table->string('write');//发布者
            $table->string('editor')->nullable();//编辑者
            $table->string('litpic')->nullable();//缩略图
            $table->smallInteger('dutyadmin');//发布者ID
            $table->smallInteger('editorid')->nullable();//编辑者ID
            $table->string('brandcompany')->nullable();//品牌公司
            $table->string('brandaddress')->nullable();//品牌地址
            $table->string('brandname')->nullable();//品牌名称
            $table->integer('brandcid')->nullable();//品牌所属父分类
            $table->integer('brandtypeid')->nullable();//品牌所属子分类
            $table->string('production')->nullable();//主营产品
            $table->integer('brandpay')->nullable();//投资金额
            $table->integer('brandnum')->nullable();//门店数量
            $table->string('branddev')->nullable();//发展模式
            $table->text('body')->nullable();//文档内容
            $table->timestamp('published_at')->nullable();//预选发布时间
            $table->timestamps();
            $table->index('click');
            $table->index('typeid');
            $table->index('title');
            $table->index('flags');
            $table->index('ismake');
            $table->index('editor');
            $table->index('litpic');
            $table->index('editorid');
            $table->index('write');
            $table->index('dutyadmin');
            $table->index('published_at');
            $table->index('created_at');
            $table->index('brandcid');
            $table->index('brandtypeid');
            $table->index('brandcompany');
            $table->index('brandname');
            $table->index('brandnum');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('msarticles');
    }
}
