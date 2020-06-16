<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHistoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('histories', function (Blueprint $table) {
            $table->id();
            $table->string('age');
            $table->string('address');

            // ANTEDECENTES HEREDITARIOS
            $table->string('paternalGrandparents');
            $table->string('maternalGrandparents');
            $table->string('uncles');
            $table->string('dad');
            $table->string('mom');
            $table->string('brothers');

            // ANTECEDENTES PERSONALES NO PATOLOGICOS
            $table->string('birthdate');
            $table->string('placeOfBirth');
            $table->string('currentResidence');
            $table->string('scholarship');
            $table->string('maritalStatus');
            $table->string('hygienicHabits');
            $table->string('dietaryHabits');
            $table->string('drugAddiction');

            // ANTECEDENTES PERSONALES PATOLOGICOS
            $table->string('childhoodIllnesses');
            $table->string('surgeries');
            $table->string('allergies');
            $table->string('currentMedication');

            // ANTECEDENTES GINECO OBSTETRICOS
            $table->string('menarca')->nullable();
            $table->string('menstrualRhythm')->nullable();
            $table->string('fum')->nullable();
            $table->string('gestas')->nullable();
            $table->string('paras')->nullable();
            $table->string('abortions')->nullable();
            $table->string('caesareanSections')->nullable();
            $table->string('fup')->nullable();
            $table->string('vsa')->nullable();
            $table->string('contraceptiveUses')->nullable();

            // EXPLORACION
            $table->string('weight');
            $table->string('size');
            $table->string('head');
            $table->string('eyes');
            $table->string('ears');
            $table->string('nose');
            $table->string('mouth');
            $table->string('neck');
            $table->string('chest');

            // TORAX
            $table->string('shape');
            $table->string('respiratoryMovements');
            $table->string('fr');
            $table->string('abnormalNoises');
            $table->string('fc');
            $table->string('abdomen');
            $table->string('superiorLimbs');
            $table->string('lowerExtremities');

            // DOCTOR QUE CREO LA HISTORIA
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('patient_id');
            $table->foreign('patient_id')->references('id')->on('patients')->onUpdate('cascade')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('histories');
    }
}
