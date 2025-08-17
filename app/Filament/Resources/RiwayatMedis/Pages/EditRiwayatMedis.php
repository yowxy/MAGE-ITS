<?php

namespace App\Filament\Resources\RiwayatMedis\Pages;

use App\Filament\Resources\RiwayatMedis\RiwayatMedisResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditRiwayatMedis extends EditRecord
{
    protected static string $resource = RiwayatMedisResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
