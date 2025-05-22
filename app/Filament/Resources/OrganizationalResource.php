<?php

namespace App\Filament\Resources;

use App\Filament\Resources\OrganizationalResource\Pages;
use App\Filament\Resources\OrganizationalResource\RelationManagers;
use App\Models\Content;
use App\Models\Organizational;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class OrganizationalResource extends Resource
{
    protected static ?string $model = Content::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationLabel = 'Struktur Organisasi';

    protected static ?string $pluralModelLabel = 'Struktur Organisasi';

    protected static ?string $navigationGroup = 'Profil';

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()
            ->where('key', 'organizational');
    }

    // public static function canCreate(): bool
    // {
    //     return Content::where('key', 'organizational')->count() === 0;
    // }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Hidden::make('key')
                    ->default('organizational')
                    ->dehydrated(),
                FileUpload::make('value')
                    ->label('Struktur Organisasi')
                    ->directory('organizational')
                    ->image()
                    ->required()
                    ->columnSpan(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('value')
                    ->label('Struktur Organisasi'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
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
            'index' => Pages\ListOrganizationals::route('/'),
            'create' => Pages\CreateOrganizational::route('/create'),
            'edit' => Pages\EditOrganizational::route('/{record}/edit'),
        ];
    }
}
