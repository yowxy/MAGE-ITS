<?php

namespace App\Filament\Resources\Artikels\Schemas;

use Filament\Facades\Filament;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class ArtikelForm
{
    public static function configure(Schema $schema): Schema
    {
       return $schema
            ->components([
                // Simpan user id secara otomatis (hidden field)
                Hidden::make('users_id')
                    ->default(fn () => Filament::auth()->id()),

                // Tampilkan nama user (readonly, cuma informasi)
                TextInput::make('user_name')
                    ->default(fn () => Filament::auth()->user()?->name)
                    ->disabled()
                    ->label('User'),

                TextInput::make('title')
                    ->required(),

                TextInput::make('content')
                    ->required(),
            ]);
    }
}
