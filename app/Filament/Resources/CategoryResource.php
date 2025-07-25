<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CategoryResource\Pages;
use App\Filament\Resources\CategoryResource\RelationManagers;
use App\Models\Category;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Forms\Set;
use Filament\Notifications\Notification;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Actions\ViewAction;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ToggleColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Str;

class CategoryResource extends Resource
{
    protected static ?string $model = Category::class;

    protected static ?string $modelLabel = 'Catégories';

    protected static ?string $navigationGroup = 'Blog';

    protected static ?int $navigationSort = 2;

    protected static ?string $navigationLabel = 'Catégories';

    protected static ?string $navigationIcon = 'heroicon-o-bars-3-center-left';

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

                Grid::make(1)
                    ->schema([
                        RichEditor::make('description')
                            ->label('Description')
                            ->nullable(),

                        FileUpload::make('image')
                            ->label('Image')
                            ->imageEditor()
                            ->maxSize(2048)
                            ->acceptedFileTypes([
                                'image/png',
                                'image/jpeg',
                            ])
                            ->downloadable()
                            ->openable()
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('image')
                    ->label('Image')
                    ->circular()
                    ->toggleable(isToggledHiddenByDefault: true),

                TextColumn::make('name')
                    ->label('Nom')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('name')
                    ->label('Nom')
                    ->toggleable(isToggledHiddenByDefault: false),

                ToggleColumn::make('is_visible')
                    ->label('Visible')
                    ->sortable()
                    ->afterStateUpdated(function () {
                        Notification::make()
                            ->success()
                            ->title('Visibilité mise à jour')
                            ->send();
                    }),

                TextColumn::make('user.name')
                    ->label('Ajouté par')
                    ->icon('heroicon-o-user')
                    ->searchable()
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
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ])

            ->emptyStateHeading('Aucune catégorie enrégistrée.');
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
            'index' => Pages\ListCategories::route('/'),
            'create' => Pages\CreateCategory::route('/create'),
            'edit' => Pages\EditCategory::route('/{record}/edit'),
        ];
    }
}
