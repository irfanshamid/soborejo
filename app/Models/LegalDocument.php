<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class LegalDocument extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'description',
        'document',
    ];

    protected static function booted(): void
    {
        static::saving(function (LegalDocument $document) {
            if (blank($document->slug) && filled($document->title)) {
                $document->slug = static::generateUniqueSlug($document->title, $document->id);
            }
        });
    }

    public function getRouteKeyName(): string
    {
        return 'slug';
    }

    public static function generateUniqueSlug(string $title, ?int $ignoreId = null): string
    {
        $base = Str::slug($title) ?: 'legal-document';
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
