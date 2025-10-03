<?php

namespace App\Filament\Resources\HeadlineResource\Pages;

use App\Filament\Resources\HeadlineResource;
use Filament\Resources\Pages\EditRecord;

class EditHeadline extends EditRecord
{
    protected static string $resource = HeadlineResource::class;

    public function mount($record = null): void
    {
        $this->record = \App\Models\Headline::firstOrCreate([]);
        $this->fillForm();
    }
}
