<?php

use App\Models\News;
use Illuminate\Support\Facades\Route;
use App\Events\NewsHidden;

Route::get('/', function () {
    return view('welcome');
});

Route::get('news/create-test', function () {
    $news = new News();
    $news->title = 'Test #3 title';
    $news->body = 'Test #3 body';
    $news->save();
    return $news;

});

Route::get('news/{id}/hide', function ($id) {
    $news = News::find($id);
    $news->hidden = true;
    $news->save();

    NewsHidden::dispatch(News::find($id));

    return 'News hidden';
});