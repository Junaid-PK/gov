<?php

namespace App\Filament\Resources;

use App\Filament\Resources\FormArrivingResource\Pages;
use App\Filament\Resources\FormArrivingResource\RelationManagers;
use App\Models\FormArriving;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class FormArrivingResource extends Resource
{
    protected static ?string $model = FormArriving::class;

    public static function getEloquentQuery(): Builder
    {
        return FormArriving::with(['disembarkations', 'arrivalMean'])->where('accepted', '0');

    }

    protected static ?string $navigationIcon = 'heroicon-o-globe-alt';
    protected static ?string $navigationGroup = 'Arrivals';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('firstName')->searchable(),
                TextColumn::make('lastName')->searchable(),
                TextColumn::make('dob'),
                TextColumn::make('passportNum')->searchable(),
                TextColumn::make('submittedDate'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
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
            'index' => Pages\ListFormArrivings::route('/'),
            'create' => Pages\CreateFormArriving::route('/create'),
            'edit' => Pages\EditFormArriving::route('/{record}/edit'),
            'view' => Pages\ViewFormArrivings::route('/{record}/view'),
        ];
    }
}
