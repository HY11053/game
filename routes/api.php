<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

/*Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
*/
Route::get('/articles', 'ArticleSourcesController@FetchArticles');
Route::get('/scrollbrandarticles/', 'ArticleSourcesController@getScrollBrandarticles');
Route::get('/clickbrands/', 'ArticleSourcesController@getClickBrandarticles');
Route::get('/latestbrands/', 'ArticleSourcesController@getLatestBrandarticles');
Route::get('/brandnews/', 'ArticleSourcesController@getBrandNews');
Route::get('/getjmnews/', 'ArticleSourcesController@getJmNews');
Route::get('/touzinews/', 'ArticleSourcesController@gettouziNews');
Route::get('/feiyongnews/', 'ArticleSourcesController@getfeiyongNews');
Route::get('/getarticlebrandnews/', 'ArticleSourcesController@getArticleBrandNews');
Route::get('/articlephbrands/', 'ArticleSourcesController@articlePhBrands');
Route::get('/getbrandarticlenews/', 'ArticleSourcesController@getBrandArticlenews');
Route::get('/getbrandarticlebrands/', 'ArticleSourcesController@getBrandArticleBrands');

Route::get('/brandarticles', 'ArticleSourcesController@FetchBrandArticles');
Route::get('/getarticle', 'ArticleSourcesController@getArticle');
Route::get('/getbrandarticle', 'ArticleSourcesController@getBrandarticle');
Route::get('/bnlist', 'ArticleSourcesController@getBnlist');
Route::get('/search', 'ArticleSourcesController@getSearchBnlist');
Route::get('/nlist', 'ArticleSourcesController@getNlist');
Route::get('/bnlistarticles', 'ArticleSourcesController@getBnlistArticles');
Route::get('/nlistarticles', 'ArticleSourcesController@getNlistArticles');
Route::get('/arctype', 'ArticleSourcesController@getTypeinfo');
Route::get('/paihangbang', 'ArticleSourcesController@paiHangBang');
Route::get('/paihangbang/type', 'ArticleSourcesController@paiHangBangType');
Route::post('/phone/complate', 'PhoneController@phoneComplate');
