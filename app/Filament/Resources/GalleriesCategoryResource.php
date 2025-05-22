<?php

namespace App\Filament\Resources;

use App\Filament\Resources\GalleriesCategoryResource\Pages;
use App\Filament\Resources\GalleriesCategoryResource\RelationManagers;
use App\Models\GalleriesCategory;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

use function Laravel\Prompts\text;

class GalleriesCategoryResource extends Resource
{
    protected static ?string $model = GalleriesCategory::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationLabel = 'Kategori Galeri';

    protected static ?string $pluralModelLabel = 'Kategori Galeri';

    protected static ?string $navigationGroup = 'Galeri';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')
                    ->label('Nama Kategori')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->label('Nama Kategori'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
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
            'index' => Pages\ListGalleriesCategories::route('/'),
            'create' => Pages\CreateGalleriesCategory::route('/create'),
            'edit' => Pages\EditGalleriesCategory::route('/{record}/edit'),
        ];
    }
}
