<?php

declare(strict_types=1);

namespace App\Filament\Resources;

use Filament\Schemas\Schema;
use Filament\Actions\EditAction;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use App\Filament\Resources\MetaKeyWordsResource\Pages\CreateMetaKeyWords;
use App\Filament\Resources\MetaKeyWordsResource\Pages\EditMetaKeyWords;
use App\Filament\Resources\MetaKeyWordsResource\Pages\ListMetaKeyWords;
use App\Models\MetaKeyWords;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Resource;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

final class MetaKeyWordsResource extends Resource
{
    protected static ?string $model = MetaKeyWords::class;

    protected static string | \BackedEnum | null $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('collection_name')
                    ->required()
                    ->maxLength(255),
                Textarea::make('meta_description')
                    ->columnSpanFull(),
                Textarea::make('key_words')
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('collection_name')
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
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
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
            'index' => ListMetaKeyWords::route('/'),
            'create' => CreateMetaKeyWords::route('/create'),
            'edit' => EditMetaKeyWords::route('/{record}/edit'),
        ];
    }
}
