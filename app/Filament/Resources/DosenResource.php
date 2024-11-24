<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DosenResource\Pages;
use App\Filament\Resources\DosenResource\RelationManagers;
use App\Models\Dosen;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class DosenResource extends Resource
{
    protected static ?string $model = Dosen::class;

    protected static ?string $navigationIcon = 'heroicon-o-user';

    protected static ?string $navigationLabel = 'Dosen';

    protected static ?string $modelLabel = 'Manage Dosen';

    protected static ?string $navigationGroup = 'Manage User';

    protected static ?string $slug = 'userdosen';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                // Form Dosen
                Forms\Components\TextInput::make('nidn')
                    ->label('NIDN')
                    ->required()
                    ->unique(ignoreRecord: true),
                Forms\Components\TextInput::make('nama_dosen')
                    ->label('Nama Dosen')
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
                            ->default('Dosen')
                            ->disabled(), // Set as disabled so it's not editable
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nidn')
                    ->label('NIDN')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('nama_dosen')
                    ->label('Nama Dosen')
                    ->searchable()
                    ->sortable(),
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
            'index' => Pages\ListDosens::route('/'),
            'create' => Pages\CreateDosen::route('/create'),
            'edit' => Pages\EditDosen::route('/{record}/edit'),
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
                'role' => $data['user']['role'] ?? 'dosen', // Role default dosen
            ]);

            // Menyimpan id_user di data mahasiswa
            $data['id_user'] = $user->id; // Pastikan id_user diset ke user yang baru saja dibuat
        }

        // Kembalikan data dengan id_user yang telah diatur
        return $data;
    }
}
