<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SiteCounterResource\Pages;
use App\Models\SiteCounter;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;

class SiteCounterResource extends Resource
{
    protected static ?string $model = SiteCounter::class;

    protected static ?string $navigationIcon = 'heroicon-o-chart-bar';
    protected static ?string $navigationLabel = 'Counter Section';
    protected static ?int $navigationSort = 2;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\RichEditor::make('content')
                    ->label('Content')
                    ->columnSpanFull(),

                Forms\Components\Section::make('Counter 1')->schema([
                    Forms\Components\TextInput::make('title_counter_1')
                        ->label('Title Counter 1')
                        ->maxLength(255),
                    Forms\Components\TextInput::make('total_counter_1')
                        ->label('Total Counter 1')
                        ->maxLength(255),
                ])->columns(2),

                Forms\Components\Section::make('Counter 2')->schema([
                    Forms\Components\TextInput::make('title_counter_2')
                        ->label('Title Counter 2')
                        ->maxLength(255),
                    Forms\Components\TextInput::make('total_counter_2')
                        ->label('Total Counter 2')
                        ->maxLength(255),
                ])->columns(2),

                Forms\Components\Section::make('Counter 3')->schema([
                    Forms\Components\TextInput::make('title_counter_3')
                        ->label('Title Counter 3')
                        ->maxLength(255),
                    Forms\Components\TextInput::make('total_counter_3')
                        ->label('Total Counter 3')
                        ->maxLength(255),
                ])->columns(2),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\EditSiteCounter::route('/'),
        ];
    }
}
