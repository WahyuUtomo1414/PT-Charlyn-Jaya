<?php

namespace App\Filament\Resources\Portofolios\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class PortofolioForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('customer_id')
                    ->relationship('customer', 'nama')
                    ->searchable()
                    ->preload(),
                Select::make('layanan_id')
                    ->relationship('layanan', 'nama')
                    ->searchable()
                    ->preload(),
                Textarea::make('uraian')
                    ->columnSpanFull(),
                DatePicker::make('tahun_pekerjaan'),
                TextInput::make('status_pekerjaan'),
                Toggle::make('active')
                    ->required(),

            ]);
    }
}
