<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'image',
        'description',
        'url',
        'order',
        'categories',
        'content',
    ];

    protected $casts = [
        'categories' => 'array',
    ];

    protected static function booted(): void
    {
        static::saving(function (Project $project) {
            if (blank($project->slug) && filled($project->title)) {
                $project->slug = static::generateUniqueSlug($project->title, $project->id);
            }
        });
    }

    public function getRouteKeyName(): string
    {
        return 'slug';
    }

    public function getCategoriesAttribute($value)
    {
        return $value ? explode(',', $value) : [];
    }

    public static function generateUniqueSlug(string $title, ?int $ignoreId = null): string
    {
        $base = Str::slug($title) ?: 'project';
        $slug = $base;
        $counter = 1;

        while (static::query()
            ->when($ignoreId, fn ($query) => $query->where('id', '!=', $ignoreId))
            ->where('slug', $slug)
            ->exists()) {
            $slug = $base.'-'.$counter;
            $counter++;
        }

        return $slug;
    }
}
