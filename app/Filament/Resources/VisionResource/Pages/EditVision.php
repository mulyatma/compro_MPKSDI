<?php

namespace App\Filament\Resources\VisionResource\Pages;

use App\Filament\Resources\VisionResource;
use Filament\Actions;
use Filament\Actions\Action;
use Filament\Resources\Pages\EditRecord;

class EditVision extends EditRecord
{
    protected static string $resource = VisionResource::class;

    protected function getFormActions(): array
    {
        return [
            Action::make('save')
                ->label('Save Changes')
                ->submit('save'),

            Action::make('cancel')
                ->color('danger')
                ->url($this->getResource()::getUrl()),
        ];
    }
}
