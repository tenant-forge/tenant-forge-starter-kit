<?php

namespace App\Filament\Admin\Resources\TenantResource\Pages;

use Filament\Actions\CreateAction;
use App\Filament\Admin\Resources\TenantResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTenants extends ListRecords
{
    protected static string $resource = TenantResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
