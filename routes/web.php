<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/
Auth::routes();
Route::get('/home', 'HomeController@index');
//前台界面
Route::group(['domain' => 'm.anxjm.net'], function () {
    Route::get('/','Mobile\IndexController@Index');
    Route::get('news/{oid}','Mobile\ArticleController@onews')->name('article_onews')->where('oid','[0-9]+');
    Route::get('cNewsInfo/{oid}','Mobile\ArticleController@cnews')->name('article_cnews')->where('oid','[0-9]+');
    Route::get('tNews/{oid}','Mobile\ArticleController@tnews')->name('article_tnews')->where('oid','[0-9]+');
    Route::get('news/{id}.html','Mobile\ArticleController@NewsArticle')->where('id', '[0-9]+')->name('article');
    Route::get('busInfo/{id}.html','Mobile\ArticleController@BrandArticle')->where('id', '[0-9]+');
    Route::get('about/sitemap','Mobile\StatementController@sitemap');
    Route::post('search','Mobile\SeacrhController@SeacrhBrand');
    Route::get('search','Mobile\XiangmuProjectController@XiangmuLists')->where('path','[a-zA-Z0-9]+')->name('xiangmulist');
    Route::get('search/{page}','Mobile\XiangmuProjectController@XiangmuLists')->where('page','[0-9]+')->name('xiangmulist2');
    Route::get('search/{tid}_{zid}','Mobile\XiangmuProjectController@projectBrandLists')->where(['tid'=>'[0-9]+','zid'=>'[0-9]+'])->name('projectlists');
    Route::get('search/{tid}_{zid?}/p{page}','Mobile\XiangmuProjectController@projectBrandLists')->where(['path'=>'[a-zA-Z0-9]+','tid'=>'[0-9]+','zid'=>'[0-9]+'])->name('projectlists2');
    Route::get('newsPage/{realpath}','Mobile\ArticleCategorizationController@ListNewsLists')->where('path','[a-zA-Z0-9]+')->name('newslist');
    Route::get('newsPage/{realpath}/p{page}','Mobile\ArticleCategorizationController@ListNewsLists')->where(['path'=>'[a-zA-Z0-9]+','page'=>'[0-9]+'])->name('newslistpage');
    Route::get('paihang','Mobile\PaihangbangController@IndexPaihangbang');
    Route::get('{path}','Mobile\ArticleCategorizationController@ListBrands')->where('path','[a-zA-Z0-9]+')->name('bnewslist');
    Route::get('{path}/{page}','Mobile\ArticleCategorizationController@ListBrands')->where(['path'=>'[a-zA-Z0-9]+','page'=>'[0-9]+'])->name('bnewspagelist');
    Route::get('{path}/{tid}_{zid?}','Mobile\ArticleCategorizationController@projectBrandLists')->where(['path'=>'[a-zA-Z0-9]+','tid'=>'[0-9]+','zid'=>'[0-9]+'])->name('projectlists');
    Route::get('{path}/{tid}_{zid?}/p{page}','Mobile\ArticleCategorizationController@projectBrandLists')->where(['path'=>'[a-zA-Z0-9]+','tid'=>'[0-9]+','zid'=>'[0-9]+'])->name('projectlists2');
});

Route::group(['domain' => 'mip.anxjm.net'], function () {
    Route::get('/','Mip\IndexController@Index');
    Route::get('news/{oid}','Mip\ArticleController@onews')->name('article_onews')->where('oid','[0-9]+');
    Route::get('cNewsInfo/{oid}','Mip\ArticleController@cnews')->name('article_cnews')->where('oid','[0-9]+');
    Route::get('tNews/{oid}','Mip\ArticleController@tnews')->name('article_tnews')->where('oid','[0-9]+');
    Route::get('news/{id}.html','Mip\ArticleController@NewsArticle')->where('id', '[0-9]+')->name('article');
    Route::get('busInfo/{id}.html','Mip\ArticleController@BrandArticle')->where('id', '[0-9]+');
    Route::get('about/sitemap','Mip\StatementController@sitemap');
    Route::post('search','Mip\SeacrhController@SeacrhBrand');
    Route::get('search','Mip\XiangmuProjectController@XiangmuLists')->where('path','[a-zA-Z0-9]+')->name('xiangmulist');
    Route::get('search/{page}','Mip\XiangmuProjectController@XiangmuLists')->where('page','[0-9]+')->name('xiangmulist2');
    Route::get('search/{tid}_{zid}','Mip\XiangmuProjectController@projectBrandLists')->where(['tid'=>'[0-9]+','zid'=>'[0-9]+'])->name('projectlists');
    Route::get('search/{tid}_{zid?}/p{page}','Mip\XiangmuProjectController@projectBrandLists')->where(['path'=>'[a-zA-Z0-9]+','tid'=>'[0-9]+','zid'=>'[0-9]+'])->name('projectlists2');
    Route::get('newsPage/{realpath}','Mip\ArticleCategorizationController@ListNewsLists')->where('path','[a-zA-Z0-9]+')->name('newslist');
    Route::get('newsPage/{realpath}/p{page}','Mip\ArticleCategorizationController@ListNewsLists')->where(['path'=>'[a-zA-Z0-9]+','page'=>'[0-9]+'])->name('newslistpage');
    Route::get('paihang','Mip\PaihangbangController@IndexPaihangbang');
    Route::get('{path}','Mip\ArticleCategorizationController@ListBrands')->where('path','[a-zA-Z0-9]+')->name('bnewslist');
    Route::get('{path}/{page}','Mip\ArticleCategorizationController@ListBrands')->where(['path'=>'[a-zA-Z0-9]+','page'=>'[0-9]+'])->name('bnewspagelist');
    Route::get('{path}/{tid}_{zid?}','Mip\ArticleCategorizationController@projectBrandLists')->where(['path'=>'[a-zA-Z0-9]+','tid'=>'[0-9]+','zid'=>'[0-9]+'])->name('projectlists');
    Route::get('{path}/{tid}_{zid?}/p{page}','Mip\ArticleCategorizationController@projectBrandLists')->where(['path'=>'[a-zA-Z0-9]+','tid'=>'[0-9]+','zid'=>'[0-9]+'])->name('projectlists2');
});
Route::get('/','Frontend\IndexController@Index');
Route::post('/phonecomplate/','Frontend\PhoneController@phoneComplate');
Route::post('/mipbtphonecomplate/','Frontend\PhoneController@ButtonPhoneComplate');
Route::post('/miptopphonecomplate/','Frontend\PhoneController@TopPhoneComplate');
Route::get('news/{oid}','Frontend\ArticleController@onews')->name('article_onews')->where('oid','[0-9]+');
Route::get('cNewsInfo/{oid}','Frontend\ArticleController@cnews')->name('article_cnews')->where('oid','[0-9]+');
Route::get('tNews/{oid}','Frontend\ArticleController@tnews')->name('article_tnews')->where('oid','[0-9]+');
Route::get('news/{id}.html','Frontend\ArticleController@NewsArticle')->where('id', '[0-9]+')->name('article');
Route::get('vip/{id}.html','Frontend\ArticleController@VipArticle')->where('id', '[0-9]+')->name('viparticle');
Route::get('busInfo/{id}.html','Frontend\ArticleController@BrandArticle')->where('id', '[0-9]+');
Route::get('sitemap','Frontend\StatementController@sitemap');
Route::post('search','Frontend\SeacrhController@SeacrhBrand');
Route::get('search','Frontend\XiangmuProjectController@XiangmuLists')->where('path','[a-zA-Z0-9]+')->name('xiangmulist');
Route::get('search/{page}','Frontend\XiangmuProjectController@XiangmuLists')->where('page','[0-9]+')->name('xiangmulist2');
Route::get('search/{tid}_{zid}','Frontend\XiangmuProjectController@projectBrandLists')->where(['tid'=>'[0-9]+','zid'=>'[0-9]+'])->name('projectlists');
Route::get('search/{tid}_{zid?}/p{page}','Frontend\XiangmuProjectController@projectBrandLists')->where(['path'=>'[a-zA-Z0-9]+','tid'=>'[0-9]+','zid'=>'[0-9]+'])->name('projectlists2');
Route::get('newsPage/{realpath}','Frontend\ArticleCategorizationController@ListNewsLists')->where('path','[a-zA-Z0-9]+')->name('newslist');
Route::get('newsPage/{realpath}/p{page}','Frontend\ArticleCategorizationController@ListNewsLists')->where(['path'=>'[a-zA-Z0-9]+','page'=>'[0-9]+'])->name('newslistpage');
Route::get('paihang','Frontend\PaihangbangController@IndexPaihangbang');
Route::get('{path}','Frontend\ArticleCategorizationController@ListBrands')->where('path','[a-zA-Z0-9]+')->name('bnewslist');
Route::get('{path}/{page}','Frontend\ArticleCategorizationController@ListBrands')->where(['path'=>'[a-zA-Z0-9]+','page'=>'[0-9]+'])->name('bnewspagelist');
Route::get('{path}/{tid}_{zid?}','Frontend\ArticleCategorizationController@projectBrandLists')->where(['path'=>'[a-zA-Z0-9]+','tid'=>'[0-9]+','zid'=>'[0-9]+'])->name('projectlists');
Route::get('{path}/{tid}_{zid?}/p{page}','Frontend\ArticleCategorizationController@projectBrandLists')->where(['path'=>'[a-zA-Z0-9]+','tid'=>'[0-9]+','zid'=>'[0-9]+'])->name('projectlists2');