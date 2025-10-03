<?php

namespace App\Filament\Resources\CompanyOverviewResource\Pages;

use App\Filament\Resources\CompanyOverviewResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCompanyOverview extends EditRecord
{
    protected static string $resource = CompanyOverviewResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
