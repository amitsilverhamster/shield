<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProductResource\Pages;
use App\Models\Product;
use App\Models\ProductCategory;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Support\Str;

class ProductResource extends Resource
{
    protected static ?string $model = Product::class;

    protected static ?string $navigationGroup = 'Products';

    protected static ?string $navigationIcon = 'heroicon-o-shopping-bag';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Grid::make(2)->schema([
                    TextInput::make('name')
                    ->required()
                    ->maxLength(255)
                    ->live(onBlur: true)
                    ->afterStateUpdated(fn(string $state, Forms\Set $set) =>
                    $set('slug', Str::slug($state))),
                    TextInput::make('slug')
                    ->required()
                    ->maxLength(255),
                ]),
                TextInput::make('sku')
                    ->label('SKU')
                    ->required()
                    ->unique(ignorable: fn($record) => $record),

                Select::make('category_ids')
                    ->label('Categories')
                    ->multiple()
                    ->options(fn() => ProductCategory::where('is_active', true)->pluck('name', 'id')->toArray())
                    ->searchable(),

                Repeater::make('price')
                    ->label('Price Information')
                    ->schema([
                        Grid::make(3)->schema([
                            TextInput::make('qty')
                                ->label('Quantity')
                                ->numeric()
                                ->required(),
                            TextInput::make('regular_price')
                                ->label('Regular Price')
                                ->numeric()
                                ->required(),
                            TextInput::make('sale_price')
                                ->label('Sale Price')
                                ->numeric(),
                        ])
                    ])
                    ->columnSpanFull(),

                FileUpload::make('3d_image')
                    ->label('3D Image')
                    ->disk('public')
                    ->directory(function (Forms\Get $get): string {
                        $date = now()->format('Y-m-d');
                        $sku = $get('sku');
                        return "products/3d_image/{$date}/{$sku}";
                    })
                    ->columnSpanFull(),

                FileUpload::make('images')
                    ->label('Product Images')
                    ->disk('public')
                    ->directory(function (Forms\Get $get): string {
                        $date = now()->format('Y-m-d');
                        $sku = $get('sku');
                        return "products/{$date}/{$sku}";
                    })
                    ->multiple()
                    ->imageEditor()
                    ->reorderable()
                    ->columnSpanFull(),
                RichEditor::make('short_description')
                    ->label('Short Description')
                    ->columnSpanFull(),

                RichEditor::make('description')
                    ->label('Full Description')
                    ->columnSpanFull(),

                Section::make('SEO')
                    ->schema([
                        TextInput::make('meta_title')
                            ->label('Meta Title')
                            ->maxLength(255),
                        TextInput::make('meta_description')
                            ->label('Meta Description'),
                    ])
                    ->columnSpanFull(),

                Toggle::make('is_active')
                    ->label('Is Active')
                    ->default(true),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('sku')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('name')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('slug')
                    ->searchable(),
                IconColumn::make('is_active')
                    ->label('Status')
                    ->boolean()
                    ->trueIcon('heroicon-o-check-circle')
                    ->falseIcon('heroicon-o-x-circle'),
                TextColumn::make('created_at')
                    ->label('Created At')
                    ->date()
                    ->sortable(),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('is_active')
                    ->label('Status')
                    ->options([
                        '1' => 'Active',
                        '0' => 'Inactive',
                    ]),
                Tables\Filters\MultiSelectFilter::make('category_ids')
                    ->label('Categories')
                    ->options(fn() => ProductCategory::where('is_active', true)->pluck('name', 'id')->toArray()),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
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
            'index' => Pages\ListProducts::route('/'),
            'create' => Pages\CreateProduct::route('/create'),
            'edit' => Pages\EditProduct::route('/{record}/edit'),
        ];
    }
}
