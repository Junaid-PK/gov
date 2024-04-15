<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('form_arrivings', function (Blueprint $table) {
            $table->id();
            $table->string('flightNo', 50)->nullable();
            $table->string('Boarded_At')->nullable();
            $table->unsignedBigInteger('arrivingBy_fk')->nullable();
            $table->string('firstName', 150)->nullable();
            $table->string('middleName', 150)->nullable();
            $table->string('lastName', 150)->nullable();
            $table->dateTime('dob')->nullable();
            $table->string('birthCountry')->nullable();
            $table->string('gender')->nullable();
            $table->string('marStatus')->nullable();
            $table->boolean('accepted')->default(false);
            $table->string('occupation', 50)->nullable();
            $table->string('passportNum', 50)->nullable();
            $table->string('nationality', 250)->nullable();
            $table->string('email', 250)->nullable();
            $table->string('localNumber', 250)->nullable();
            $table->dateTime('dateIssue')->nullable();
            $table->dateTime('expDate')->nullable();
            $table->string('countryIssue')->nullable();
            $table->string('homeAddress', 255)->nullable();
            $table->string('cityTown', 50)->nullable();
            $table->string('stateProv', 50)->nullable();
            $table->string('zipCode', 50)->nullable();
            $table->string('countryHome')->nullable();
            $table->unsignedBigInteger('portDisem_fk')->nullable();
            $table->integer('lengthStayAbr')->nullable();
            $table->integer('lengthStayHere')->nullable();
            $table->boolean('purpBus');
            $table->boolean('purpStudy');
            $table->boolean('purpCon');
            $table->boolean('purpHon');
            $table->boolean('purpMeet');
            $table->boolean('purpSport');
            $table->boolean('purpVac');
            $table->boolean('purpVisit');
            $table->boolean('purpOth');
            $table->string('purpSpecify', 50)->nullable();
            $table->boolean('accoApt');
            $table->boolean('accoBed');
            $table->boolean('accoDive');
            $table->boolean('accoGuest');
            $table->boolean('accoHotel');
            $table->boolean('accoPrivate');
            $table->boolean('accoOth');
            $table->string('accoSpecify', 50)->nullable();
            $table->dateTime('addedDate');
            $table->dateTime('submittedDate')->nullable();
            $table->string('acceptedOfficer', 500);
            $table->dateTime('intendedDateArriv')->nullable();
            // passport_image
            $table->string('passport_image', 500)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('form_arrivings');
    }
};
