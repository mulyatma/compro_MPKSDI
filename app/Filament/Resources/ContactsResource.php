<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ContactsResource\Pages;
use App\Filament\Resources\ContactsResource\RelationManagers;
use App\Models\Contacts;
use App\Models\Content;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ContactsResource extends Resource
{
    protected static ?string $model = Content::class;

    protected static ?string $pluralModelLabel = 'Kontak';

    protected static ?string $navigationGroup = 'Profil';

    protected static ?string $navigationLabel = 'Kontak';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function getEloquentQuery(): \Illuminate\Database\Eloquent\Builder
    {
        return parent::getEloquentQuery()
            ->where('key', 'like', 'contact_%');
    }

    public static function form(Form $form): Form
    {

        $availableKeys = [
            'contact_email' => 'Email',
            'contact_phone' => 'Telepon',
            'contact_youtube' => 'YouTube',
            'contact_facebook' => 'Facebook',
            'contact_instagram' => 'Instagram',
            'contact_whatsapp' => 'WhatsApp',
        ];

        $existingKeys = Content::where('key', 'like', 'contact_%')->pluck('key')->toArray();

        $remainingKeys = array_diff_key($availableKeys, array_flip($existingKeys));
        return $form
            ->schema([
                Forms\Components\Select::make('key')
                    ->label('Tipe Kontak')
                    ->options($remainingKeys)
                    ->required(),

                Forms\Components\TextInput::make('value')
                    ->helperText('Isikan kontak dengan format link kecuali untuk Telepon dan Email')
                    ->label('Isi Kontak')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table

            ->columns([
                Tables\Columns\TextColumn::make('key')
                    ->label('Tipe Kontak')
                    ->searchable()
                    ->sortable()
                    ->formatStateUsing(function ($state) {
                        return match ($state) {
                            'contact_email' => 'Email',
                            'contact_phone' => 'Telepon',
                            'contact_youtube' => 'Alamat',
                            'contact_facebook' => 'Facebook',
                            'contact_instagram' => 'Instagram',
                            'contact_whatsapp' => 'WhatsApp',
                            default => ucfirst(str_replace('contact_', '', $state)),
                        };
                    }),
                Tables\Columns\TextColumn::make('value')
                    ->label('Isi Kontak')
                    ->searchable()
                    ->sortable(),
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
            'index' => Pages\ListContacts::route('/'),
            'create' => Pages\CreateContacts::route('/create'),
            'edit' => Pages\EditContacts::route('/{record}/edit'),
        ];
    }
}
