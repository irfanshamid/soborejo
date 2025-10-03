<?php

namespace App\Filament\Resources;

use App\Filament\Resources\HeadlineResource\Pages;
use App\Filament\Resources\HeadlineResource\RelationManagers;
use App\Models\Headline;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;

class HeadlineResource extends Resource
{
    protected static ?string $model = Headline::class;

    protected static ?string $navigationIcon = 'heroicon-o-command-line';
    protected static ?int $navigationSort = 2;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                FileUpload::make('banner_img')
                    ->image()
                    ->directory('headlines')
                    ->columnSpan(2)
                    ->required(),
                TextInput::make('title')
                    ->required()
                    ->columnSpan(2)
                    ->maxLength(255),
                Textarea::make('description')
                    ->columnSpan(2)
                    ->rows(5),
                TextInput::make('tagline')
                    ->label('Tagline (Prefer short)')
                    ->maxLength(255),
                TextInput::make('service')
                    ->label('Service Name (Optional)')
                    ->maxLength(255),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\EditHeadline::route('/'),
        ];
    }
}
