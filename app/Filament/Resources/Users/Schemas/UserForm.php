<?php

namespace App\Filament\Resources\Users\Schemas;

use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class UserForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required(),
                TextInput::make('username')
                    ->label('username')
                    ->required(),
                Select::make('role')
                    ->options(['pasien' => 'Pasien', 'admin' => 'Admin', 'dokter' => 'Dokter'])
                    ->required(),
                DateTimePicker::make('tanggal')
                    ->required(),
                TextInput::make('telephone')
                    ->tel()
                    ->required()
                    ->numeric(),
                TextInput::make('age')
                    ->required()
                    ->numeric(),
                TextInput::make('job'),
                TextInput::make('education'),
                TextInput::make('address')
                    ->required(),
                Select::make('blood_type')
                    ->options([
            'A+' => 'A+',
            'A-' => 'A ',
            'B+' => 'B+',
            'B-' => 'B ',
            'AB+' => 'A b+',
            'AB-' => 'A b ',
            'O+' => 'O+',
            'O-' => 'O ',
        ]),
                TextInput::make('email')
                    ->label('Email address')
                    ->email()
                    ->required(),
                TextInput::make('password')
                    ->password()
                    ->required(),
            ]);
    }
}
