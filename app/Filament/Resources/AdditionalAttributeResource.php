<?php

declare(strict_types=1);

namespace App\Filament\Resources;

use App\Filament\Resources\AdditionalAttributeResource\Pages;
use App\Models\AdditionalAttribute;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class AdditionalAttributeResource extends Resource
{
    protected static ?string $model = AdditionalAttribute::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Toggle::make('primo_finishing')
                    ->required(),
                Forms\Components\Toggle::make('3d_finishing')
                    ->required(),
                Forms\Components\Toggle::make('iridium_finishing')
                    ->required(),
                Forms\Components\Toggle::make('cpl_laminate')
                    ->required(),
                Forms\Components\Toggle::make('hpl_laminate')
                    ->required(),
                Forms\Components\Toggle::make('lacquered')
                    ->required(),
                Forms\Components\Toggle::make('room_door')
                    ->required(),
                Forms\Components\Toggle::make('inner_door')
                    ->required(),
                Forms\Components\Toggle::make('interior_entrance_door')
                    ->required(),
                Forms\Components\Toggle::make('technical_doors')
                    ->required(),
                Forms\Components\Toggle::make('fire_door')
                    ->required(),
                Forms\Components\Toggle::make('anti_burglary_door')
                    ->required(),
                Forms\Components\Toggle::make('soundproof_door')
                    ->required(),
                Forms\Components\Toggle::make('sliding_door')
                    ->required(),
                Forms\Components\Toggle::make('modern')
                    ->required(),
                Forms\Components\Toggle::make('classic')
                    ->required(),
                Forms\Components\Toggle::make('loft')
                    ->required(),
                Forms\Components\Toggle::make('retro')
                    ->required(),
                Forms\Components\Toggle::make('rustic')
                    ->required(),
                Forms\Components\Toggle::make('wood_door')
                    ->required(),
                Forms\Components\Select::make('category_id')
                    ->relationship('category', 'name')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\IconColumn::make('primo_finishing')
                    ->boolean(),
                Tables\Columns\IconColumn::make('3d_finishing')
                    ->boolean(),
                Tables\Columns\IconColumn::make('iridium_finishing')
                    ->boolean(),
                Tables\Columns\IconColumn::make('cpl_laminate')
                    ->boolean(),
                Tables\Columns\IconColumn::make('hpl_laminate')
                    ->boolean(),
                Tables\Columns\IconColumn::make('lacquered')
                    ->boolean(),
                Tables\Columns\IconColumn::make('room_door')
                    ->boolean(),
                Tables\Columns\IconColumn::make('inner_door')
                    ->boolean(),
                Tables\Columns\IconColumn::make('interior_entrance_door')
                    ->boolean(),
                Tables\Columns\IconColumn::make('technical_doors')
                    ->boolean(),
                Tables\Columns\IconColumn::make('fire_door')
                    ->boolean(),
                Tables\Columns\IconColumn::make('anti_burglary_door')
                    ->boolean(),
                Tables\Columns\IconColumn::make('soundproof_door')
                    ->boolean(),
                Tables\Columns\IconColumn::make('sliding_door')
                    ->boolean(),
                Tables\Columns\IconColumn::make('modern')
                    ->boolean(),
                Tables\Columns\IconColumn::make('classic')
                    ->boolean(),
                Tables\Columns\IconColumn::make('loft')
                    ->boolean(),
                Tables\Columns\IconColumn::make('retro')
                    ->boolean(),
                Tables\Columns\IconColumn::make('rustic')
                    ->boolean(),
                Tables\Columns\IconColumn::make('wood_door')
                    ->boolean(),
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
                //
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
            'index' => Pages\ListAdditionalAttributes::route('/'),
            'create' => Pages\CreateAdditionalAttribute::route('/create'),
            'edit' => Pages\EditAdditionalAttribute::route('/{record}/edit'),
        ];
    }
}
