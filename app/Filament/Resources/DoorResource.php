<?php

declare(strict_types=1);

namespace App\Filament\Resources;

use App\Filament\Exports\AdditionalAttributeExporter;
use App\Filament\Exports\DoorExportByCategoryExporter;
use App\Filament\Resources\DoorResource\Pages\CreateDoor;
use App\Filament\Resources\DoorResource\Pages\EditDoor;
use App\Filament\Resources\DoorResource\Pages\ListDoors;
use App\Models\Category;
use App\Models\Door;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables\Actions\BulkActionGroup;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Actions\ExportAction;
use Filament\Tables\Columns\TextColumn;
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
                TextInput::make('product_id')
                    ->numeric(),
                TextInput::make('price')
                    ->numeric()
                    ->default(0)
                    ->prefix('$'),
                TextInput::make('name')
                    ->required()
                    ->maxLength(255),
                TextInput::make('img_url')
                    ->required()
                    ->maxLength(255),
                TextInput::make('tag')
                    ->required()
                    ->maxLength(255),
                TextInput::make('tag_name')
                    ->required()
                    ->maxLength(255),
                TextInput::make('tag_img_url')
                    ->required()
                    ->maxLength(255),
                TextInput::make('tag_category')
                    ->required()
                    ->maxLength(255),
                Select::make('category_id')
                    ->relationship('category', 'name')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('product_id')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('price')
                    ->money()
                    ->sortable(),
                TextColumn::make('name')
                    ->searchable(),
                TextColumn::make('img_url')
                    ->searchable(),
                TextColumn::make('tag')
                    ->searchable(),
                TextColumn::make('tag_name')
                    ->searchable(),
                TextColumn::make('tag_img_url')
                    ->searchable(),
                TextColumn::make('tag_category')
                    ->searchable(),
                TextColumn::make('category.name')
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
                SelectFilter::make('category_id')
                    ->options(
                        Category::all()->pluck('name', 'id')->toArray()
                    ),
            ])
            ->headerActions([
                ExportAction::make()->exporter(DoorExportByCategoryExporter::class)
                    ->label('Export by Category')
                    ->icon('heroicon-o-document'),
                ExportAction::make()->exporter(AdditionalAttributeExporter::class)
                    ->label('Export Additional Attributes')
                    ->icon('heroicon-o-document-text'),
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
            'index' => ListDoors::route('/'),
            'create' => CreateDoor::route('/create'),
            'edit' => EditDoor::route('/{record}/edit'),
        ];
    }
}
