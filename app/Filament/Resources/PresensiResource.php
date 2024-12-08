<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PresensiResource\Pages;
use App\Models\Presensi;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
// use Filament\Resources\Table;

class PresensiResource extends Resource
{
    protected static ?string $model = Presensi::class;

    protected static ?string $navigationIcon = 'heroicon-o-document-check';

    protected static ?string $navigationLabel = 'Log Presensi';

    protected static ?string $navigationGroup = 'Manage Presensi';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('id_jadwal')
                    ->relationship('jadwal', 'id')
                    ->required(),
                Forms\Components\Select::make('id_mahasiswa')
                    ->relationship('mahasiswa', 'id')
                    ->required(),
                Forms\Components\TextInput::make('pertemuan_ke')
                    ->required()
                    ->numeric(),
                Forms\Components\DatePicker::make('tanggal_presensi')
                    ->required(),
                Forms\Components\Select::make('status_presensi')
                    ->options([
                        'hadir' => 'Hadir',
                        'alpha' => 'Alpha',
                        'izin' => 'Izin',
                        'sakit' => 'Sakit',
                    ])
                    ->required(),
                Forms\Components\TextInput::make('tahun_ajaran')
                    ->required()
                    ->maxLength(9),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('jadwal.id')
                    ->label('Jadwal')
                    ->sortable(),
                Tables\Columns\TextColumn::make('mahasiswa.id')
                    ->label('Mahasiswa')
                    ->sortable(),
                Tables\Columns\TextColumn::make('pertemuan_ke')
                    ->label('Pertemuan Ke')
                    ->sortable(),
                Tables\Columns\TextColumn::make('tanggal_presensi')
                    ->label('Tanggal Presensi')
                    ->sortable(),
                Tables\Columns\BadgeColumn::make('status_presensi')
                    ->label('Status Presensi')
                    ->sortable(),
                Tables\Columns\TextColumn::make('tahun_ajaran')
                    ->label('Tahun Ajaran')
                    ->sortable(),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('status_presensi')
                    ->label('Status Presensi')
                    ->options([
                        'hadir' => 'Hadir',
                        'alpha' => 'Alpha',
                        'izin' => 'Izin',
                        'sakit' => 'Sakit',
                    ]),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPresensis::route('/'),
            'create' => Pages\CreatePresensi::route('/create'),
            'edit' => Pages\EditPresensi::route('/{record}/edit'),
        ];
    }
}
