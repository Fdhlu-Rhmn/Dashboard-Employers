<?php

namespace App\Filament\Resources\EmployeerResource\Pages;

use App\Filament\Resources\EmployeerResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditEmployeer extends EditRecord
{
    protected static string $resource = EmployeerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
