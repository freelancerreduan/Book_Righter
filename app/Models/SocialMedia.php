<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SocialMedia extends Model
{
    //
    protected $fillable = [
        'social_name',
        'social_link',
        'social_icon',
    ];
}
