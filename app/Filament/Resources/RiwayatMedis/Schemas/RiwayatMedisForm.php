<?php

namespace App\Filament\Resources\RiwayatMedis\Schemas;

use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class RiwayatMedisForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('users_id')
                    ->required()
                    ->numeric(),
                TextInput::make('doctor_id')
                    ->required()
                    ->numeric(),
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
