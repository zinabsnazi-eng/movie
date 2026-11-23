<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $fillable = ['title' , 'description' , 'category_id' , "year" , "imdb" , "content" , "country" , "time" , "poster" , "status"];

    public function category()
    {
        return $this->belongsTo(CategoryMovie::class, 'category_id');
    }
}
