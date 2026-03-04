<?php

namespace App\Filament\Resources\Penawarans\Pages;

use App\Filament\Resources\Penawarans\PenawaranResource;
use Filament\Resources\Pages\CreateRecord;

class CreatePenawaran extends CreateRecord
{
    protected static string $resource = PenawaranResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        if (empty($data['status'])) {
            $data['status'] = 'pending';
        }

        return $data;
    }
}
