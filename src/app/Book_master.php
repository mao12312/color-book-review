<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book_master extends Model
{
    public function author()
    {
        return $this->belongsTo('App\Author_master');
    }

    public function book()
    {
        return $this->hasMany('App\Book');
    }
}
