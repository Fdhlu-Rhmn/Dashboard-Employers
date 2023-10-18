<?php

namespace App\Filament\Resources\EmployeerResource\Pages;

use App\Filament\Resources\EmployeerResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use Konnco\FilamentImport\Actions\ImportAction;
use Konnco\FilamentImport\ImportField;

class ListEmployeers extends ListRecords
{
    protected static string $resource = EmployeerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()
                ->label('Tambah Data'),
                
        ];
    }
}