<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PostResource\Pages;
use App\Filament\Resources\PostResource\RelationManagers;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Forms\Get;
use Filament\Forms\Set;
use Filament\Notifications\Notification;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Actions\ViewAction;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\SelectColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Auth;

class PostResource extends Resource
{
    protected static ?string $model = Post::class;

    protected static ?string $modelLabel = 'Publications';

    protected static ?string $navigationGroup = 'Blog';

    protected static ?int $navigationSort = 4;

    protected static ?string $navigationLabel = 'Publications';

    protected static ?string $navigationIcon = 'heroicon-o-clipboard-document';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Grid::make(1)
                    ->schema([
                        TextInput::make('title')
                            ->label('Titre')
                            ->maxLength(255)
                            ->required(),
                ]),

                Select::make('category_id')
                    ->label('Catégorie')
                    ->options(Category::all()->pluck('name', 'id'))
                    ->searchable()
                    ->required(),

                Select::make('tags')
                    ->label('Tag')
                    ->multiple()
                    ->options(Tag::all()->pluck('name', 'id'))
                    ->searchable(),

                Select::make('type')
                    ->label('Type')
                    ->options([
                        'article' => 'Article',
                        'video' => 'Vidéo',
                        'audio' => 'Audio',
                    ])
                    ->reactive()
                    ->required()
                    ->native(false),

                Grid::make(1)
                    ->schema([
                        Textarea::make('resume')
                            ->label('Résumé')
                            ->nullable(),

                        RichEditor::make('content')
                            ->label('Contenu')
                            ->requiredIf('type', 'article'),

                        TextInput::make('media_url')
                            ->label('Lien média (audio ou vidéo)')
                            ->url()
                            ->visible(fn (Get $get) => in_array($get('type'), ['audio', 'video']))
                            ->requiredIf('type', ['audio', 'video']),

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

                SelectColumn::make('type')
                ->label('Type')
                    ->options([
                        'article' => 'Article',
                        'video' => 'Vidéo',
                        'audio' => 'Audio',
                    ])
                    ->disabled()
                    ->searchable()
                    ->sortable(),

                TextColumn::make('title')
                    ->label('Titre')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('category.name')
                    ->label('Catégorie')
                    ->icon('heroicon-o-bars-3-center-left')
                    ->searchable()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: false),

                SelectColumn::make('status')
                    ->label('Statut')
                    ->options([
                        'draft' => 'Brouillon',
                        'published' => 'Publié',
                        'archived' => 'Archivé',
                    ])
                    ->afterStateUpdated(function ($record, string $state) {
                        $record->published_at = $state === 'published' ? now() : null;
                        $record->save();

                        $message = match ($state) {
                            'draft' => 'La publication est remise en brouillon.',
                            'published' => 'La publication est publiée.',
                            'archived' => 'La publication a été archivée.',
                            default => 'Statut mis à jour.',
                        };

                        Notification::make()
                            ->success()
                            ->title($message)
                            ->send();
                    })
                    ->selectablePlaceholder(false)
                    ->disableOptionWhen(function ($record, string $value) {
                        return $value === 'draft' && $record->published_at !== null;
                    })
                    ->searchable()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: false),

                TextColumn::make('user.name')
                    ->label('Ajouté par')
                    ->icon('heroicon-o-user')
                    ->searchable()
                    ->sortable()
                    ->visible(fn () => Auth::user()->role === 'admin')
                    ->toggleable(isToggledHiddenByDefault: true),

                TextColumn::make('published_at')
                    ->label('Publié le')
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
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ])

            ->emptyStateHeading('Aucune publication enrégistrée.');
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
            'index' => Pages\ListPosts::route('/'),
            'create' => Pages\CreatePost::route('/create'),
            'edit' => Pages\EditPost::route('/{record}/edit'),
        ];
    }
}
