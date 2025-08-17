<?php

namespace App\Filament\Resources\RiwayatMedis;

use App\Filament\Resources\RiwayatMedis\Pages\CreateRiwayatMedis;
use App\Filament\Resources\RiwayatMedis\Pages\EditRiwayatMedis;
use App\Filament\Resources\RiwayatMedis\Pages\ListRiwayatMedis;
use App\Filament\Resources\RiwayatMedis\Schemas\RiwayatMedisForm;
use App\Filament\Resources\RiwayatMedis\Tables\RiwayatMedisTable;
use App\Models\RiwayatMedis;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class RiwayatMedisResource extends Resource
{
    protected static ?string $model = RiwayatMedis::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::Beaker;

    public static function form(Schema $schema): Schema
    {
        return RiwayatMedisForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return RiwayatMedisTable::configure($table);
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
            'index' => ListRiwayatMedis::route('/'),
            'create' => CreateRiwayatMedis::route('/create'),
            'edit' => EditRiwayatMedis::route('/{record}/edit'),
        ];
    }
}
