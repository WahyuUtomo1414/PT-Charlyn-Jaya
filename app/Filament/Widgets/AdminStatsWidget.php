<?php

namespace App\Filament\Widgets;

use App\Models\Customer;
use App\Models\Penawaran;
use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class AdminStatsWidget extends StatsOverviewWidget
{
    public static function canView(): bool
    {
        return auth()->user()?->roles()->where('id', 1)->exists() ?? false;
    }

    protected function getStats(): array
    {
        return [
            Stat::make('Penawaran Pending', Penawaran::query()->where('status', 'pending')->count())
                ->description('Menunggu persetujuan')
                ->descriptionIcon('heroicon-m-clock')
                ->color('warning'),
            Stat::make('Total Customer', Customer::query()->count())
                ->description('Seluruh customer terdaftar')
                ->descriptionIcon('heroicon-m-users')
                ->color('success'),
            Stat::make('Total Penawaran', Penawaran::query()->count())
                ->description('Seluruh penawaran')
                ->descriptionIcon('heroicon-m-document-text')
                ->color('info'),
        ];
    }
}
