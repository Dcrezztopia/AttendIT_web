<?php

namespace App\Filament\Resources\MahasiswaResource\Pages;

use App\Filament\Resources\MahasiswaResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditMahasiswa extends EditRecord
{
    protected static string $resource = MahasiswaResource::class;

    public function getTitle(): string
    {
        return 'Edit Data Mahasiswa';
    }

    protected function getActions(): array
    {
        return [
            \Filament\Actions\CreateAction::make()
                ->label('Simpan')
        ];
    }

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
