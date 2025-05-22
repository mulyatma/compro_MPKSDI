<?php

namespace App\Filament\Resources\GalleriesCategoryResource\Pages;

use App\Filament\Resources\GalleriesCategoryResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListGalleriesCategories extends ListRecords
{
    protected static string $resource = GalleriesCategoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
