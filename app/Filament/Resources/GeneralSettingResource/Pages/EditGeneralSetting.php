<?php

namespace App\Filament\Resources\GeneralSettingResource\Pages;

use App\Filament\Resources\GeneralSettingResource;
use Filament\Resources\Pages\EditRecord;

class EditGeneralSetting extends EditRecord
{
    protected static string $resource = GeneralSettingResource::class;

    public function mount($record = null): void
    {
        $this->record = \App\Models\GeneralSetting::firstOrCreate([]);
        $this->fillForm();
    }
}
