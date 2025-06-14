<?php

declare(strict_types=1);

namespace App\Filament\Resources;

use App\Filament\Resources\WebsiteOptionsResource\Pages\CreateWebsiteOptions;
use App\Filament\Resources\WebsiteOptionsResource\Pages\EditWebsiteOptions;
use App\Filament\Resources\WebsiteOptionsResource\Pages\ListWebsiteOptions;
use App\Filament\Resources\WebsiteOptionsResource\Pages\ViewWebsiteOptions;
use App\Models\WebsiteOptions;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables\Actions\BulkActionGroup;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Actions\ViewAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

final class WebsiteOptionsResource extends Resource
{
    protected static ?string $model = WebsiteOptions::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')
                    ->required()
                    ->maxLength(255),
                TextInput::make('title')
                    ->required()
                    ->maxLength(255),
                TextInput::make('page')
                    ->required()
                    ->maxLength(255),
                TextInput::make('img_url')
                    ->required()
                    ->maxLength(255),
                TextInput::make('text')
                    ->required()
                    ->maxLength(255),
                TextInput::make('link_title')
                    ->required()
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->searchable(),
                TextColumn::make('title')
                    ->searchable(),
                TextColumn::make('page')
                    ->searchable(),
                TextColumn::make('img_url')
                    ->searchable(),
                TextColumn::make('text')
                    ->searchable(),
                TextColumn::make('link_title')
                    ->searchable(),
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                ViewAction::make(),
                EditAction::make(),
            ])
            ->bulkActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
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
            'index' => ListWebsiteOptions::route('/'),
            'create' => CreateWebsiteOptions::route('/create'),
            'view' => ViewWebsiteOptions::route('/{record}'),
            'edit' => EditWebsiteOptions::route('/{record}/edit'),
        ];
    }
}
