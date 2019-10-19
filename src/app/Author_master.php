<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author_master extends Model
{
    public function book()
    {
        return $this->hasMany('App\Book_master');
    }

    public function author()
    {
        return $this->hasMany('App\Author');
    }
}
