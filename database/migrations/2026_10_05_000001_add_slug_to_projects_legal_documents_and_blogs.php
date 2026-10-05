<?php

use App\Models\Blog;
use App\Models\LegalDocument;
use App\Models\Project;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('projects', function (Blueprint $table) {
            $table->string('slug')->nullable()->unique()->after('title');
        });

        Schema::table('legal_documents', function (Blueprint $table) {
            $table->string('slug')->nullable()->unique()->after('title');
        });

        Schema::table('blogs', function (Blueprint $table) {
            $table->string('slug')->nullable()->unique()->after('title');
        });

        foreach (Project::query()->get() as $project) {
            $project->forceFill([
                'slug' => $this->uniqueSlug(Project::class, $project->title, $project->id),
            ])->saveQuietly();
        }

        foreach (LegalDocument::query()->get() as $document) {
            $document->forceFill([
                'slug' => $this->uniqueSlug(LegalDocument::class, $document->title, $document->id),
            ])->saveQuietly();
        }

        foreach (Blog::query()->get() as $blog) {
            $blog->forceFill([
                'slug' => $this->uniqueSlug(Blog::class, $blog->title, $blog->id),
            ])->saveQuietly();
        }
    }

    public function down(): void
    {
        Schema::table('projects', function (Blueprint $table) {
            $table->dropColumn('slug');
        });

        Schema::table('legal_documents', function (Blueprint $table) {
            $table->dropColumn('slug');
        });

        Schema::table('blogs', function (Blueprint $table) {
            $table->dropColumn('slug');
        });
    }

    private function uniqueSlug(string $modelClass, string $title, int $ignoreId): string
    {
        $base = Str::slug($title) ?: 'item-'.$ignoreId;
        $slug = $base;
        $counter = 1;

        while ($modelClass::query()
            ->where('slug', $slug)
            ->where('id', '!=', $ignoreId)
            ->exists()) {
            $slug = $base.'-'.$counter;
            $counter++;
        }

        return $slug;
    }
};
