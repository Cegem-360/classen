<?php

declare(strict_types=1);

namespace App\Filament\Resources\Doors;

use App\Filament\Exports\DoorExporter;
use App\Filament\Resources\Doors\Pages\CreateDoor;
use App\Filament\Resources\Doors\Pages\EditDoor;
use App\Filament\Resources\Doors\Pages\ListDoors;
use App\Models\Category;
use App\Models\Door;
use BackedEnum;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ExportAction;
use Filament\Actions\ForceDeleteBulkAction;
use Filament\Actions\RestoreAction;
use Filament\Actions\RestoreBulkAction;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Filters\TrashedFilter;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Override;

final class DoorResource extends Resource
{
    protected static ?string $model = Door::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    #[Override]
    public static function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('product_id')
                    ->numeric(),
                TextInput::make('price')
                    ->numeric()
                    ->default(0)
                    ->suffix('Ft'),
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

    #[Override]
    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('product_id')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('price')
                    ->money('HUF', locale: 'hu')
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
                TrashedFilter::make(),
            ])
            ->headerActions([
                ExportAction::make()
                    ->exporter(DoorExporter::class)
                    ->label('Ajtók exportálása árakkal')
                    ->icon(Heroicon::OutlinedArrowDownTray),
            ])
            ->recordActions([
                EditAction::make(),
                RestoreAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                    ForceDeleteBulkAction::make(),
                    RestoreBulkAction::make(),
                ]),
            ]);
    }

    #[Override]
    public static function getRecordRouteBindingEloquentQuery(): Builder
    {
        return parent::getRecordRouteBindingEloquentQuery()
            ->withoutGlobalScopes([
                SoftDeletingScope::class,
            ]);
    }

    #[Override]
    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    #[Override]
    public static function getPages(): array
    {
        return [
            'index' => ListDoors::route('/'),
            'create' => CreateDoor::route('/create'),
            'edit' => EditDoor::route('/{record}/edit'),
        ];
    }
}
