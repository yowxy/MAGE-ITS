<?php

namespace App\Filament\Resources\Artikels\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Filament\Facades\Filament;

class ArtikelsTable
{
    public static function configure(Table $table): Table
    {
        return $table

          ->modifyQueryUsing(function (Builder $query) {
                // cek user login
                $user = Filament::auth()->user();

                if ($user && $user->role === 'admin') {
                    // filter hanya artikel milik admin yang login
                    $query->where('users_id', $user->id);
                }

                return $query;
            })


            ->columns([
                TextColumn::make('users.name')
                    // ->defaut(fn() => Filament::auth()->user()?->name)
                    ->sortable(),
                TextColumn::make('title')
                    ->searchable(),
                TextColumn::make('content')
                    ->searchable(),
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
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
