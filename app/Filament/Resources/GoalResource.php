<?php

namespace App\Filament\Resources;

use App\Filament\Resources\GoalResource\Pages;
use App\Filament\Resources\GoalResource\RelationManagers;
use App\Models\Content;
use App\Models\Goal;
use Filament\Forms;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class GoalResource extends Resource
{
    protected static ?string $model = Content::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $pluralModelLabel = 'Tujuan';

    protected static ?string $navigationGroup = 'Profil';

    protected static ?string $navigationLabel = 'Tujuan';

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()
            ->where('key', 'goal');
    }

    public static function canCreate(): bool
    {
        return Content::where('key', 'goal')->count() === 0;
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Hidden::make('key')
                    ->default('goal')
                    ->dehydrated(),
                Textarea::make('value')
                    ->label('Tujuan')
                    ->required()
                    ->columnSpan(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('value')
                    ->limit(80)
                    ->label('Tujuan'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListGoals::route('/'),
            'create' => Pages\CreateGoal::route('/create'),
            'edit' => Pages\EditGoal::route('/{record}/edit'),
        ];
    }
}
