<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ScopeOfWorkResource\Pages;
use App\Filament\Resources\ScopeOfWorkResource\RelationManagers;
use App\Models\ScopeOfWork;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ScopeOfWorkResource extends Resource
{
    protected static ?string $model = ScopeOfWork::class;
    protected static ?string $navigationIcon = 'heroicon-o-clipboard-document-list';
    protected static ?int $navigationSort = 8;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->required()
                    ->maxLength(255),

                 Forms\Components\FileUpload::make('icon')
                    ->label('Icon (optional)')
                    ->image()
                    ->directory('scope-icons')
                    ->nullable()
                    ->maxSize(1024)
                    ->imagePreviewHeight('100')
                    ->columnSpanFull(),

                Forms\Components\RichEditor::make('description')
                    ->label('Description')
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')->sortable()->searchable(),
                Tables\Columns\ImageColumn::make('icon')
                    ->label('Icon')
                    ->height(40)
                    ->width(40),
                Tables\Columns\TextColumn::make('created_at')->dateTime(),
            ])
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
            'index' => Pages\ListScopeOfWorks::route('/'),
            'create' => Pages\CreateScopeOfWork::route('/create'),
            'edit' => Pages\EditScopeOfWork::route('/{record}/edit'),
        ];
    }
}
