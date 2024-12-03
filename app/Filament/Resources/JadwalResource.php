<?php

namespace App\Filament\Resources;

use App\Filament\Resources\JadwalResource\Pages;
use App\Filament\Resources\JadwalResource\RelationManagers;
use App\Models\Jadwal;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class JadwalResource extends Resource
{
    protected static ?string $model = Jadwal::class;

    protected static ?string $navigationIcon = 'heroicon-o-calendar-days';

    protected static ?string $navigationLabel = 'Jadwal';

    protected static ?string $modelLabel = 'Manage Jadwal';

    protected static ?string $navigationGroup = 'Manage Jadwal';

    protected static ?string $slug = 'jadwal';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('kelas.nama_kelas')
                    ->label('Kelas')
                    ->sortable(),
                Tables\Columns\TextColumn::make('matkulDosen.id_matkul')
                    ->label('Mata Kuliah')
                    ->sortable(),
                Tables\Columns\TextColumn::make('matkulDosen.id_dosen')
                    ->label('Dosen')
                    ->sortable(),
                Tables\Columns\TextColumn::make('hari')
                    ->label('Hari'),
                Tables\Columns\TextColumn::make('waktu_mulai')
                    ->label('Waktu Mulai'),
                Tables\Columns\TextColumn::make('waktu_selesai')
                    ->label('Waktu Selesai'),
                Tables\Columns\TextColumn::make('ruang_kelas')
                    ->label('Ruang Kelas'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListJadwals::route('/'),
            'create' => Pages\CreateJadwal::route('/create'),
            'edit' => Pages\EditJadwal::route('/{record}/edit'),
        ];
    }
}
