<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CompanyOverviewResource\Pages;
use App\Models\CompanyOverview;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\RichEditor;

class CompanyOverviewResource extends Resource
{
    protected static ?string $model = CompanyOverview::class;

    protected static ?string $navigationIcon = 'heroicon-o-globe-alt';
    protected static ?int $navigationSort = 3;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('title')
                    ->label('Type')
                    ->required()
                    ->maxLength(50)
                    ->disabled()
                    ->columnSpanFull()
                    ->dehydrated(true), 

                FileUpload::make('image')
                    ->image()
                    ->directory('company')
                    ->columnSpanFull()
                    ->disk('public'),

                RichEditor::make('description')
                    ->toolbarButtons([
                        'bold', 'italic', 'underline', 'strike',
                        'bulletList', 'orderedList', 'link',
                    ])
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->label('Section')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\ImageColumn::make('image'),
                Tables\Columns\TextColumn::make('description')->limit(50),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                // Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([]);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListCompanyOverviews::route('/'),
            'create' => Pages\CreateCompanyOverview::route('/create'),
            'edit' => Pages\EditCompanyOverview::route('/{record}/edit'),
        ];
    }
}
