<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BlogResource\Pages;
use App\Models\Blog;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Forms\Set;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Support\Str;

class BlogResource extends Resource
{
    protected static ?string $model = Blog::class;

    protected static ?string $navigationIcon = 'heroicon-o-newspaper';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Toggle::make('active')
                    ->label('Active')
                    ->default(true),

                TextInput::make('title')
                    ->required()
                    ->maxLength(500)
                    ->columnSpanFull()
                    ->live(onBlur: true)
                    ->afterStateUpdated(function (Set $set, ?string $state) {
                        if (filled($state)) {
                            $set('slug', Str::slug($state));
                        }
                    }),

                TextInput::make('slug')
                    ->required()
                    ->maxLength(500)
                    ->unique(ignoreRecord: true)
                    ->helperText('Otomatis dari title (boleh panjang). Bisa diedit manual jika perlu.')
                    ->columnSpanFull(),

                FileUpload::make('image')
                    ->label('Cover Image')
                    ->image()
                    ->disk('public')
                    ->directory('blogs')
                    ->imagePreviewHeight('160')
                    ->columnSpanFull(),

                DatePicker::make('date')
                    ->label('Publish Date')
                    ->default(now())
                    ->required(),

                RichEditor::make('content')
                    ->label('Content')
                    ->columnSpanFull()
                    ->fileAttachmentsDisk('public')
                    ->fileAttachmentsDirectory('blogs/content')
                    ->fileAttachmentsVisibility('public')
                    ->toolbarButtons([
                        'bold',
                        'italic',
                        'underline',
                        'strike',
                        'link',
                        'attachFiles',
                        'orderedList',
                        'bulletList',
                        'blockquote',
                        'h2',
                        'h3',
                        'redo',
                        'undo',
                    ]),
            ])
            ->columns(2);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('image')
                    ->label('Cover')
                    ->disk('public')
                    ->height(48)
                    ->width(72)
                    ->square(),

                TextColumn::make('title')
                    ->searchable()
                    ->sortable()
                    ->wrap()
                    ->limit(80),

                TextColumn::make('slug')
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->wrap()
                    ->limit(60),

                TextColumn::make('date')
                    ->label('Publish Date')
                    ->date('d M Y')
                    ->sortable(),

                IconColumn::make('active')
                    ->boolean()
                    ->label('Active'),

                TextColumn::make('created_at')
                    ->label('Created')
                    ->dateTime('d M Y H:i')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->defaultSort('date', 'desc')
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListBlogs::route('/'),
            'create' => Pages\CreateBlog::route('/create'),
            'edit' => Pages\EditBlog::route('/{record}/edit'),
        ];
    }
}
