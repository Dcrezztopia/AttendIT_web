<?php

namespace App\Filament\Resources\MahasiswaResource\Pages;

use App\Filament\Resources\MahasiswaResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateMahasiswa extends CreateRecord
{
    protected static string $resource = MahasiswaResource::class;

    public function getTitle(): string
    {
        return 'Tambah Data Mahasiswa';
    }

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        return MahasiswaResource::beforeSave($data);
    }
}
