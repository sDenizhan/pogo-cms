<?php

namespace App\Filament\Resources;

use App\Filament\Resources\GenerationsResource\Pages;
use App\Filament\Resources\GenerationsResource\RelationManagers;
use App\Models\Generations;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;

class GenerationsResource extends Resource
{
    protected static ?string $navigationGroup = 'Pokemon Yönetimi';

    protected static ?int $navigationSort = 2;

    protected static ?string $navigationLabel = 'Jenerasyonlar';

    protected static ?string $label = 'Jenerasyon';

    protected static ?string $pluralLabel = 'Jenerasyonlar';

    protected static ?string $model = Generations::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
                //
                Forms\Components\Fieldset::make('Jenerasyon Ekle')
                    ->schema([

                        Forms\Components\TextInput::make('name')
                            ->label('Jenerasyon')
                            ->required()
                    ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')->label('Jenerasyon Adı')
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
            'index' => Pages\ListGenerations::route('/'),
            'create' => Pages\CreateGenerations::route('/create'),
            'edit' => Pages\EditGenerations::route('/{record}/edit'),
        ];
    }
}
