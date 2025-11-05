<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SiteCounter extends Model
{
    use HasFactory;

    protected $fillable = [
        'content',
        'title_counter_1', 'total_counter_1',
        'title_counter_2', 'total_counter_2',
        'title_counter_3', 'total_counter_3',
    ];
}
