<?php

use Illuminate\Support\Facades\Route;
Use App\Models\Article;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',function (){
Article::createIndex($shards=null,$replicas=null);

Article::putMapping($ignoreConflicts=true);

Article::addAllToIndex();

return view('welcome');
});

Route::get('/search',function (){
    $articles=Article::searchByQuery(['match'=>['title'=>'dülo']]);

    return $articles;
});
