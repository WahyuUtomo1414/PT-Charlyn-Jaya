<?php

namespace App\Filament\Resources\Penawarans\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ForceDeleteBulkAction;
use Filament\Actions\RestoreBulkAction;
use Filament\Actions\Action;
use Filament\Actions\ViewAction;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\TrashedFilter;
use Filament\Tables\Table;

class PenawaransTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('layanan.nama')
                    ->label('Layanan')
                    ->searchable(),
                TextColumn::make('nama_perusahaan')
                    ->searchable(),
                TextColumn::make('tanggal_permintaan')
                    ->date()
                    ->sortable(),
                TextColumn::make('status')
                    ->searchable(),
                TextColumn::make('createdBy.name')
                    ->label('Created By')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('updatedBy.name')
                    ->label('Updated By')
                    ->searchable()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('deletedBy.name')
                    ->label('Deleted By')
                    ->searchable()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('deleted_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                TrashedFilter::make(),
            ])
            ->recordActions([
                ViewAction::make(),
                Action::make('print')
                    ->label('Print')
                    ->icon('heroicon-m-printer')
                    ->visible(fn ($record): bool => $record->status === 'approve')
                    ->url(fn ($record): string => route('penawaran.print', $record))
                    ->openUrlInNewTab(),
                EditAction::make()
                    ->visible(fn ($record): bool => $record->status !== 'approve'),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make()
                        ->action(function ($records): void {
                            $records
                                ->reject(fn ($record) => $record->status === 'approve')
                                ->each->delete();
                        }),
                    ForceDeleteBulkAction::make(),
                    RestoreBulkAction::make(),
                ]),
            ]);
    }
}
