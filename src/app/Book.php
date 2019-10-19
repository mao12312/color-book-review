<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    public function book_master()
    {
        return $this->belongsTo('App\Book_master');
    }
}
