<?php

namespace App\Filament\Resources\DosenResource\Pages;

use App\Filament\Resources\DosenResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListDosens extends ListRecords
{
    protected static string $resource = DosenResource::class;

    public function getTitle(): string
    {
        return 'Daftar Dosen';
    }
    
    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()
            ->label('Tambah Data Dosen'),
        ];
    }
}
