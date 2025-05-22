<?php

namespace App\Filament\Resources\GoalResource\Pages;

use App\Filament\Resources\GoalResource;
use Filament\Actions;
use Filament\Actions\Action;
use Filament\Resources\Pages\CreateRecord;

class CreateGoal extends CreateRecord
{
    protected static string $resource = GoalResource::class;

    protected function getFormActions(): array
    {
        return [
            Action::make('save')
                ->label('Create')
                ->submit('save'),

            Action::make('cancel')
                ->color('danger')
                ->action(fn() => redirect(static::getResource()::getUrl('index')))
        ];
    }
}
