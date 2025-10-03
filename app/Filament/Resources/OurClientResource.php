<?php

namespace App\Filament\Resources;

use App\Filament\Resources\OurClientResource\Pages;
use App\Filament\Resources\OurClientResource\RelationManagers;
use App\Models\OurClient;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class OurClientResource extends Resource
{
    protected static ?string $model = OurClient::class;

    protected static ?string $navigationIcon = 'heroicon-o-users';
    protected static ?int $navigationSort = 6;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\FileUpload::make('image')
                    ->label('Client Logo')
                    ->image()
                    ->directory('our-clients')
                    ->imagePreviewHeight('100')
                    ->maxSize(1024)
                    ->columnSpanFull()
                    ->required(),

                Forms\Components\TextInput::make('title')
                    ->required()
                    ->maxLength(255),

                Forms\Components\TextInput::make('url')
                    ->url()
                    ->maxLength(255)
                    ->nullable(),

                Forms\Components\Textarea::make('description')
                    ->nullable()
                    ->columnSpanFull()
                    ->rows(3),

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
                    ->label('Logo')
                    ->height(40)
                    ->width(40),

                Tables\Columns\TextColumn::make('title')
                    ->sortable()
                    ->searchable(),

                Tables\Columns\TextColumn::make('url')
                    ->label('Website')
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
            'index' => Pages\ListOurClients::route('/'),
            'create' => Pages\CreateOurClient::route('/create'),
            'edit' => Pages\EditOurClient::route('/{record}/edit'),
        ];
    }
}
