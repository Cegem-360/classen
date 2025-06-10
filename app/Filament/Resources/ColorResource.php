<?php

declare(strict_types=1);

namespace App\Filament\Resources;

use App\Filament\Resources\ColorResource\Pages\CreateColor;
use App\Filament\Resources\ColorResource\Pages\EditColor;
use App\Filament\Resources\ColorResource\Pages\ListColors;
use App\Models\Color;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables\Actions\BulkActionGroup;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

final class ColorResource extends Resource
{
    protected static ?string $model = Color::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')
                    ->maxLength(200),
                TextInput::make('small_img')
                    ->maxLength(1000)
                    ->default('resources/img/placeholder.webp'),
                TextInput::make('big_img')
                    ->maxLength(1000)
                    ->default('resources/img/placeholder.webp'),
                TextInput::make('material_category')
                    ->maxLength(500),
                Select::make('category_id')
                    ->relationship('category', 'name')
                    ->required(),
                Select::make('door_id')
                    ->relationship('door', 'name')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->searchable(),
                TextColumn::make('small_img')
                    ->searchable(),
                TextColumn::make('big_img')
                    ->searchable(),
                TextColumn::make('material_category')
                    ->searchable(),
                TextColumn::make('category.name')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('door.name')
                    ->numeric()
                    ->sortable(),
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
            'index' => ListColors::route('/'),
            'create' => CreateColor::route('/create'),
            'edit' => EditColor::route('/{record}/edit'),
        ];
    }
}
