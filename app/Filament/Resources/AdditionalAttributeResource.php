<?php

declare(strict_types=1);

namespace App\Filament\Resources;

use App\Filament\Resources\AdditionalAttributeResource\Pages\CreateAdditionalAttribute;
use App\Filament\Resources\AdditionalAttributeResource\Pages\EditAdditionalAttribute;
use App\Filament\Resources\AdditionalAttributeResource\Pages\ListAdditionalAttributes;
use App\Models\AdditionalAttribute;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables\Actions\BulkActionGroup;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

final class AdditionalAttributeResource extends Resource
{
    protected static ?string $model = AdditionalAttribute::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Toggle::make('primo_finishing')
                    ->required(),
                Toggle::make('3d_finishing')
                    ->required(),
                Toggle::make('iridium_finishing')
                    ->required(),
                Toggle::make('cpl_laminate')
                    ->required(),
                Toggle::make('hpl_laminate')
                    ->required(),
                Toggle::make('lacquered')
                    ->required(),
                Toggle::make('room_door')
                    ->required(),
                Toggle::make('inner_door')
                    ->required(),
                Toggle::make('interior_entrance_door')
                    ->required(),
                Toggle::make('technical_doors')
                    ->required(),
                Toggle::make('fire_door')
                    ->required(),
                Toggle::make('anti_burglary_door')
                    ->required(),
                Toggle::make('soundproof_door')
                    ->required(),
                Toggle::make('sliding_door')
                    ->required(),
                Toggle::make('modern')
                    ->required(),
                Toggle::make('classic')
                    ->required(),
                Toggle::make('loft')
                    ->required(),
                Toggle::make('retro')
                    ->required(),
                Toggle::make('rustic')
                    ->required(),
                Toggle::make('wood_door')
                    ->required(),
                Select::make('category_id')
                    ->relationship('category', 'name')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                IconColumn::make('primo_finishing')
                    ->boolean(),
                IconColumn::make('3d_finishing')
                    ->boolean(),
                IconColumn::make('iridium_finishing')
                    ->boolean(),
                IconColumn::make('cpl_laminate')
                    ->boolean(),
                IconColumn::make('hpl_laminate')
                    ->boolean(),
                IconColumn::make('lacquered')
                    ->boolean(),
                IconColumn::make('room_door')
                    ->boolean(),
                IconColumn::make('inner_door')
                    ->boolean(),
                IconColumn::make('interior_entrance_door')
                    ->boolean(),
                IconColumn::make('technical_doors')
                    ->boolean(),
                IconColumn::make('fire_door')
                    ->boolean(),
                IconColumn::make('anti_burglary_door')
                    ->boolean(),
                IconColumn::make('soundproof_door')
                    ->boolean(),
                IconColumn::make('sliding_door')
                    ->boolean(),
                IconColumn::make('modern')
                    ->boolean(),
                IconColumn::make('classic')
                    ->boolean(),
                IconColumn::make('loft')
                    ->boolean(),
                IconColumn::make('retro')
                    ->boolean(),
                IconColumn::make('rustic')
                    ->boolean(),
                IconColumn::make('wood_door')
                    ->boolean(),
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
            'index' => ListAdditionalAttributes::route('/'),
            'create' => CreateAdditionalAttribute::route('/create'),
            'edit' => EditAdditionalAttribute::route('/{record}/edit'),
        ];
    }
}
