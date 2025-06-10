<?php

declare(strict_types=1);

namespace App\Filament\Resources;

use App\Filament\Resources\MetaKeyWordsResource\Pages\CreateMetaKeyWords;
use App\Filament\Resources\MetaKeyWordsResource\Pages\EditMetaKeyWords;
use App\Filament\Resources\MetaKeyWordsResource\Pages\ListMetaKeyWords;
use App\Models\MetaKeyWords;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables\Actions\BulkActionGroup;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

final class MetaKeyWordsResource extends Resource
{
    protected static ?string $model = MetaKeyWords::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
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
            'index' => ListMetaKeyWords::route('/'),
            'create' => CreateMetaKeyWords::route('/create'),
            'edit' => EditMetaKeyWords::route('/{record}/edit'),
        ];
    }
}
