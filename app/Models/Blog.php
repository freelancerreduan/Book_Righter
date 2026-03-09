<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    //
    protected $fillable = [
        'blog_title',
        'blog_description',
        'blog_img',
    ];
}
