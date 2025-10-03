<?php

namespace App\Filament\Resources;

use App\Filament\Resources\GeneralSettingResource\Pages;
use App\Models\GeneralSetting;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;

class GeneralSettingResource extends Resource
{
    protected static ?string $model = GeneralSetting::class;

    protected static ?string $navigationIcon = 'heroicon-o-cog';
    protected static ?int $navigationSort = 1;

    public static function form(Form $form): Form
    {
        return $form->schema([
            Forms\Components\TextInput::make('title')
                ->label('Site Title')
                ->maxLength(255),

            Forms\Components\TextInput::make('description')
                ->label('Site Description')
                ->maxLength(255),

            Forms\Components\TextInput::make('phone')
                ->tel()
                ->maxLength(50),

            Forms\Components\TextInput::make('email')
                ->email()
                ->maxLength(255),

            Forms\Components\Textarea::make('address')
                ->rows(3)
                ->columnSpanFull(),

            Forms\Components\FileUpload::make('favicon')
                ->label('Favicon')
                ->image()
                ->directory('general')
                ->imagePreviewHeight('40')
                ->maxSize(512),

            Forms\Components\FileUpload::make('logo')
                ->label('Logo')
                ->image()
                ->directory('general')
                ->imagePreviewHeight('100')
                ->maxSize(2048),
        ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\EditGeneralSetting::route('/'),
        ];
    }
}
