<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    public function author_master()
    {
        return $this->belongsTo('App\Author_master');
    }
}
