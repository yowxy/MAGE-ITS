<?php

namespace App\Filament\Resources\RiwayatMedis\Schemas;

use App\Models\User;
use Filament\Facades\Filament;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class RiwayatMedisForm
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
                    ->label('User')

                    ->label('Nama')
                    ->required()
                    ->disabled()
                    ->default(fn () => Filament::auth()->user()?->name),


                Hidden::make('doctor_id')
                    ->default(fn () => User::where('role', 'dokter')->first()?->id),
                TextInput::make('doctor_name')
                ->label('Nama dokter')
                    ->required()
                     ->disabled()
                   ->default(fn () => User::where('role', 'dokter')->first()?->name),



                DateTimePicker::make('visit_date')
                    ->required(),
                TextInput::make('no_identity')
                    ->required(),
                TextInput::make('parents_name')
                    ->required(),
                TextInput::make('parental employment')
                    ->required(),
                Textarea::make('treatment')
                    ->required()
                    ->columnSpanFull(),
                Textarea::make('notes')
                    ->required()
                    ->columnSpanFull(),
            ]);
    }
}
