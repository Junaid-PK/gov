<?php

namespace Database\Factories;

use App\Models\ArrivalMean;
use App\Models\Disembarkation;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\FormArriving>
 */
class FormArrivingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'flightNo' => $this->faker->word,
            'Boarded_At' => $this->faker->country(),
            'arrivingBy_fk' => ArrivalMean::all()->random()->id,
            'firstName' => $this->faker->firstName,
            'middleName' => $this->faker->firstName,
            'lastName' => $this->faker->lastName,
            'dob' => $this->faker->dateTime(),
            'birthCountry' => $this->faker->country(),
            'gender' => $this->faker->randomElement(['male','female']),
            'marStatus' => $this->faker->randomElement(['married','single','widow']),
            'occupation' => $this->faker->word,
            'passportNum' => $this->faker->word,
            'dateIssue' => $this->faker->dateTime(),
            'expDate' => $this->faker->dateTime(),
            'countryIssue' => $this->faker->country(),
            'homeAddress' => $this->faker->address,
            'cityTown' => $this->faker->city,
            'stateProv' => $this->faker->state,
            'zipCode' => $this->faker->postcode,
            'countryHome' => null,
            'portDisem_fk' => Disembarkation::all()->random()->id,
            'lengthStayAbr' => $this->faker->randomNumber(),
            'lengthStayHere' => $this->faker->randomNumber(),
            'purpBus' => $this->faker->boolean,
            'purpStudy' => $this->faker->boolean,
            'purpCon' => $this->faker->boolean,
            'purpHon' => $this->faker->boolean,
            'purpMeet' => $this->faker->boolean,
            'purpSport' => $this->faker->boolean,
            'purpVac' => $this->faker->boolean,
            'purpVisit' => $this->faker->boolean,
            'purpOth' => $this->faker->boolean,
            'purpSpecify' => $this->faker->word,
            'accoApt' => $this->faker->boolean,
            'accoBed' => $this->faker->boolean,
            'accoDive' => $this->faker->boolean,
            'accoGuest' => $this->faker->boolean,
            'accoHotel' => $this->faker->boolean,
            'accoPrivate' => $this->faker->boolean,
            'accoOth' => $this->faker->boolean,
            'accoSpecify' => $this->faker->word,
            'addedDate' => $this->faker->dateTimeBetween('-1 year', 'now'),
            'submittedDate' => $this->faker->dateTimeBetween('-1 year', 'now'),
            'acceptedOfficer' => $this->faker->name,
            'intendedDateArriv' => $this->faker->dateTime(),
        ];
    }
}
