<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BookAuthor extends Model
{
    //
    protected $fillable = [
        'book_author_title',
        'book_author_des',
    ];
}
