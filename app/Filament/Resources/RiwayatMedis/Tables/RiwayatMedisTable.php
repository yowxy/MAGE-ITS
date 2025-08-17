<?php

namespace App\Filament\Resources\RiwayatMedis\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class RiwayatMedisTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('users.name')
                ->label('Admin'),
                // TextColumn::make('doctor_id'),
                TextColumn::make('visit_date')
                    ->dateTime(),
                TextColumn::make('no_identity')
                    ->searchable(),
                TextColumn::make('parents_name')
                    ->searchable(),
                TextColumn::make('parental employment')
                    ->searchable(),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                 EditAction::make()
                    ->icon('heroicon-s-pencil'),
                DeleteAction::make()
                ->icon('heroicon-s-trash'),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
