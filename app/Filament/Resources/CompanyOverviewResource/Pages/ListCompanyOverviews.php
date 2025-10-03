<?php

namespace App\Filament\Resources\CompanyOverviewResource\Pages;

use App\Filament\Resources\CompanyOverviewResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCompanyOverviews extends ListRecords
{
    protected static string $resource = CompanyOverviewResource::class;

    protected function getHeaderActions(): array
    {
        return [
            // Actions\CreateAction::make(),
        ];
    }
}
