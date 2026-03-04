<?php

namespace App\Filament\Resources\Penawarans\Pages;

use App\Filament\Resources\Penawarans\PenawaranResource;
use Filament\Actions\Action;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewPenawaran extends ViewRecord
{
    protected static string $resource = PenawaranResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Action::make('print')
                ->label('Print')
                ->icon('heroicon-m-printer')
                ->visible(fn (): bool => $this->record?->status === 'approve')
                ->url(fn (): string => route('penawaran.print', $this->record))
                ->openUrlInNewTab(),
            EditAction::make()
                ->visible(fn (): bool => $this->record?->status !== 'approve'),
        ];
    }
}
