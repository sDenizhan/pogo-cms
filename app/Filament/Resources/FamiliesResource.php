<?php

namespace App\Filament\Resources;

use App\Filament\Resources\FamiliesResource\Pages;
use App\Filament\Resources\FamiliesResource\RelationManagers;
use App\Models\Family;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;

class FamiliesResource extends Resource
{
    protected static ?string $navigationGroup = 'Pokemon Yönetimi';

    protected static ?string $pluralLabel = 'Familyalar';

    protected static ?string $label = 'Familya';

    protected static ?string $navigationLabel = 'Familyalar';

    protected static ?string $model = Family::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //

                Forms\Components\Fieldset::make('Familya Ekle')
                    ->schema([

                        Forms\Components\TextInput::make('name')
                            ->label('Familya Adı:')
                            ->required()
                    ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
                Tables\Columns\TextColumn::make('name')->label('Familya Adı')
            ])
            ->filters([
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
            'index' => Pages\ListFamilies::route('/'),
            'create' => Pages\CreateFamilies::route('/create'),
            'edit' => Pages\EditFamilies::route('/{record}/edit'),
        ];
    }
}
