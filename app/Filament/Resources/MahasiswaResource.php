<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MahasiswaResource\Pages;
use App\Filament\Resources\MahasiswaResource\RelationManagers;
use App\Models\Mahasiswa;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class MahasiswaResource extends Resource
{
    protected static ?string $model = Mahasiswa::class;

    protected static ?string $navigationIcon = 'heroicon-o-user';

    protected static ?string $navigationLabel = 'Mahasiswa';

    protected static ?string $modelLabel = 'Manage Mahasiswa';

    protected static ?string $navigationGroup = 'Manage User';

    protected static ?string $slug = 'usermahasiswa';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nim')
                    ->label('NIM')
                    ->required()
                    ->unique(ignoreRecord: true),
                Forms\Components\TextInput::make('nama_mahasiswa')
                    ->label('Nama Mahasiswa')
                    ->required(),
                Forms\Components\FileUpload::make('foto')
                    ->label('Foto')
                    ->image()
                    ->required(),
                Forms\Components\TextInput::make('prodi')
                    ->label('Program Studi')
                    ->required(),
                Forms\Components\Select::make('id_user')
                    ->label('User')
                    ->relationship('user', 'username')
                    ->required(),
                Forms\Components\Select::make('id_kelas')
                    ->label('Kelas')
                    ->relationship('kelas', 'nama_kelas')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
{
    return $table
        ->columns([
            Tables\Columns\TextColumn::make('nim')
                ->label('NIM')
                ->searchable(),
            Tables\Columns\TextColumn::make('nama_mahasiswa')
                ->label('Nama Mahasiswa')
                ->searchable(),
            Tables\Columns\ImageColumn::make('foto')
                ->label('Foto')
                ->sortable(),
            Tables\Columns\TextColumn::make('prodi')
                ->label('Program Studi')
                ->searchable(),
            Tables\Columns\TextColumn::make('kelas.nama_kelas')
                ->label('Kelas')
                ->sortable(),
        ])
        ->filters([
            // Tambahkan filter jika diperlukan
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
            'index' => Pages\ListMahasiswas::route('/'),
            'create' => Pages\CreateMahasiswa::route('/create'),
            'edit' => Pages\EditMahasiswa::route('/{record}/edit'),
        ];
    }
}
