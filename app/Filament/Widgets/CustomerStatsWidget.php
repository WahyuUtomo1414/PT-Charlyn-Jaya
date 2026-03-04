<?php

namespace App\Filament\Widgets;

use App\Models\Penawaran;
use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class CustomerStatsWidget extends StatsOverviewWidget
{
    public static function canView(): bool
    {
        return auth()->user()?->roles()->where('id', 2)->exists() ?? false;
    }

    protected function getStats(): array
    {
        $userId = auth()->id();

        $lastStatus = Penawaran::query()
            ->where('created_by', $userId)
            ->latest('created_at')
            ->value('status');

        return [
            Stat::make('Status Penawaran Terakhir', $lastStatus ?? '-')
                ->description('Terakhir diajukan')
                ->descriptionIcon('heroicon-m-clock')
                ->color('primary'),
            Stat::make('Penawaran Pending', Penawaran::query()->where('created_by', $userId)->where('status', 'pending')->count())
                ->description('Menunggu persetujuan')
                ->descriptionIcon('heroicon-m-exclamation-circle')
                ->color('warning'),
            Stat::make('Total Penawaran', Penawaran::query()->where('created_by', $userId)->count())
                ->description('Seluruh penawaran')
                ->descriptionIcon('heroicon-m-document-text')
                ->color('info'),
        ];
    }
}
