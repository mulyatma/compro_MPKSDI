<?php

namespace App\Filament\Resources\OrganizationalResource\Pages;

use App\Filament\Resources\OrganizationalResource;
use Filament\Actions;
use Filament\Actions\Action;
use Filament\Resources\Pages\CreateRecord;

class CreateOrganizational extends CreateRecord
{
    protected static string $resource = OrganizationalResource::class;

    protected function getFormActions(): array
    {
        return [
            Action::make('save')
                ->label('Create')
                ->submit('save'),

            Action::make('cancel')
                ->color('danger')
                ->url($this->getResource()::getUrl('index')),
        ];
    }
}
