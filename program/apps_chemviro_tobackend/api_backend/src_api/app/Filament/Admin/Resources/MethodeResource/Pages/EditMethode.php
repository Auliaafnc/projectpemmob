<?php

namespace App\Filament\Admin\Resources\MethodeResource\Pages;

use App\Filament\Admin\Resources\MethodeResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditMethode extends EditRecord
{
    protected static string $resource = MethodeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}