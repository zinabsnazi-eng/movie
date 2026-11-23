<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CategoryMovie extends Model
{
    protected $table = 'categories';

    protected $fillable = ['name' ,'description' , 'status', ];


    public function movie()
    {
        return $this->hasMany(Movie::class, 'category_id');
    }

}
