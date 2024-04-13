<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AcceptedFormArrivingsResource\Pages;
use App\Filament\Resources\AcceptedFormArrivingsResource\Pages\ViewAcceptedFormArrivings;
use App\Filament\Resources\AcceptedFormArrivingsResource\RelationManagers;
use App\Models\AcceptedFormArrivings;
use App\Models\FormArriving;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AcceptedFormArrivingsResource extends Resource
{
    protected static ?string $model = FormArriving::class;

    protected static ?string $navigationIcon = 'heroicon-o-paper-airplane';

    protected static ?string $navigationLabel = 'Confirmed Forms';
    protected static ?string $navigationGroup = 'Arrivals';

    public static function getEloquentQuery(): Builder
    {
        return FormArriving::with(['disembarkations', 'arrivalMean'])->where('accepted', '1');

    }

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
            'index' => Pages\ListAcceptedFormArrivings::route('/'),
            'create' => Pages\CreateAcceptedFormArrivings::route('/create'),
            'edit' => Pages\EditAcceptedFormArrivings::route('/{record}/edit'),
            'view' => ViewAcceptedFormArrivings::route('/{record}/view'),
        ];
    }
}
