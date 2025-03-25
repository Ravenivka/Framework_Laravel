<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'body',
        'hidden',
    ];

    protected static function boot(){
        parent::boot();
        static::updating(function(News $news){
            $i=0;
        });
    }

}
