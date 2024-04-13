<?php

namespace App\Livewire;

use App\Models\FormArriving;
use Livewire\Component;
use Livewire\WithFileUploads;

class ArrivalForm extends Component
{
    use WithFileUploads;
    public $step = 1;
    public $flight_no;
    public $boarded_at;
    public $arriving_by;
    public $date_intended;
    public $port_of_disembarkation;
    public $len_of_stay_abroad;
    public $len_of_stay;

    public $first_name;
    public $middle_name;
    public $last_name;
    public $dob;
    public $place_of_birth;
    public $gender;
    public $marital_status;
    public $occupation;
    public $nationality;
    public $email;
    public $confirm_email;
    public $local_number;

    public $doc_type;
    public $doc_number;
    public $confirm_doc_number;
    public $date_of_issue;
    public $country_of_issue;
    public $passport_image;
    public $home_address;
    public $city;
    public $state;
    public $zip_code;
    public $home_country;
    public $purpBusiness = false;
    public $purpStudy = false;
    public $purpConference = false;
    public $purpHoneymoon = false;
    public $purpMeeting = false;
    public $purpSports = false;
    public $purpVaction = false;
    public $purpVisit = false;
    public $purpOther = false;
    public $purpose_other;
    public $accApt = false;
    public $accBed = false;
    public $accDive = false;
    public $accGuest = false;
    public $accHotel = false;
    public $accResidence = false;
    public $accOther = false;
    public $accomodation_other;


    public function render()
    {
        return view('livewire.arrival-form');
    }

    public function nextStep()
    {
        $this->validateCurrentStep();

        $this->step++;

    }

    public function previousStep()
    {
        $this->step--;
    }

    public function submitForm()
    {
        FormArriving::create([
            'flightNo' => $this->flight_no,
            'Boarded_At' => $this->boarded_at,
            'arrivingBy_fk' => $this->arriving_by,
            'firstName' => $this->first_name,
            'middleName' => $this->middle_name,
            'lastName' => $this->last_name,
            'dob' => $this->dob,
            'birthCountry' => $this->place_of_birth,
            'gender' => $this->gender,
            'marStatus' => $this->marital_status,
            'occupation' => $this->occupation,
            'nationality' => $this->nationality,
            'email' => $this->email,
            'localNumber' => $this->local_number,
            'dateIssue' => $this->date_of_issue,
            'countryIssue' => $this->country_of_issue,
            'homeAddress' => $this->home_address,
            'cityTown' => $this->city,
            'stateProv' => $this->state,
            'zipCode' => $this->zip_code,
            'countryHome' => $this-> home_country,
            'portDisem_fk' => $this->port_of_disembarkation,
            'lengthStayAbr' => $this->len_of_stay_abroad,
            'lengthStayHere' => $this->len_of_stay,
            'purpBus' => $this->purpBusiness,
            'purpStudy' => $this->purpStudy,
            'purpCon'=> $this->purpConference,
            'purpHon'=> $this->purpHoneymoon,
            'purpMeet'=> $this->purpMeeting,
            'purpSport'=> $this->purpSports,
            'purpVac'=> $this->purpVaction,
            'purpVisit'=> $this->purpVisit,
            'purpOth'=> $this->purpOther,
            'purpSpecify'=> $this->purpose_other,
            'accoApt'=> $this->accApt,
            'accoBed'=> $this->accBed,
            'accoDive'=> $this->accDive,
            'accoGuest'=> $this->accGuest,
            'accoHotel'=> $this->accHotel,
            'accoPrivate'=> $this->accResidence,
            'accoOth'=> $this->accOther,
            'addedDate' => now(),
            'submittedDate'=> now(),
            'acceptedOfficer' => 'x'
        ]);

        return redirect()->route('home');
    }

    private function validateCurrentStep()
    {
        if ($this->step == 1) {
            $this->validate([
                'flight_no' => 'required',
                'boarded_at' => 'required',
                'arriving_by' => 'required',
                'date_intended' => 'nullable',
                'port_of_disembarkation' => 'required',
                'len_of_stay_abroad' => 'required',
                'len_of_stay' => 'required',
            ],[
                'flight_no.required' => 'The flight number is required.',
                'boarded_at.required' => 'The boarding location is required.',
                'arriving_by.required' => 'The arrival method is required.',
                'date_intended.required' => 'The intended date of arrival is required.',
                'port_of_disembarkation.required' => 'The port of disembarkation is required.',
                'len_of_stay_abroad.required' => 'The length of stay abroad is required.',
                'len_of_stay.required' => 'The length of stay is required.',
            ]);

            session()->put('arrivalForm.step1', [
                'flight_no' => $this->flight_no,
                'boarded_at' => $this->boarded_at,
                'arriving_by' => $this->arriving_by,
                'date_intended' => $this->date_intended,
                'port_of_disembarkation' => $this->port_of_disembarkation,
                'len_of_stay_abroad' => $this->len_of_stay_abroad,
                'len_of_stay' => $this->len_of_stay,
            ]);
        } elseif ($this->step == 2) {
            $this->validate([
                'first_name' => 'required|string|max:255',
                'middle_name' => 'nullable|string|max:255',
                'last_name' => 'required|string|max:255',
                'dob' => 'required|date',
                'place_of_birth' => 'required|string|max:255',
                'gender' => 'required|in:male,female,none',
                'marital_status' => 'required',
                'occupation' => 'required',
                'nationality' => 'required',
                'email' => 'required',
                'confirm_email' => 'required|email|same:email',
                'local_number' => 'required',
                'doc_type' => 'required',
                'doc_number' => 'required',
                'confirm_doc_number' => 'required|same:doc_number',
                'date_of_issue' => 'required',
                'country_of_issue' => 'required',
                'passport_image'=> 'required|image',
            ], [
                // Custom validation messages for step 2
                'first_name.required' => 'Your first name is required.',
                'last_name.required' => 'Your last name is required.',
                'dob.required' => 'Your date of birth is required.',
                'place_of_birth.required' => 'Your place of birth is required.',
                'gender.required' => 'Please select your gender.',
                'marital_status.required' => 'Your marital status is required.',
                'occupation.required' => 'Your occupation is required.',
                'nationality.required' => 'Your nationality is required.',
                'email.required' => 'Your email address is required.',
                'confirm_email.required' => 'Please confirm your email address.',
                'local_number.required' => 'Your local contact number is required.',
                'doc_type.required' => 'The type of your document is required.',
                'doc_number.required' => 'Your document number is required.',
                'confirm_doc_number.required' => 'Please confirm your document number.',
                'date_of_issue.required' => 'The date of issue of your document is required.',
                'country_of_issue.required' => 'The country of issue of your document is required.',
                'passport_image.required' => 'An image of your document is required.',
            ]
            );

            session()->put('arrivalForm.step2', [
                'first_name' => $this->first_name,
                'middle_name' => $this->middle_name,
                'last_name' => $this->last_name,
                'dob' => $this->dob,
                'place_of_birth' => $this->place_of_birth,
                'gender' => $this->gender,
                'marital_status' => $this->marital_status,
                'occupation' => $this->occupation,
                'nationality' => $this->nationality,
                'email' => $this->email,
                'confirm_email' => $this->confirm_email,
                'local_number' => $this->local_number,
                'doc_type' => $this->doc_type,
                'doc_number' => $this->doc_number,
                'confirm_doc_number' => $this->confirm_doc_number,
                'date_of_issue' => $this->date_of_issue,
                'country_of_issue' => $this->country_of_issue,
                'passport_image' => $this->passport_image->getFilename(),
            ]);
        }
    }
}
