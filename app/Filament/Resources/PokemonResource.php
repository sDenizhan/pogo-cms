<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PokemonResource\Pages;
use App\Filament\Resources\PokemonResource\RelationManagers;
use App\Models\Family;
use App\Models\Generations;
use App\Models\Pokemon;
use App\Models\Types;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;

class PokemonResource extends Resource
{
    protected static ?string $navigationGroup = 'Pokemon Yönetimi';

    protected static ?int $navigationSort = 1;

    protected static ?string $navigationLabel = 'Pokemonlar';

    protected static ?string $label = 'Pokemon';

    protected static ?string $pluralLabel = 'Pokemonlar';

    protected static ?string $model = Pokemon::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //

                Forms\Components\Fieldset::make('Pokemon Ekle')
                    ->schema([

                        Forms\Components\Tabs::make('pokemon_data')
                            ->label('Bilgiler')
                            ->columns(4)
                            ->columnSpan(4)
                            ->schema([

                                Forms\Components\Tabs\Tab::make('general')
                                    ->label('Genel Bilgiler')
                                    ->schema([

                                        Forms\Components\TextInput::make('name')
                                            ->label('Pokemon Adı:')
                                            ->required()
                                            ->columnSpan(4),

                                        Forms\Components\Select::make('genId')
                                            ->label('Jenerasyon:')
                                            ->options(Generations::all()->pluck('name', 'id')->toArray())
                                            ->required()
                                            ->placeholder('Jenerasyon Seçin')
                                            ->columnSpan(1),

                                        Forms\Components\Select::make('familyId')
                                            ->label('Familya:')
                                            ->options(Family::all()->pluck('name', 'id')->toArray())
                                            ->required()
                                            ->placeholder('Familya Seçin')
                                            ->columnSpan(1),

                                        Forms\Components\MultiSelect::make('typeIds')
                                            ->label('Pokemon Türü:')
                                            ->options(Types::all()->pluck('name', 'id')->toArray())
                                            ->required()
                                            ->placeholder('Tür Seçin')
                                            ->columnSpan(2),

                                        Forms\Components\TextInput::make('max_cp')
                                            ->label('Max CP:'),

                                        Forms\Components\TextInput::make('base_attack')
                                            ->label('Temel Atak:'),

                                        Forms\Components\TextInput::make('base_defence')
                                            ->label('Temel Defans:'),

                                        Forms\Components\TextInput::make('base_stamina')
                                            ->label('Temel HP:'),

                                        Forms\Components\TextInput::make('weight')
                                            ->label('Boy:'),

                                        Forms\Components\TextInput::make('height')
                                            ->label('Ağırlık:'),

                                        Forms\Components\Select::make('category')
                                            ->label('Kategori:')
                                            ->options([
                                                'legend' => 'Efsane',
                                                'mystic' => 'Mistik',
                                                'rare' => 'Nadir',
                                                'normal' => 'Normal'
                                            ])
                                    ]),

                                Forms\Components\Tabs\Tab::make('evolutions')
                                    ->label('Evrim:')
                                    ->schema([

                                        Forms\Components\Repeater::make('types')
                                            ->label('Evrim:')
                                            ->schema([

                                                Forms\Components\Select::make('pokemonId')
                                                    ->label('Evrimleşecek Pokemon:')
                                                    ->options(Pokemon::all()->pluck('name', 'id')->toArray())
                                                    ->required()
                                                    ->placeholder('Pokemon Seçin')
                                                    ->columnSpan(2),


                                            ])
                                            ->columnSpan(4)
                                            ->createItemButtonLabel('Evrim Ekle')
                                    ])


                            ])



                    ])
                    ->columns(4)

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
            'index' => Pages\ListPokemon::route('/'),
            'create' => Pages\CreatePokemon::route('/create'),
            'edit' => Pages\EditPokemon::route('/{record}/edit'),
        ];
    }
}
