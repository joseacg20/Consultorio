@extends('layouts.app')

@section('content')
    <div class="container">
        <section>
            <div class="col-md-12">
                <button class="btn waves-effect waves-light">
                    <a href="{{ redirect()->getUrlGenerator()->previous()}}" style="text-decoration:none" class="white-text">Regresar</a>
                </button>
                <button class="btn waves-effect waves-light float-right btn-info">
                    <a href="{{ route('histpdf', $history->id) }}" style="color:white; text-decoration:none" class="white-text">Generar PDF</a>
                </button>
            </div>
        </section>
        <br>
        <hr>
        <section id="Obtener Usuarios">
            <h3>Historia Clinica de {{$patient->name}} {{$patient->lastName}}</h3>
            <br>
            <div class="row">
                <div class="form-group row col-md-6">
                    <label for="age" class="col-md-4 col-form-label text-md-right">{{ __('Direccion') }}</label>
                    <div class="col-md-8">
                        <input disabled id="address" type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ $history->address }}" required autocomplete="address" autofocus>
                    </div>
                </div>
                <div class="form-group row col-md-6">
                    <label for="age" class="col-md-4 col-form-label text-md-right">{{ __('Edad') }}</label>
                    <div class="col-md-8">
                        <input disabled id="age" type="text" class="form-control @error('age') is-invalid @enderror" name="age" value="{{ $history->age }}" required autocomplete="age" autofocus>
                    </div>
                </div>
            </div>
            <div class="card-header">{{ __('ANTECEDENTES HEROFAMILIARES') }}</div>
            <br>
            <div class="row">
                <div class="form-group row col-md-6">
                    <label for="age" class="col-md-4 col-form-label text-md-right">{{ __('Abuelos Paternos') }}</label>
                    <div class="col-md-8">
                        <input disabled id="paternalGrandparents" type="text" class="form-control @error('paternalGrandparents') is-invalid @enderror" name="paternalGrandparents" value="{{ $history->paternalGrandparents }}" required autocomplete="paternalGrandparents" autofocus>
                    </div>
                </div>
                <div class="form-group row col-md-6">
                    <label for="age" class="col-md-4 col-form-label text-md-right">{{ __('Abuelos Maternos') }}</label>
                    <div class="col-md-8">
                        <input disabled id="maternalGrandparents" type="text" class="form-control @error('maternalGrandparents') is-invalid @enderror" name="maternalGrandparents" value="{{ $history->maternalGrandparents }}" required autocomplete="maternalGrandparents" autofocus>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="form-group row col-md-6">
                    <label for="age" class="col-md-4 col-form-label text-md-right">{{ __('Tios') }}</label>
                    <div class="col-md-8">
                        <input disabled id="specialty" type="text" class="form-control @error('uncles') is-invalid @enderror" name="uncles" value="{{ $history->uncles }}" autocomplete="uncles" autofocus>
                    </div>
                </div>
                <div class="form-group row col-md-6">
                    <label for="age" class="col-md-4 col-form-label text-md-right">{{ __('Papá') }}</label>
                    <div class="col-md-8">
                        <input disabled id="dad" type="text" class="form-control @error('dad') is-invalid @enderror" name="dad" value="{{ $history->dad }}"  autocomplete="dad" autofocus>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="form-group row col-md-6">
                    <label for="age" class="col-md-4 col-form-label text-md-right">{{ __('Mamá') }}</label>
                    <div class="col-md-8">
                        <input disabled id="mom" type="text" class="form-control @error('mom') is-invalid @enderror" name="mom" value="{{ $history->mom }}"  autocomplete="mom" autofocus>
                    </div>
                </div>
                <div class="form-group row col-md-6">
                    <label for="age" class="col-md-4 col-form-label text-md-right">{{ __('Hermanos') }}</label>
                    <div class="col-md-8">
                        <input disabled id="brothers" type="text" class="form-control @error('brothers') is-invalid @enderror" name="brothers" value="{{ $history->brothers }}"  autocomplete="brothers" autofocus>
                    </div>
                </div>
            </div>
            
            <div class="card-header">{{ __('ANTECEDENTES PERSONALES NO PATOLOGICOS') }}</div>
            <br>
            <div class="row">
                <div class="form-group row col-md-6">
                    <label for="age" class="col-md-4 col-form-label text-md-right">{{ __('Fecha de Nacimiento') }}</label>
                    <div class="col-md-8">
                        <input disabled id="birthdate" type="text" class="form-control @error('birthdate') is-invalid @enderror" name="birthdate" value="{{ $history->birthdate }}"  autocomplete="birthdate" autofocus>
                    </div>
                </div>
                <div class="form-group row col-md-6">
                    <label for="age" class="col-md-4 col-form-label text-md-right">{{ __('Lugar de Nacimiento') }}</label>
                    <div class="col-md-8">
                        <input disabled id="placeOfBirth" type="text" class="form-control @error('placeOfBirth') is-invalid @enderror" name="placeOfBirth" value="{{ $history->placeOfBirth }}"  autocomplete="placeOfBirth" autofocus>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="form-group row col-md-6">
                    <label for="age" class="col-md-4 col-form-label text-md-right">{{ __('Recidencia Actual') }}</label>
                    <div class="col-md-8">
                        <input disabled id="currentResidence" type="text" class="form-control @error('currentResidence') is-invalid @enderror" name="currentResidence" value="{{ $history->currentResidence }}"  autocomplete="currentResidence" autofocus>
                    </div>
                </div>
                <div class="form-group row col-md-6">
                    <label for="age" class="col-md-4 col-form-label text-md-right">{{ __('Escolaridad') }}</label>
                    <div class="col-md-8">
                        <input disabled id="scholarship" type="text" class="form-control @error('scholarship') is-invalid @enderror" name="scholarship" value="{{ $history->scholarship }}"  autocomplete="scholarship" autofocus>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="form-group row col-md-6">
                    <label for="age" class="col-md-4 col-form-label text-md-right">{{ __('Estado Civil') }}</label>
                    <div class="col-md-8">
                        <input disabled id="maritalStatus" type="text" class="form-control @error('maritalStatus') is-invalid @enderror" name="maritalStatus" value="{{ $history->maritalStatus }}"  autocomplete="maritalStatus" autofocus>
                    </div>
                </div>
                <div class="form-group row col-md-6">
                    <label for="age" class="col-md-4 col-form-label text-md-right">{{ __('Hábitos Higiénicos') }}</label>
                    <div class="col-md-8">
                        <input disabled id="hygienicHabits" type="text" class="form-control @error('hygienicHabits') is-invalid @enderror" name="hygienicHabits" value="{{ $history->hygienicHabits }}"  autocomplete="hygienicHabits" autofocus>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="form-group row col-md-6">
                    <label for="age" class="col-md-4 col-form-label text-md-right">{{ __('Hábitos Dietéticos') }}</label>
                    <div class="col-md-8">
                        <input disabled id="dietaryHabits" type="text" class="form-control @error('dietaryHabits') is-invalid @enderror" name="dietaryHabits" value="{{ $history->dietaryHabits }}"  autocomplete="dietaryHabits" autofocus>
                    </div>
                </div>
                <div class="form-group row col-md-6">
                    <label for="age" class="col-md-4 col-form-label text-md-right">{{ __('Toxicomanías') }}</label>
                    <div class="col-md-8">
                        <input disabled id="drugAddiction" type="text" class="form-control @error('drugAddiction') is-invalid @enderror" name="drugAddiction" value="{{ $history->drugAddiction }}"  autocomplete="drugAddiction" autofocus>
                    </div>
                </div>
            </div>
            
            <div class="card-header">{{ __('ANTECEDENTES PERSONALES PATOLOGICOS') }}</div>
            <br>
            <div class="row">
                <div class="form-group row col-md-6">
                    <label for="age" class="col-md-4 col-form-label text-md-right">{{ __('Enfermedades en la Infancia') }}</label>
                    <div class="col-md-8">
                        <input disabled id="childhoodIllnesses" type="text" class="form-control @error('childhoodIllnesses') is-invalid @enderror" name="childhoodIllnesses" value="{{ $history->childhoodIllnesses }}"  autocomplete="birthdate" autofocus>
                    </div>
                </div>
                <div class="form-group row col-md-6">
                    <label for="age" class="col-md-4 col-form-label text-md-right">{{ __('Cirugias') }}</label>
                    <div class="col-md-8">
                        <input disabled id="surgeries" type="text" class="form-control @error('surgeries') is-invalid @enderror" name="surgeries" value="{{ $history->surgeries }}"  autocomplete="surgeries" autofocus>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="form-group row col-md-6">
                    <label for="age" class="col-md-4 col-form-label text-md-right">{{ __('Alergias') }}</label>
                    <div class="col-md-8">
                        <input disabled id="allergies" type="text" class="form-control @error('allergies') is-invalid @enderror" name="allergies" value="{{ $history->allergies }}"  autocomplete="allergies" autofocus>
                    </div>
                </div>
                <div class="form-group row col-md-6">
                    <label for="age" class="col-md-4 col-form-label text-md-right">{{ __('Medicamentos que toma actualmente') }}</label>
                    <div class="col-md-8">
                        <input disabled id="currentMedication" type="text" class="form-control @error('currentMedication') is-invalid @enderror" name="currentMedication" value="{{ $history->currentMedication }}"  autocomplete="currentMedication" autofocus>
                    </div>
                </div>
            </div>

            <div class="card-header">{{ __('ANTECEDENTES GINECO OBSTETRICOS') }}</div>
            <br>
            <div class="row">
                <div class="form-group row col-md-6">
                    <label for="age" class="col-md-4 col-form-label text-md-right">{{ __('Menarca') }}</label>
                    <div class="col-md-8">
                        <input disabled id="menarca" type="text" class="form-control @error('menarca') is-invalid @enderror" name="menarca" value="{{ $history->menarca }}"  autocomplete="menarca" autofocus>
                    </div>
                </div>
                <div class="form-group row col-md-6">
                    <label for="age" class="col-md-4 col-form-label text-md-right">{{ __('Ritmo Menstrual') }}</label>
                    <div class="col-md-8">
                        <input disabled id="menstrualRhythm" type="text" class="form-control @error('menstrualRhythm') is-invalid @enderror" name="menstrualRhythm" value="{{ $history->menstrualRhythm }}"  autocomplete="menstrualRhythm" autofocus>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="form-group row col-md-6">
                    <label for="age" class="col-md-4 col-form-label text-md-right">{{ __('FUM') }}</label>
                    <div class="col-md-8">
                        <input disabled id="fum" type="text" class="form-control @error('fum') is-invalid @enderror" name="fum" value="{{ $history->fum }}"  autocomplete="fum" autofocus>
                    </div>
                </div>
                <div class="form-group row col-md-6">
                    <label for="age" class="col-md-4 col-form-label text-md-right">{{ __('Gesta') }}</label>
                    <div class="col-md-8">
                        <input disabled id="gestas" type="text" class="form-control @error('gestas') is-invalid @enderror" name="gestas" value="{{ $history->gestas }}"  autocomplete="gestas" autofocus>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="form-group row col-md-6">
                    <label for="age" class="col-md-4 col-form-label text-md-right">{{ __('Paras') }}</label>
                    <div class="col-md-8">
                        <input disabled id="paras" type="text" class="form-control @error('paras') is-invalid @enderror" name="paras" value="{{ $history->paras }}"  autocomplete="paras" autofocus>
                    </div>
                </div>
                <div class="form-group row col-md-6">
                    <label for="age" class="col-md-4 col-form-label text-md-right">{{ __('Abortos') }}</label>
                    <div class="col-md-8">
                        <input disabled id="abortions" type="text" class="form-control @error('abortions') is-invalid @enderror" name="abortions" value="{{ $history->abortions }}"  autocomplete="abortions" autofocus>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="form-group row col-md-6">
                    <label for="age" class="col-md-4 col-form-label text-md-right">{{ __('Cesáreas') }}</label>
                    <div class="col-md-8">
                        <input disabled id="caesareanSections" type="text" class="form-control @error('caesareanSections') is-invalid @enderror" name="caesareanSections" value="{{ $history->caesareanSections }}"  autocomplete="caesareanSections" autofocus>
                    </div>
                </div>
                <div class="form-group row col-md-6">
                    <label for="age" class="col-md-4 col-form-label text-md-right">{{ __('FUP') }}</label>
                    <div class="col-md-8">
                        <input disabled id="fup" type="text" class="form-control @error('fup') is-invalid @enderror" name="fup" value="{{ $history->fup }}"  autocomplete="fup" autofocus>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="form-group row col-md-6">
                    <label for="age" class="col-md-4 col-form-label text-md-right">{{ __('VSA') }}</label>
                    <div class="col-md-8">
                        <input disabled id="vsa" type="text" class="form-control @error('vsa') is-invalid @enderror" name="vsa" value="{{ $history->vsa }}"  autocomplete="vsa" autofocus>
                    </div>
                </div>
                <div class="form-group row col-md-6">
                    <label for="age" class="col-md-4 col-form-label text-md-right">{{ __('Uso de Anticonceptivos') }}</label>
                    <div class="col-md-8">
                        <input disabled id="contraceptiveUses" type="text" class="form-control @error('contraceptiveUses') is-invalid @enderror" name="contraceptiveUses" value="{{ $history->contraceptiveUses }}"  autocomplete="contraceptiveUses" autofocus>
                    </div>
                </div>
            </div>

            <div class="card-header">{{ __('EXPLORACION') }}</div>
            <br>
            <div class="row">
                <div class="form-group row col-md-6">
                    <label for="age" class="col-md-4 col-form-label text-md-right">{{ __('Peso') }}</label>
                    <div class="col-md-8">
                        <input disabled id="weight" type="text" class="form-control @error('weight') is-invalid @enderror" name="weight" value="{{ $history->weight }}"  autocomplete="weight" autofocus>
                    </div>
                </div>
                <div class="form-group row col-md-6">
                    <label for="age" class="col-md-4 col-form-label text-md-right">{{ __('Talla') }}</label>
                    <div class="col-md-8">
                        <input disabled id="size" type="text" class="form-control @error('size') is-invalid @enderror" name="size" value="{{ $history->size }}"  autocomplete="size" autofocus>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="form-group row col-md-6">
                    <label for="age" class="col-md-4 col-form-label text-md-right">{{ __('Cabeza') }}</label>
                    <div class="col-md-8">
                        <input disabled id="head" type="text" class="form-control @error('head') is-invalid @enderror" name="head" value="{{ $history->head }}"  autocomplete="head" autofocus>
                    </div>
                </div>
                <div class="form-group row col-md-6">
                    <label for="age" class="col-md-4 col-form-label text-md-right">{{ __('Ojos') }}</label>
                    <div class="col-md-8">
                        <input disabled id="eyes" type="text" class="form-control @error('eyes') is-invalid @enderror" name="eyes" value="{{ $history->eyes }}"  autocomplete="eyes" autofocus>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="form-group row col-md-6">
                    <label for="age" class="col-md-4 col-form-label text-md-right">{{ __('Oídos') }}</label>
                    <div class="col-md-8">
                        <input disabled id="ears" type="text" class="form-control @error('ears') is-invalid @enderror" name="ears" value="{{ $history->ears }}"  autocomplete="ears" autofocus>
                    </div>
                </div>
                <div class="form-group row col-md-6">
                    <label for="age" class="col-md-4 col-form-label text-md-right">{{ __('Nariz') }}</label>
                    <div class="col-md-8">
                        <input disabled id="nose" type="text" class="form-control @error('nose') is-invalid @enderror" name="nose" value="{{ $history->nose }}"  autocomplete="nose" autofocus>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="form-group row col-md-6">
                    <label for="age" class="col-md-4 col-form-label text-md-right">{{ __('Boca') }}</label>
                    <div class="col-md-8">
                        <input disabled id="mouth" type="text" class="form-control @error('mouth') is-invalid @enderror" name="mouth" value="{{ $history->mouth }}"  autocomplete="mouth" autofocus>
                    </div>
                </div>
                <div class="form-group row col-md-6">
                    <label for="age" class="col-md-4 col-form-label text-md-right">{{ __('Cuello') }}</label>
                    <div class="col-md-8">
                        <input disabled id="neck" type="text" class="form-control @error('neck') is-invalid @enderror" name="neck" value="{{ $history->neck }}"  autocomplete="neck" autofocus>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="form-group row col-md-6">
                    <label for="age" class="col-md-4 col-form-label text-md-right">{{ __('Tórax') }}</label>
                    <div class="col-md-8">
                        <input disabled id="chest" type="text" class="form-control @error('chest') is-invalid @enderror" name="chest" value="{{ $history->chest }}"  autocomplete="chest" autofocus>
                    </div>
                </div>
                <div class="form-group row col-md-6">
                    <label for="age" class="col-md-4 col-form-label text-md-right">{{ __('Forma') }}</label>
                    <div class="col-md-8">
                        <input disabled id="shape" type="text" class="form-control @error('shape') is-invalid @enderror" name="shape" value="{{ $history->shape }}"  autocomplete="shape" autofocus>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="form-group row col-md-6">
                    <label for="age" class="col-md-4 col-form-label text-md-right">{{ __('Mov. Respiratorios') }}</label>
                    <div class="col-md-8">
                        <input disabled id="respiratoryMovements" type="text" class="form-control @error('respiratoryMovements') is-invalid @enderror" name="respiratoryMovements" value="{{ $history->respiratoryMovements }}"  autocomplete="respiratoryMovements" autofocus>
                    </div>
                </div>
                <div class="form-group row col-md-6">
                    <label for="age" class="col-md-4 col-form-label text-md-right">{{ __('FR') }}</label>
                    <div class="col-md-8">
                        <input disabled id="fr" type="text" class="form-control @error('fr') is-invalid @enderror" name="fr" value="{{ $history->fr }}"  autocomplete="fr" autofocus>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="form-group row col-md-6">
                    <label for="age" class="col-md-4 col-form-label text-md-right">{{ __('Ruidos Anormales') }}</label>
                    <div class="col-md-8">
                        <input disabled id="abnormalNoises" type="text" class="form-control @error('abnormalNoises') is-invalid @enderror" name="abnormalNoises" value="{{ $history->abnormalNoises }}"  autocomplete="abnormalNoises" autofocus>
                    </div>
                </div>
                <div class="form-group row col-md-6">
                    <label for="age" class="col-md-4 col-form-label text-md-right">{{ __('FC') }}</label>
                    <div class="col-md-8">
                        <input disabled id="fc" type="text" class="form-control @error('fc') is-invalid @enderror" name="fc" value="{{ $history->fc }}"  autocomplete="fc" autofocus>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="form-group row col-md-6">
                    <label for="age" class="col-md-4 col-form-label text-md-right">{{ __('Abdomen') }}</label>
                    <div class="col-md-8">
                        <input disabled id="abdomen" type="text" class="form-control @error('abdomen') is-invalid @enderror" name="abdomen" value="{{ $history->abdomen }}"  autocomplete="abdomen" autofocus>
                    </div>
                </div>
                <div class="form-group row col-md-6">
                    <label for="age" class="col-md-4 col-form-label text-md-right">{{ __('Extremidades Superiores') }}</label>
                    <div class="col-md-8">
                        <input disabled id="superiorLimbs" type="text" class="form-control @error('superiorLimbs') is-invalid @enderror" name="superiorLimbs" value="{{ $history->superiorLimbs }}"  autocomplete="superiorLimbs" autofocus>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="form-group row col-md-6">
                    <label for="age" class="col-md-4 col-form-label text-md-right">{{ __('Extremidades Inferiores') }}</label>
                    <div class="col-md-8">
                        <input disabled id="lowerExtremities" type="text" class="form-control @error('lowerExtremities') is-invalid @enderror" name="lowerExtremities" value="{{ $history->lowerExtremities }}"  autocomplete="lowerExtremities" autofocus>
                    </div>
                </div>
            </div>
        </section>            
    </div>
@endsection