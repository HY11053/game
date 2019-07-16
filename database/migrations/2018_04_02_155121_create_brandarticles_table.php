<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBrandarticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('brandarticles', function (Blueprint $table) {
            $table->increments('id')->unique();
            $table->integer('typeid');
            $table->integer('ismake');
            $table->integer('click');
            $table->string('title');
            $table->string('flags')->nullable();
            $table->integer('mid');//文档类型
            $table->string('keywords')->nullable();
            $table->string('description')->nullable();
            $table->string('write');
            $table->string('litpic')->nullable();
            $table->smallInteger('dutyadmin');
            $table->text('body')->nullable();
            $table->text('contentindex')->nullable();
            $table->integer('tzid')->nullable();
            $table->integer('index_status')->nullable();
            $table->string('brandname')->nullable();//品牌名称
            $table->string('brandorigin')->nullable();//成立时间
            $table->string('brandmoshi')->nullable();//加盟模式
            $table->string('branddevelop')->nullable();//发展模式
            $table->string('production')->nullable();//发展模式
            $table->string('brandtime')->nullable();//成立时间
            $table->string('brandnum')->nullable();//门店总数
            $table->string('brandpay')->nullable();//加盟费用
            $table->string('brandarea')->nullable();//加盟区域
            $table->string('brandmap')->nullable();//经营范围
            $table->string('brandperson')->nullable();//加盟人群
            $table->string('brandattch')->nullable();//加盟意向人数
            $table->string('brandapply')->nullable();//申请加盟人数
            $table->string('brandchat')->nullable();//项目咨询人数
            $table->string('brandgroup')->nullable();//公司名称
            $table->string('brandaddr')->nullable();//公司地址
            $table->string('brandduty')->nullable();//区域授权
            $table->mediumText('imagepics')->nullable();//品牌图集
            $table->string('acreage')->nullable();//所需面积
            $table->string('genre')->nullable();//公司性质
            $table->string('licenseno')->nullable();//特许加盟许可证号
            $table->string('registeredcapital')->nullable();//注册资金
            $table->string('ppjstitle')->nullable();//品牌介绍标题
            $table->string('brandphone')->nullable();//联系电话
            $table->string('brandpsp')->nullable();//品牌特色
            $table->string('inner_uri')->nullable();//原有链接
            $table->string('legal')->nullable();//公司法人
            $table->integer('comment_num')->default(0);//品牌评论数
            $table->integer('province_id')->default(0);//品牌省ID
            $table->integer('city_id')->default(0);//品牌市ID
            $table->integer('dist_id')->default(0);//品牌特色
            $table->timestamp('published_at')->nullable();//预选发布时间
            $table->timestamps();
            $table->index('brandname');
            $table->index('click');
            $table->index('litpic');
            $table->index('mid');
            $table->index('flags');
            $table->index('ismake');
            $table->index('write');
            $table->index('dutyadmin');
            $table->index('typeid');
            $table->index('title');
            $table->index('tzid');
            $table->index('brandnum');
            $table->index('brandpay');
            $table->index('brandattch');
            $table->index('brandapply');
            $table->index('brandarea');
            $table->index('brandduty');
            $table->index('acreage');
            $table->index('genre');
            $table->index('index_status');
            $table->index('brandchat');
            $table->index('inner_uri');
            $table->index('comment_num');
            $table->index('province_id');
            $table->index('published_at');
            $table->index('city_id');
            $table->index('dist_id');
            $table->index('created_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('brandarticles');
    }
}
