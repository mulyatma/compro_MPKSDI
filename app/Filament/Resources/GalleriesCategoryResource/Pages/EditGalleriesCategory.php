<?php

namespace App\Filament\Resources\GalleriesCategoryResource\Pages;

use App\Filament\Resources\GalleriesCategoryResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditGalleriesCategory extends EditRecord
{
    protected static string $resource = GalleriesCategoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
