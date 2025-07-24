<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UserResource\Pages;
use App\Filament\Resources\UserResource\Pages\CreateUser;
use App\Filament\Resources\UserResource\Pages\EditUser;
use App\Filament\Resources\UserResource\Pages\ListUsers;
use App\Filament\Resources\UserResource\RelationManagers;
use App\Models\User;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Notifications\Notification;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Actions\BulkActionGroup;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Actions\ViewAction;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\SelectColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ToggleColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Auth;

use function PHPSTORM_META\type;

class UserResource extends Resource
{
    protected static ?string $model = User::class;

    protected static ?string $modelLabel = 'Utilisateurs';

    protected static ?string $navigationGroup = 'Gestion de l\'application';

    protected static ?int $navigationSort = 1;

    protected static ?string $navigationLabel = 'Utilisateurs';

    protected static ?string $navigationIcon = 'heroicon-o-user';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Grid::make(1)
                    ->schema([
                        TextInput::make('name')
                            ->label('Nom')
                            ->maxLength(255)
                            ->required(),
                    ]),

                Grid::make(2)
                    ->schema([
                        TextInput::make('phone')
                            ->type('tel')
                            ->label('Numéro detéléphone')
                            ->maxLength(16)
                            ->required(),

                        TextInput::make('email')
                            ->email()
                            ->label('Adresse email')
                            ->maxLength(255)
                            ->unique(User::class, 'email', ignoreRecord: true)
                            ->required(),

                        Select::make('role')
                            ->label('Rôle')
                            ->options([
                                'admin' => 'Admin',
                                'author' => 'Auteur',
                                'reader' => 'Lecteur'
                            ])
                            ->required()
                            ->native(false),
                    ]),

                Grid::make(1)
                    ->schema([
                        FileUpload::make('profile_image')
                            ->label('Photo de profil')
                            ->imageEditor()
                            ->maxSize(2048)
                            ->acceptedFileTypes([
                                'image/png',
                                'image/jpeg',
                            ])
                            ->downloadable()
                            ->openable(),
                    ]),

                Grid::make(1)
                    ->schema([
                        Toggle::make('is_active')
                            ->label('Actif')
                            ->default(false),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('profile_photo')
                    ->label('Profil')
                    ->circular()
                    ->default(function ($record) {
                        return 'https://ui-avatars.com/api/?name=' . urlencode($record->initials) . '&background=&color=e1e1e1&size=96';
                    }),

                TextColumn::make('name')
                    ->label('Nom')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('phone')
                    ->label('Téléphone')
                    ->searchable()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),

                TextColumn::make('email')
                    ->label('Email')
                    ->searchable()
                    ->sortable(),

                SelectColumn::make('role')
                    ->label('Rôle')
                    ->options([
                        'admin' => 'Admin',
                        'author' => 'Auteur',
                        'reader' => 'Lecteur',
                    ])
                    ->sortable()
                    ->disabled(function  ($record) {
                        return $record->id === Auth::user()->id;
                    })
                    ->afterStateUpdated(function () {
                        Notification::make()
                            ->success()
                            ->title('Rôle mis à jour')
                            ->send();
                    })
                    ->selectablePlaceholder(false)
                    ->toggleable(isToggledHiddenByDefault: true),

                ToggleColumn::make('is_active')
                    ->label('Actif')
                    ->sortable()
                    ->disabled(function  ($record) {
                        return $record->id === Auth::user()->id;
                    })
                    ->afterStateUpdated(function () {
                        Notification::make()
                            ->success()
                            ->title('Statut mis à jour')
                            ->send();
                    })
                    ->toggleable(isToggledHiddenByDefault: true),

                TextColumn::make('created_at')
                    ->label('Ajouté le')
                    ->dateTime('d M Y à H:i')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])

            ->filters([
                //
            ])

            ->actions([
                ViewAction::make()
                        ->label('')
                        ->tooltip('Détails'),

                EditAction::make()
                        ->label('')
                        ->tooltip('Modifier'),

                DeleteAction::make()
                        ->label('')
                        ->tooltip('Supprimer'),
            ])

            ->bulkActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ])

            ->emptyStateHeading('Aucun utilisateur enrégistré.');
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
            'index' => ListUsers::route('/'),
            'create' => CreateUser::route('/create'),
            'edit' => EditUser::route('/{record}/edit'),
        ];
    }
}
