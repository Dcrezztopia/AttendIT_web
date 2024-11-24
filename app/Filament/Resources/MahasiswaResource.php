<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MahasiswaResource\Pages;
use App\Filament\Resources\MahasiswaResource\RelationManagers;
use App\Models\Mahasiswa;
use App\Models\Prodi;
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
                // Form Mahasiswa
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
                    ->nullable(),
                Forms\Components\Select::make('prodi')
                    ->label('Program Studi')
                    ->options(fn() => Prodi::all()->pluck('nama_prodi', 'id'))
                    ->required(),
                Forms\Components\Select::make('id_kelas')
                    ->label('Kelas')
                    ->relationship('kelas', 'nama_kelas')
                    ->required(),
                Forms\Components\Hidden::make('id_user') 
                    ->default(fn () => auth()->id()) 
                    ->required(),

                // Form untuk User
                Forms\Components\Fieldset::make('User Information') // Group fields related to user
                    ->label('Informasi User')
                    ->schema([
                        Forms\Components\TextInput::make('user.username')
                            ->label('Username')
                            ->required(),
                        Forms\Components\TextInput::make('user.email')
                            ->label('Email')
                            ->email()
                            ->required(),
                        Forms\Components\TextInput::make('user.password')
                            ->label('Password')
                            ->password()
                            ->required(),
                        Forms\Components\TextInput::make('user.role')
                            ->label('Role')
                            ->default('Mahasiswa')
                            ->disabled(), // Set as disabled so it's not editable
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nim')
                    ->label('NIM')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('nama_mahasiswa')
                    ->label('Nama Mahasiswa')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\ImageColumn::make('foto')
                    ->label('Foto')
                    ->sortable(),
                Tables\Columns\TextColumn::make('prodi')
                    ->label('Program Studi')
                    ->searchable()
                    ->sortable(),
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

    public static function beforeSave(array $data)
    {
        // Pastikan data user ada
        if (isset($data['user']) && !empty($data['user']['username']) && !empty($data['user']['email'])) {
            // Menambahkan logika untuk membuat user baru
            $user = \App\Models\User::create([
                'username' => $data['user']['username'],
                'email' => $data['user']['email'],
                'password' => bcrypt($data['user']['password']),
                'role' => $data['user']['role'] ?? 'mahasiswa', // Role default mahasiswa
            ]);

            // Menyimpan id_user di data mahasiswa
            $data['id_user'] = $user->id; // Pastikan id_user diset ke user yang baru saja dibuat
        }

        // Kembalikan data dengan id_user yang telah diatur
        return $data;
    }
}
