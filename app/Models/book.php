<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\BookLink;

class Book extends Model
{
    //
    protected $fillable = [
        'book_name',
        'book_des',
        'book_img',
    ];

    function rel_to_book_link(){
        return $this->hasMany(BookLink::class);
    }
}
