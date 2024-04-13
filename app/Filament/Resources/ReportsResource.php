<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ReportsResource\Pages;
use App\Filament\Resources\ReportsResource\RelationManagers;
use App\Models\FormArriving;
use App\Models\Reports;
use Filament\Forms;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Support\Enums\MaxWidth;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Enums\FiltersLayout;
use Filament\Tables\Filters\Filter;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ReportsResource extends Resource
{
    protected static ?string $model = FormArriving::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationLabel = 'Manage Reports';
    protected static ?string $navigationGroup = 'Reports';

    public static function getEloquentQuery(): Builder
    {
        // dd(FormArriving::with(['disembarkations', 'arrivalMean'])->where('accepted', '1')->get());
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
                TextColumn::make('passportNum')->searchable(),
                TextColumn::make('firstName')
                    ->label('Full Name')
                    ->searchable()
                    ->formatStateUsing(function ($record) {
                        return $record->firstName . ' ' . $record->lastName;
                    }),
                TextColumn::make('intendedDateArriv')->label('Arrival Date'),
                TextColumn::make('countryHome')->label('Home Country'),
                TextColumn::make('arrivalMean.arrivingBY'),
            ])
            ->filters([
                Filter::make('intendedDateArriv')
                    ->form([
                        DatePicker::make('from'),
                        DatePicker::make('to')->default(now()),
                    ])->columns(2)
                    ->query(function (Builder $query, array $data): Builder {
                        return $query
                            ->when(
                                $data['from'],
                                fn (Builder $query, $date): Builder => $query->whereDate('intendedDateArriv', '>=', $date),
                            )
                            ->when(
                                $data['to'],
                                fn (Builder $query, $date): Builder => $query->whereDate('intendedDateArriv', '<=', $date),
                            );
                    })
            ], layout: FiltersLayout::AboveContent)->filtersFormColumns(1)
            ->filtersFormWidth(MaxWidth::MaxContent)
            ->actions([
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
            'index' => Pages\ListReports::route('/'),
            'create' => Pages\CreateReports::route('/create'),
            'edit' => Pages\EditReports::route('/{record}/edit'),
        ];
    }
}
