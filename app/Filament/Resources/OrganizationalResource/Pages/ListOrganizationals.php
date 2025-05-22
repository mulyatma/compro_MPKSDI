<?php

namespace App\Filament\Resources\OrganizationalResource\Pages;

use App\Filament\Resources\OrganizationalResource;
use App\Models\Content;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListOrganizationals extends ListRecords
{
    protected static string $resource = OrganizationalResource::class;

    protected function getHeaderActions(): array
    {
        if (Content::where('key', 'organizational')->count() === 0) {
            return [
                Actions\CreateAction::make(),
            ];
        }

        return [];
    }
}
