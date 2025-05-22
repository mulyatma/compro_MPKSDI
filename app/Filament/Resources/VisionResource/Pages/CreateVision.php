<?php

namespace App\Filament\Resources\VisionResource\Pages;

use App\Filament\Resources\VisionResource;
use Filament\Actions;
use Filament\Actions\Action;
use Filament\Resources\Pages\CreateRecord;

class CreateVision extends CreateRecord
{
    protected static string $resource = VisionResource::class;

    protected function getFormActions(): array
    {
        return [
            Action::make('save')
                ->label('Create')
                ->submit('save'),

            Action::make('cancel')
                ->color('danger')
                ->url($this->getResource()::getUrl()),
        ];
    }
}
