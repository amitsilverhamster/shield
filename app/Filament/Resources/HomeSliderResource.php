<?php

namespace App\Filament\Resources;

use App\Filament\Resources\HomeSliderResource\Pages;
use App\Filament\Resources\HomeSliderResource\RelationManagers;
use App\Models\HomeSlider;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Forms\Components;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Button;
use Filament\Resources\Resource;
use Illuminate\Support\Str;
use Filament\Tables;
use Filament\Tables\Columns;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\BooleanColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class HomeSliderResource extends Resource
{
    protected static ?string $model = HomeSlider::class;

    protected static ?string $navigationGroup = 'Website';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('title')
                    ->label('Title')
                    ->required(),
                TextInput::make('subtitle')
                    ->label('Subtitle')
                    ->required(),
                Select::make('mode')
                    ->label('Mode')
                    ->options([
                        'light' => 'Light',
                        'dark' => 'Dark',
                    ])
                    ->required(),
                TextInput::make('button_text')
                    ->label('Button Text')
                    ->required(),
                TextInput::make('button_link')
                    ->label('Button Link')
                    ->required(),
                FileUpload::make('image')
                    ->label('Image')
                    ->image()
                    ->disk('public')
                    ->directory('home-slider')
                    ->visibility('public') 
                    ->required()
                    ->getUploadedFileNameForStorageUsing(function (mixed $file, Forms\Get $get): string {
                        return Str::slug($get('title')) . '.' . $file->getClientOriginalExtension();
                    }),
                    Toggle::make('is_active')
                    ->label('Is Active')
                    ->onColor('success')
                    ->offColor('danger')
                    ->default(false) // Add default state
                    ->required() // Ensure a value is always set
                    ->inline(true), // Optional: better UI alignment
                    TextInput::make('order')
                    ->label('Order')
                    ->numeric()
                    ->required()
                    ->default(0), 
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')
                    ->searchable()
                    ->label('Title'),
                TextColumn::make('mode')
                    ->label('Mode'),

                BooleanColumn::make('is_active')
                    ->label('Is Active'),

                TextColumn::make('order')
                    ->label('Order'),
            ])
            ->filters([
                //
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
            'index' => Pages\ListHomeSliders::route('/'),
            'create' => Pages\CreateHomeSlider::route('/create'),
            'edit' => Pages\EditHomeSlider::route('/{record}/edit'),
        ];
    }
}
