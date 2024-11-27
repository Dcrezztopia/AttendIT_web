<?php

namespace App\Filament\Resources\DosenResource\Pages;

use App\Filament\Resources\DosenResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateDosen extends CreateRecord
{
    protected static string $resource = DosenResource::class;

    public function getTitle(): string
    {
        return 'Tambah Data Dosen';
    }

    protected function mutateFormDataBeforeCreate(array $data): array 
    { 
        return DosenResource::beforeSave($data); 
    }
}
