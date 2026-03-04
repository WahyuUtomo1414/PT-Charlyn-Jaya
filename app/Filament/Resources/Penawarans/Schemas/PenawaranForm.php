<?php

namespace App\Filament\Resources\Penawarans\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class PenawaranForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('layanan_id')
                    ->relationship('layanan', 'nama')
                    ->searchable()
                    ->preload(),
                TextInput::make('nama_perusahaan'),
                TextInput::make('alamat'),
                Textarea::make('deskripsi')
                    ->columnSpanFull(),
                DatePicker::make('tanggal_permintaan'),
                FileUpload::make('file')
                    ->directory('penawaran')
                    ->columnSpanFull(),
                TextInput::make('status'),
                TextInput::make('catatan'),
                Toggle::make('active')
                    ->required(),

            ]);
    }
}
