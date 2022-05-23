<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ItemsResource\Pages;
use App\Filament\Resources\ItemsResource\RelationManagers;
use App\Models\Items;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;

class ItemsResource extends Resource
{
    protected static ?string $navigationGroup = 'Pokemon Yönetimi';

    protected static ?string $navigationLabel = 'İtemler';

    protected static ?string $label = 'İtem';

    protected static ?string $pluralLabel = 'İtemler';

    protected static ?string $model = Items::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
                Forms\Components\TextInput::make('name')
                    ->label('Item Adı:')
                    ->required()
                    ->columnSpan(4),

                Forms\Components\RichEditor::make('description')
                    ->label('Item Açıklaması:')
                    ->required()
                    ->columnSpan(4)
                    ->extraAttributes([
                        'style' => 'min-height: 200px'
                    ]),

                Forms\Components\FileUpload::make('image')
                    ->label('Item Resmi:')

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
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
            'index' => Pages\ListItems::route('/'),
            'create' => Pages\CreateItems::route('/create'),
            'edit' => Pages\EditItems::route('/{record}/edit'),
        ];
    }
}
