<?php

namespace App\Filament\Resources\Users\Schemas;

use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Role;

class UserForm
{
    public static function configure(Schema $schema): Schema
    {
        $isAdmin = fn (): bool => Auth::user()?->roles()->where('id', 1)->exists() ?? false;

        return $schema
            ->components([
                TextInput::make('name')
                    ->required(),
                TextInput::make('email')
                    ->label('Email address')
                    ->email()
                    ->required(),
                TextInput::make('no_tlpn'),
                Select::make('roles')
                    ->visible($isAdmin)
                    ->options(
                        Role::all()->pluck('name', 'id')
                    )
                    ->required(),
                TextInput::make('password')
                    ->password()
                    ->required(),
                Toggle::make('active')
                    ->required()
                    ->visible($isAdmin),

            ]);
    }
}
