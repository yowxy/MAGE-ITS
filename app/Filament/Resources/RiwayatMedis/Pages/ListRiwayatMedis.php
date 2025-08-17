<?php

namespace App\Filament\Resources\RiwayatMedis\Pages;

use App\Filament\Resources\RiwayatMedis\RiwayatMedisResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListRiwayatMedis extends ListRecords
{
    protected static string $resource = RiwayatMedisResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
