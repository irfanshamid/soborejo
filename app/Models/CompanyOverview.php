<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CompanyOverview extends Model
{
    protected $fillable = [
        'title',
        'image',
        'description',
    ];
}
