<?php

namespace App\Providers;

use App\Listeners\NewsHiddenListener;
use App\Models\News;
use App\Observers\NewsObserver;
use Illuminate\Support\ServiceProvider;

class EventServiceProvider extends ServiceProvider{

    protected $Listen = [
        NewsHiddenListener::class
    ];
    public function boot(){
        News::observe(NewsObserver::class);
    }

}