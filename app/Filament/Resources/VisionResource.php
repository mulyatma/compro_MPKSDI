<?php

namespace App\Filament\Resources;

use App\Filament\Resources\VisionResource\Pages;
use App\Filament\Resources\VisionResource\RelationManagers;
use App\Models\Content;
use App\Models\Vision;
use Filament\Forms;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class VisionResource extends Resource
{
    protected static ?string $model = Content::class;

    protected static ?string $pluralModelLabel = 'Visi';

    protected static ?string $navigationGroup = 'Profil';

    protected static ?string $navigationLabel = 'Visi';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()
            ->where('key', 'vision');
    }

    public static function canCreate(): bool
    {
        return Content::where('key', 'vision')->count() === 0;
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Hidden::make('key')
                    ->default('vision')
                    ->dehydrated(),
                Textarea::make('value')
                    ->label('Visi')
                    ->required()
                    ->columnSpan(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('value')
                    ->label('Visi')
                    ->limit(80),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                //
            ]);
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
            'index' => Pages\ListVisions::route('/'),
            'create' => Pages\CreateVision::route('/create'),
            'edit' => Pages\EditVision::route('/{record}/edit'),
        ];
    }
}
