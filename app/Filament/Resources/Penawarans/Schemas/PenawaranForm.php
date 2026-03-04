<?php

namespace App\Filament\Resources\Penawarans\Schemas;

use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Schema;

class PenawaranForm
{
    public static function configure(Schema $schema): Schema
    {
        $isAdmin = fn (): bool => auth()->user()?->roles()->where('id', 1)->exists() ?? false;

        return $schema
            ->components([
                Select::make('layanan_id')
                    ->relationship('layanan', 'nama')
                    ->searchable()
                    ->preload(),
                TextInput::make('nama_perusahaan'),
                Textarea::make('alamat')
                    ->rows(3),
                DateTimePicker::make('tanggal_permintaan')
                    ->required()
                    ->native(false)
                    ->displayFormat('d-m-Y H:i')
                    ->format('Y-m-d H:i:s'),
                Textarea::make('deskripsi')
                    ->columnSpanFull(),
                FileUpload::make('file')
                    ->directory('penawaran')
                    ->columnSpanFull(),
                Textarea::make('catatan')
                    ->rows(3)
                    ->columnSpanFull(),
                Select::make('status')
                    ->options([
                        'pending' => 'Pending',
                        'approve' => 'Approve',
                        'reject' => 'Reject',
                    ])
                    ->required()
                    ->default('pending')
                    ->visible(fn () => $isAdmin())
                    ->dehydrated(fn () => true)
                    ->dehydrateStateUsing(fn ($state) => $state ?? 'pending'),
                Toggle::make('active')
                    ->visible(fn () => $isAdmin())
                    ->default(true)
                    ->required(),

            ]);
    }
}
