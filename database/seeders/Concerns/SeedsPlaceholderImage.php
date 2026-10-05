<?php

namespace Database\Seeders\Concerns;

use Illuminate\Support\Facades\File;

trait SeedsPlaceholderImage
{
    protected function placeholderImage(string $directory, string $filename = 'placeholder.png'): string
    {
        $source = database_path('seeders/assets/placeholder.png');
        $relative = trim($directory, '/').'/'.$filename;
        $destination = storage_path('app/public/'.$relative);

        File::ensureDirectoryExists(dirname($destination));

        if (! File::exists($destination)) {
            File::copy($source, $destination);
        }

        return $relative;
    }
}
