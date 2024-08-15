<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MovieResource\Pages;
use App\Models\Movie;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Filament\Tables\Filters\Filter;
use Filament\Tables\Filters\SelectFilter;
use Filament\Forms\Components\Select;
use pxlrbt\FilamentExcel\Actions\Tables\ExportBulkAction;

class MovieResource extends Resource
{
    protected static ?string $model = Movie::class;

    protected static ?string $navigationIcon = 'heroicon-o-film';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->required()
                    ->maxLength(255),
                Forms\Components\FileUpload::make('movie_image')
                    ->image(),
                Forms\Components\Textarea::make('description')
                    ->columnSpanFull(),
                Forms\Components\TextInput::make('price')
                    ->required()
                    ->numeric()
                    ->prefix('$'),
                Forms\Components\TextInput::make('points_rental')
                    ->required()
                    ->numeric()
                    ->default(0),
                Forms\Components\TextInput::make('points_required')
                    ->required()
                    ->numeric()
                    ->default(0),
                Forms\Components\TextInput::make('stock')
                    ->required()
                    ->numeric()
                    ->default(0),
                Select::make('category')
                    ->multiple()
                    ->searchable()
                    ->options([
                        'accion' => 'Acción',
                        'terror' => 'Terror',
                        'suspenso' => 'Suspenso',
                        'romantica' => 'Romantica',
                        'aventura' => 'Aventura',
                        'animada' => 'Animada',
                        'ciencia ficcion' => 'Ciencia ficción',
                        'drama' => 'Drama',
                        'fantasia' => 'Fantasía',
                        'comedia' => 'Comedia',
                        'documental' => 'Documental',
                        'musical' => 'Musical',
                        'biografico' => 'Biográfico',
                        'historico' => 'Histórico',
                        'superheroes' => 'Superheroes',
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->searchable(),
                Tables\Columns\ImageColumn::make('movie_image'),
                Tables\Columns\TextColumn::make('price')
                    ->money()
                    ->sortable(),
                Tables\Columns\TextColumn::make('points_rental')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('points_required')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('stock')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('category')
                    ->searchable(),
                Tables\Columns\IconColumn::make('status_movie')
                    ->boolean(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                Filter::make('status_movie')
                    ->toggle()
                    ->query(fn (Builder $query): Builder => $query->where('status_movie', true)),
                SelectFilter::make('category')
                    ->multiple()
                    ->searchable()
                    ->options([
                        'accion' => 'Acción',
                        'terror' => 'Terror',
                        'suspenso' => 'Suspenso',
                        'romantica' => 'Romantica',
                        'aventura' => 'Aventura',
                        'animada' => 'Animada',
                        'ciencia ficcion' => 'Ciencia ficción',
                        'drama' => 'Drama',
                        'fantasia' => 'Fantasía',
                        'comedia' => 'Comedia',
                        'documental' => 'Documental',
                        'musical' => 'Musical',
                        'biografico' => 'Biográfico',
                        'historico' => 'Histórico',
                        'superheroes' => 'Superheroes',
                    ])
                    ->query(function (Builder $query, array $data): Builder {
                        return $query->where(function ($query) use ($data) {
                            foreach ($data as $category) {
                                $query->orWhereJsonContains('category', $category);
                            }
                        });
                    }),
            ])
            ->actions([
                Tables\Actions\ActionGroup::make([
                    Tables\Actions\EditAction::make(),
                    Tables\Actions\ViewAction::make(),
                    Tables\Actions\DeleteAction::make(),

                ])
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                    ExportBulkAction::make(),
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
            'index' => Pages\ListMovies::route('/'),
            'create' => Pages\CreateMovie::route('/create'),
            'edit' => Pages\EditMovie::route('/{record}/edit'),
        ];
    }
}