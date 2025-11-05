<?php

namespace App\Filament\Resources\SiteCounterResource\Pages;

use App\Filament\Resources\SiteCounterResource;
use Filament\Resources\Pages\EditRecord;

class EditSiteCounter extends EditRecord
{
   protected static string $resource = SiteCounterResource::class;

    public function mount($record = null): void
    {
        $this->record = \App\Models\SiteCounter::firstOrCreate([]);
        $this->fillForm();
    }
}
