<?php

namespace App\Filament\Resources\SiteCounterResource\Pages;

use App\Filament\Resources\SiteCounterResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSiteCounters extends ListRecords
{
    protected static string $resource = SiteCounterResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
