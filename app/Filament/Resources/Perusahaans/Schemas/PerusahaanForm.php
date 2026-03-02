<?php

namespace App\Filament\Resources\Perusahaans\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class PerusahaanForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('nama')
                    ->required(),
                TextInput::make('alamat'),
                TextInput::make('logo'),
                Textarea::make('tentang_kami')
                    ->columnSpanFull(),
                Textarea::make('filosofi')
                    ->columnSpanFull(),
                Textarea::make('visi')
                    ->columnSpanFull(),
                TextInput::make('misi'),
                TextInput::make('email')
                    ->label('Email address')
                    ->email(),
                TextInput::make('no_wa'),
                TextInput::make('foto'),
                TextInput::make('media_sosial'),
                Toggle::make('active')
                    ->required(),
                TextInput::make('created_by')
                    ->required()
                    ->numeric()
                    ->default(1),
                TextInput::make('updated_by')
                    ->numeric(),
                TextInput::make('deleted_by')
                    ->numeric(),
            ]);
    }
}
