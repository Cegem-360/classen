<?php

declare(strict_types=1);

namespace App\Filament\Resources\Doors;

use App\Exports\DoorPricesExport;
use App\Filament\Resources\Doors\Pages\CreateDoor;
use App\Filament\Resources\Doors\Pages\EditDoor;
use App\Filament\Resources\Doors\Pages\ListDoors;
use App\Models\Category;
use App\Models\Door;
use BackedEnum;
use Filament\Actions\Action;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Contracts\HasTable;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;
use Maatwebsite\Excel\Facades\Excel;
use Override;
use Symfony\Component\HttpFoundation\BinaryFileResponse;

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
            ])
            ->headerActions([
                Action::make('exportDoorPrices')
                    ->label('Ajtók letöltése árakkal (Excel)')
                    ->icon(Heroicon::OutlinedArrowDownTray)
                    ->color('gray')
                    ->action(fn (HasTable $livewire): BinaryFileResponse => Excel::download(
                        new DoorPricesExport($livewire->getFilteredTableQuery()),
                        'ajtok-arak-'.now()->format('Y-m-d').'.xlsx',
                    )),
            ])
            ->recordActions([
                EditAction::make(),

            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
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
