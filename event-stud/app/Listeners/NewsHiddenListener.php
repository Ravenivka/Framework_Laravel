<?php

namespace App\Listeners;

use App\Events\NewsHidden;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Log;
use App\Models\News;

class NewsHiddenListener
{
    /**
     * Create the event listener.
     */
    public News $news;

    public function __construct(News $news)
    {
        $this->news = $news;
    }

    /**
     * Handle the event.
     * @param \App\Events\NewsHidden $event
     */
    public function handle(NewsHidden $event): void
    {
        Log::info('News' . $event->news->id . ' hidden');
    }
}
