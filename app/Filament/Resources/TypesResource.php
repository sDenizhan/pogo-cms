<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TypesResource\Pages;
use App\Filament\Resources\TypesResource\RelationManagers;
use App\Models\Types;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;

class TypesResource extends Resource
{
    protected static ?string $navigationGroup = 'Pokemon Yönetimi';

    protected static ?int $navigationSort = 2;

    protected static ?string $label = 'Tür';

    protected static ?string $pluralLabel = 'Türler';

    protected static ?string $model = Types::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
                Forms\Components\Fieldset::make('Tür Ekle')
                    ->schema([

                        Forms\Components\TextInput::make('name')
                            ->label('Tür')
                            ->required()
                    ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
                Tables\Columns\TextColumn::make('name')->label('Tür')
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
            'index' => Pages\ListTypes::route('/'),
            'create' => Pages\CreateTypes::route('/create'),
            'edit' => Pages\EditTypes::route('/{record}/edit'),
        ];
    }
}
