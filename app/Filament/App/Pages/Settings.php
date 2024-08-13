<?php

namespace App\Filament\App\Pages;

use Filament\Pages\Page;
use App\Models\Movie;

class Settings extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'filament.app.pages.settings';
    protected static ?string $title = 'Rent Movie';

    public function getMovies(){
        return Movie::all()->where('status_movie',true);
    }
}