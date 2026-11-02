<?php

declare(strict_types=1);

namespace App\Filament\Resources\QuotationItems;

use App\Filament\Resources\QuotationItems\Pages\CreateQuotationItem;
use App\Filament\Resources\QuotationItems\Pages\EditQuotationItem;
use App\Filament\Resources\QuotationItems\Pages\ListQuotationItems;
use App\Models\QuotationItem;
use BackedEnum;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Override;

final class QuotationItemResource extends Resource
{
    protected static ?string $model = QuotationItem::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    #[Override]
    public static function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('quotation_id')
                    ->required()
                    ->numeric(),
                TextInput::make('door_id')
                    ->required()
                    ->numeric(),
                TextInput::make('frame')
                    ->maxLength(255),
                TextInput::make('quantity')
                    ->required()
                    ->numeric()
                    ->default(1),
            ]);
    }

    #[Override]
    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('quotation_id')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('door_id')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('frame')
                    ->searchable(),
                TextColumn::make('quantity')
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
            'index' => ListQuotationItems::route('/'),
            'create' => CreateQuotationItem::route('/create'),
            'edit' => EditQuotationItem::route('/{record}/edit'),
        ];
    }
}
