<?php

declare(strict_types=1);

namespace App\Filament\Resources;

use App\Filament\Exports\DoorExportByCategoryExporter;
use App\Filament\Resources\DoorResource\Pages;
use App\Models\Category;
use App\Models\Door;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Actions\ExportAction;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;

final class DoorResource extends Resource
{
    protected static ?string $model = Door::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('product_id')
                    ->numeric(),
                Forms\Components\TextInput::make('price')
                    ->numeric()
                    ->default(0)
                    ->prefix('$'),
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('img_url')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('tag')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('tag_name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('tag_img_url')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('tag_category')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Select::make('category_id')
                    ->relationship('category', 'name')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('product_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('price')
                    ->money()
                    ->sortable(),
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('img_url')
                    ->searchable(),
                Tables\Columns\TextColumn::make('tag')
                    ->searchable(),
                Tables\Columns\TextColumn::make('tag_name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('tag_img_url')
                    ->searchable(),
                Tables\Columns\TextColumn::make('tag_category')
                    ->searchable(),
                Tables\Columns\TextColumn::make('category.name')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                SelectFilter::make('category_id')
                    ->options(
                        Category::all()->pluck('name', 'id')->toArray()
                    ),
            ])
            ->headerActions([
                ExportAction::make()->exporter(DoorExportByCategoryExporter::class)
                    ->label('Export by Category')
                    ->icon('heroicon-o-document'),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),

            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListDoors::route('/'),
            'create' => Pages\CreateDoor::route('/create'),
            'edit' => Pages\EditDoor::route('/{record}/edit'),
        ];
    }
}
