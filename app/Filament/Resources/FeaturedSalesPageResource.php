<?php

declare(strict_types=1);

namespace App\Filament\Resources;

use App\Filament\Resources\FeaturedSalesPageResource\Pages\CreateFeaturedSalesPage;
use App\Filament\Resources\FeaturedSalesPageResource\Pages\EditFeaturedSalesPage;
use App\Filament\Resources\FeaturedSalesPageResource\Pages\ListFeaturedSalesPages;
use App\Filament\Resources\FeaturedSalesPageResource\Pages\ViewFeaturedSalesPage;
use App\Models\FeaturedSalesPage;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Forms\Set;
use Filament\Resources\Resource;
use Filament\Tables\Actions\BulkActionGroup;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Actions\ViewAction;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Support\Str;

final class FeaturedSalesPageResource extends Resource
{
    protected static ?string $model = FeaturedSalesPage::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'Sales Pages';

    protected static ?string $navigationLabel = 'Featured Sales Pages';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('title')
                    ->required()
                    ->afterStateUpdated(function ($state, Set $set): void {
                        $set('slug', Str::slug($state));
                    })
                    ->maxLength(255),
                TextInput::make('seo_title')
                    ->maxLength(255),
                RichEditor::make('content')
                    ->columnSpanFull(),
                TextInput::make('slug')
                    ->live(onBlur: true, debounce: 1000)
                    ->maxLength(255)
                    ->afterStateUpdated(function ($state, Set $set): void {
                        $set('slug', Str::slug($state));
                    }),
                TextInput::make('link')
                    ->maxLength(255),
                FileUpload::make('featured_media')
                    ->image()
                    ->maxSize(1024)
                    ->columnSpanFull(),
                TextInput::make('author')
                    ->maxLength(255),
                TextInput::make('comment_status')
                    ->maxLength(255),
                TextInput::make('ping_status')
                    ->maxLength(255),
                Toggle::make('sticky'),
                TextInput::make('format')
                    ->maxLength(255),
                TextInput::make('status')
                    ->maxLength(255),
                TextInput::make('type')
                    ->maxLength(255),
                DateTimePicker::make('date'),
                DateTimePicker::make('date_gmt'),
                DateTimePicker::make('modified'),
                DateTimePicker::make('modified_gmt'),
                TextInput::make('template')
                    ->maxLength(255),
                Textarea::make('excerpt')
                    ->columnSpanFull(),
                TextInput::make('guid')
                    ->maxLength(255),
                TextInput::make('meta')
                    ->maxLength(255),
                TextInput::make('categories')
                    ->maxLength(255),
                TextInput::make('tags')
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')
                    ->searchable(),
                TextColumn::make('slug')
                    ->searchable(),
                TextColumn::make('link')
                    ->searchable(),
                TextColumn::make('featured_media')
                    ->searchable(),
                TextColumn::make('author')
                    ->searchable(),
                TextColumn::make('comment_status')
                    ->searchable(),
                TextColumn::make('ping_status')
                    ->searchable(),
                IconColumn::make('sticky')
                    ->boolean(),
                TextColumn::make('format')
                    ->searchable(),
                TextColumn::make('status')
                    ->searchable(),
                TextColumn::make('type')
                    ->searchable(),
                TextColumn::make('date')
                    ->dateTime()
                    ->sortable(),
                TextColumn::make('date_gmt')
                    ->dateTime()
                    ->sortable(),
                TextColumn::make('modified')
                    ->dateTime()
                    ->sortable(),
                TextColumn::make('modified_gmt')
                    ->dateTime()
                    ->sortable(),
                TextColumn::make('template')
                    ->searchable(),
                TextColumn::make('guid')
                    ->searchable(),
                TextColumn::make('meta')
                    ->searchable(),
                TextColumn::make('categories')
                    ->searchable(),
                TextColumn::make('tags')
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
                ViewAction::make(),
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
            'index' => ListFeaturedSalesPages::route('/'),
            'create' => CreateFeaturedSalesPage::route('/create'),
            'view' => ViewFeaturedSalesPage::route('/{record}'),
            'edit' => EditFeaturedSalesPage::route('/{record}/edit'),
        ];
    }
}
