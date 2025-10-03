<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProjectResource\Pages;
use App\Filament\Resources\ProjectResource\RelationManagers;
use App\Models\Project;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ProjectResource extends Resource
{
    protected static ?string $model = Project::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?int $navigationSort = 7;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->required()
                    ->maxLength(255),

                Forms\Components\FileUpload::make('image')
                    ->label('Project Image')
                    ->image()
                    ->directory('projects')
                    ->imagePreviewHeight('100')
                    ->maxSize(2048)
                    ->columnSpanFull()
                    ->nullable(),

                Forms\Components\TagsInput::make('categories')
                    ->separator(',')
                    ->placeholder('Add Category... (ex: Contruction, Design, etc)')
                    ->nullable()
                    ->columnSpanFull(),

                Forms\Components\RichEditor::make('description')
                    ->nullable()
                    ->columnSpanFull()
                    ->columnSpanFull(),
                
                Forms\Components\RichEditor::make('content')
                    ->nullable()
                    ->columnSpanFull()
                    ->columnSpanFull(),

                Forms\Components\TextInput::make('url')
                    ->url()
                    ->nullable()
                    ->maxLength(255),

                Forms\Components\TextInput::make('order')
                    ->numeric()
                    ->nullable()
                    ->default(0)
                    ->label('Display Order'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('image')
                    ->label('Image')
                    ->height(40)
                    ->width(40),

                Tables\Columns\TextColumn::make('title')
                    ->sortable()
                    ->searchable(),

                Tables\Columns\TextColumn::make('url')
                    ->label('Link')
                    ->limit(30)
                    ->formatStateUsing(fn ($state) => $state ?: '-')
                    ->url(fn ($record) => $record->url ?: null)
                    ->openUrlInNewTab(),

                Tables\Columns\TextColumn::make('order')
                    ->sortable(),

                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime(),
            ])
            ->defaultSort('order', 'asc')
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([]);
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
            'index' => Pages\ListProjects::route('/'),
            'create' => Pages\CreateProject::route('/create'),
            'edit' => Pages\EditProject::route('/{record}/edit'),
        ];
    }
}
