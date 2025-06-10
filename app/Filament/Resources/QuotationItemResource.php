<?php

declare(strict_types=1);

namespace App\Filament\Resources;

use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Actions\BulkActionGroup;
use Filament\Tables\Actions\DeleteBulkAction;
use App\Filament\Resources\QuotationItemResource\Pages\ListQuotationItems;
use App\Filament\Resources\QuotationItemResource\Pages\CreateQuotationItem;
use App\Filament\Resources\QuotationItemResource\Pages\EditQuotationItem;
use App\Filament\Resources\QuotationItemResource\Pages;
use App\Models\QuotationItem;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

final class QuotationItemResource extends Resource
{
    protected static ?string $model = QuotationItem::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
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
            'index' => ListQuotationItems::route('/'),
            'create' => CreateQuotationItem::route('/create'),
            'edit' => EditQuotationItem::route('/{record}/edit'),
        ];
    }
}
