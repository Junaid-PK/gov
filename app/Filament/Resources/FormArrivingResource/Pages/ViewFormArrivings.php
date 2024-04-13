<?php

namespace App\Filament\Resources\FormArrivingResource\Pages;

use App\Filament\Resources\FormArrivingResource;
use Filament\Actions;
use Filament\Actions\Action;
use Filament\Forms\Components\Checkbox;
use Filament\Forms\Components\Section;
use Filament\Forms\Form;
use Filament\Resources\Pages\ViewRecord;
use Filament\Forms\Components\Tabs;
use Filament\Forms\Components\TextInput;
use Filament\Notifications\Notification;
use Illuminate\Database\Eloquent\Builder;

class ViewFormArrivings extends ViewRecord
{
    protected static string $resource = FormArrivingResource::class;


    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Tabs::make('Tabs')
                    ->tabs([
                        Tabs\Tab::make('Arrival')
                            ->schema([
                                TextInput::make('flightNo'),
                                TextInput::make('Boarded_At'),
                                TextInput::make('arrivalMean.arrivingBY')->label('Arriving By'),
                                TextInput::make('intendedDateArriv')->label('Date of Intended Arrival'),
                                TextInput::make('disembarkations.name')->label('Port of Disembarkation'),
                                TextInput::make('lengthStayAbr')->label('Length of Stay Abroad (citizen)'),
                                TextInput::make('lengthStayHere')->label('Length of Stay here (Visitors)'),
                            ]),
                        Tabs\Tab::make('Details')
                            ->schema([
                                TextInput::make('firstName'),
                                TextInput::make('middleName'),
                                TextInput::make('lastName'),
                                TextInput::make('dob'),
                                TextInput::make('birthCountry'),
                                TextInput::make('gender'),
                                TextInput::make('marStatus'),
                                TextInput::make('occupation'),
                                TextInput::make('nationality'),
                                TextInput::make('email'),
                                TextInput::make('localNumber'),

                            ]),
                        Tabs\Tab::make('Address')
                            ->schema([
                                TextInput::make('dateIssue'),
                                TextInput::make('countryIssue'),
                                TextInput::make('stateProv'),
                                TextInput::make('zipCode'),
                                TextInput::make('countryHome')->label('Home Country'),
                            ]),
                        Tabs\Tab::make('Purpose and Accomodation')
                            ->schema([
                                Section::make('purpose')
                                    ->schema([
                                        Checkbox::make('purpBus')
                                            ->label('Business')
                                            ->columnSpan(1),
                                        Checkbox::make('purpStudy')
                                            ->label('Study')
                                            ->columnSpan(1),
                                        Checkbox::make('purpCon')
                                            ->label('Conference')
                                            ->columnSpan(1),
                                        Checkbox::make('purpHon')
                                            ->label('Honeymoon')
                                            ->columnSpan(1),
                                        Checkbox::make('purpMeet')
                                            ->label('Meeting')
                                            ->columnSpan(1),
                                        Checkbox::make('purpSport')
                                            ->label('Sports')
                                            ->columnSpan(1),
                                        Checkbox::make('purpVac')
                                            ->label('Vacation')
                                            ->columnSpan(1),
                                        Checkbox::make('purpVisit')
                                            ->label('Visit')
                                            ->columnSpan(1),
                                        Checkbox::make('purpOth')
                                            ->label('Other')
                                            ->columnSpan(1),
                                    ])->columns(3),
                                Section::make('accomodation')
                                    ->schema([
                                        Checkbox::make('accoApt')
                                            ->label('Apartment')
                                            ->columnSpan(1),
                                        Checkbox::make('accoBed')
                                            ->label('Bed & Breakfast')
                                            ->columnSpan(1),
                                        Checkbox::make('accoDive')
                                            ->label('Dive')
                                            ->columnSpan(1),
                                        Checkbox::make('accoGuest')
                                            ->label('Guest House')
                                            ->columnSpan(1),
                                        Checkbox::make('accoHotel')
                                            ->label('Hotel')
                                            ->columnSpan(1),
                                        Checkbox::make('accoPrivate')
                                            ->label('Private Residence')
                                            ->columnSpan(1),
                                        Checkbox::make('accoOth')
                                            ->label('Other')
                                            ->columnSpan(1),
                                    ])->columns(3),
                            ]),
                    ])->columnSpan(3)
            ]);
    }
    protected function getHeaderActions(): array
    {
        return [
            Action::make('confirm')
                ->action(function($record){
                    $record->accepted = 1;
                    $record->save();
                    Notification::make()
                        ->title('Confirmed')
                        ->success()
                        ->send();
                    return redirect()->back();
                })
        ];
    }
}
