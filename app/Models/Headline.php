<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Headline extends Model
{
    protected $fillable = [
        'banner_img',
        'title',
        'description',
        'tagline',
        'service',
        'order',
    ];

}
