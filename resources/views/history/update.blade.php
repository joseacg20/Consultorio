@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Registro de Pacientes') }}</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('historias.update', $history->id) }}">
                        @csrf
                        @method('PUT')
                        <div class="form-group row">
                            <label for="age" class="col-md-4 col-form-label text-md-right">{{ __('Edad') }}</label>
                            <div class="col-md-6">
                                <input id="age" type="text" class="form-control @error('age') is-invalid @enderror" name="age" value="{{ $history->age }}" required autocomplete="age" autofocus>
                                @error('age')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="address" class="col-md-4 col-form-label text-md-right">{{ __('Direccion') }}</label>
                            <div class="col-md-6">
                                <input id="address" type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ $history->address }}" required autocomplete="address" autofocus>
                                @error('address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="card-header">{{ __('ANTECEDENTES HEROFAMILIARES') }}</div>
                        <br>
                        <div class="form-group row">
                            <label for="paternalGrandparents" class="col-md-4 col-form-label text-md-right">{{ __('Abuelos Paternos') }}</label>
                            <div class="col-md-6">
                                <input id="paternalGrandparents" type="text" class="form-control @error('paternalGrandparents') is-invalid @enderror" name="paternalGrandparents" value="{{ $history->paternalGrandparents }}" required autocomplete="paternalGrandparents" autofocus>
                                @error('paternalGrandparents')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="maternalGrandparents" class="col-md-4 col-form-label text-md-right">{{ __('Abuelos Maternos') }}</label>
                            <div class="col-md-6">
                                <input id="maternalGrandparents" type="text" class="form-control @error('maternalGrandparents') is-invalid @enderror" name="maternalGrandparents" value="{{ $history->maternalGrandparents }}" required autocomplete="maternalGrandparents" autofocus>
                                @error('maternalGrandparents')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="uncles" class="col-md-4 col-form-label text-md-right">{{ __('Tios') }}</label>
                            <div class="col-md-6">
                                <input id="specialty" type="text" class="form-control @error('uncles') is-invalid @enderror" name="uncles" value="{{ $history->uncles }}" autocomplete="uncles" autofocus>
                                @error('uncles')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="dad" class="col-md-4 col-form-label text-md-right">{{ __('Papá') }}</label>
                            <div class="col-md-6">
                                <input id="dad" type="text" class="form-control @error('dad') is-invalid @enderror" name="dad" value="{{ $history->dad }}"  autocomplete="dad" autofocus>
                                @error('dad')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="mom" class="col-md-4 col-form-label text-md-right">{{ __('Mamá') }}</label>
                            <div class="col-md-6">
                                <input id="mom" type="text" class="form-control @error('mom') is-invalid @enderror" name="mom" value="{{ $history->mom }}"  autocomplete="mom" autofocus>
                                @error('mom')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="brothers" class="col-md-4 col-form-label text-md-right">{{ __('Hermanos') }}</label>
                            <div class="col-md-6">
                                <input id="brothers" type="text" class="form-control @error('brothers') is-invalid @enderror" name="brothers" value="{{ $history->brothers }}"  autocomplete="brothers" autofocus>
                                @error('brothers')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="card-header">{{ __('ANTECEDENTES PERSONALES NO PATOLOGICOS') }}</div>
                        <br>
                        <div class="form-group row">
                            <label for="birthdate" class="col-md-4 col-form-label text-md-right">{{ __('Fecha de Nacimiento') }}</label>
                            <div class="col-md-6">
                                <input id="birthdate" type="text" class="form-control @error('birthdate') is-invalid @enderror" name="birthdate" value="{{ $history->birthdate }}"  autocomplete="birthdate" autofocus>
                                @error('birthdate')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="placeOfBirth" class="col-md-4 col-form-label text-md-right">{{ __('Lugar de Nacimiento') }}</label>
                            <div class="col-md-6">
                                <input id="placeOfBirth" type="text" class="form-control @error('placeOfBirth') is-invalid @enderror" name="placeOfBirth" value="{{ $history->placeOfBirth }}"  autocomplete="placeOfBirth" autofocus>
                                @error('placeOfBirth')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="currentResidence" class="col-md-4 col-form-label text-md-right">{{ __('Recidencia Actual') }}</label>
                            <div class="col-md-6">
                                <input id="currentResidence" type="text" class="form-control @error('currentResidence') is-invalid @enderror" name="currentResidence" value="{{ $history->currentResidence }}"  autocomplete="currentResidence" autofocus>
                                @error('currentResidence')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="scholarship" class="col-md-4 col-form-label text-md-right">{{ __('Escolaridad') }}</label>
                            <div class="col-md-6">
                                <input id="scholarship" type="text" class="form-control @error('scholarship') is-invalid @enderror" name="scholarship" value="{{ $history->scholarship }}"  autocomplete="scholarship" autofocus>
                                @error('scholarship')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="maritalStatus" class="col-md-4 col-form-label text-md-right">{{ __('Estado Civil') }}</label>
                            <div class="col-md-6">
                                <input id="maritalStatus" type="text" class="form-control @error('maritalStatus') is-invalid @enderror" name="maritalStatus" value="{{ $history->maritalStatus }}"  autocomplete="maritalStatus" autofocus>
                                @error('maritalStatus')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="hygienicHabits" class="col-md-4 col-form-label text-md-right">{{ __('Hábitos Higiénicos') }}</label>
                            <div class="col-md-6">
                                <input id="hygienicHabits" type="text" class="form-control @error('hygienicHabits') is-invalid @enderror" name="hygienicHabits" value="{{ $history->hygienicHabits }}"  autocomplete="hygienicHabits" autofocus>
                                @error('hygienicHabits')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="dietaryHabits" class="col-md-4 col-form-label text-md-right">{{ __('Hábitos Dietéticos') }}</label>
                            <div class="col-md-6">
                                <input id="dietaryHabits" type="text" class="form-control @error('dietaryHabits') is-invalid @enderror" name="dietaryHabits" value="{{ $history->dietaryHabits }}"  autocomplete="dietaryHabits" autofocus>
                                @error('dietaryHabits')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="drugAddiction" class="col-md-4 col-form-label text-md-right">{{ __('Toxicomanías') }}</label>
                            <div class="col-md-6">
                                <input id="drugAddiction" type="text" class="form-control @error('drugAddiction') is-invalid @enderror" name="drugAddiction" value="{{ $history->drugAddiction }}"  autocomplete="drugAddiction" autofocus>
                                @error('drugAddiction')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="card-header">{{ __('ANTECEDENTES PERSONALES PATOLOGICOS') }}</div>
                        <br>
                        <div class="form-group row">
                            <label for="childhoodIllnesses" class="col-md-4 col-form-label text-md-right">{{ __('Enfermedades en la Infancia') }}</label>
                            <div class="col-md-6">
                                <input id="childhoodIllnesses" type="text" class="form-control @error('childhoodIllnesses') is-invalid @enderror" name="childhoodIllnesses" value="{{ $history->childhoodIllnesses }}"  autocomplete="birthdate" autofocus>
                                @error('childhoodIllnesses')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="surgeries" class="col-md-4 col-form-label text-md-right">{{ __('Cirugias') }}</label>
                            <div class="col-md-6">
                                <input id="surgeries" type="text" class="form-control @error('surgeries') is-invalid @enderror" name="surgeries" value="{{ $history->surgeries }}"  autocomplete="surgeries" autofocus>
                                @error('surgeries')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="allergies" class="col-md-4 col-form-label text-md-right">{{ __('Alergias') }}</label>
                            <div class="col-md-6">
                                <input id="allergies" type="text" class="form-control @error('allergies') is-invalid @enderror" name="allergies" value="{{ $history->allergies }}"  autocomplete="allergies" autofocus>
                                @error('allergies')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="currentMedication" class="col-md-4 col-form-label text-md-right">{{ __('Medicamentos que toma actualmente') }}</label>
                            <div class="col-md-6">
                                <input id="currentMedication" type="text" class="form-control @error('currentMedication') is-invalid @enderror" name="currentMedication" value="{{ $history->currentMedication }}"  autocomplete="currentMedication" autofocus>
                                @error('currentMedication')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="card-header">{{ __('ANTECEDENTES GINECO OBSTETRICOS') }}</div>
                        <br>
                        <div class="form-group row">
                            <label for="menarca" class="col-md-4 col-form-label text-md-right">{{ __('Menarca') }}</label>
                            <div class="col-md-6">
                                <input id="menarca" type="text" class="form-control @error('menarca') is-invalid @enderror" name="menarca" value="{{ $history->menarca }}"  autocomplete="menarca" autofocus>
                                @error('menarca')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="menstrualRhythm" class="col-md-4 col-form-label text-md-right">{{ __('Ritmo Menstrual') }}</label>
                            <div class="col-md-6">
                                <input id="menstrualRhythm" type="text" class="form-control @error('menstrualRhythm') is-invalid @enderror" name="menstrualRhythm" value="{{ $history->menstrualRhythm }}"  autocomplete="menstrualRhythm" autofocus>
                                @error('menstrualRhythm')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="fum" class="col-md-4 col-form-label text-md-right">{{ __('FUM') }}</label>
                            <div class="col-md-6">
                                <input id="fum" type="text" class="form-control @error('fum') is-invalid @enderror" name="fum" value="{{ $history->fum }}"  autocomplete="fum" autofocus>
                                @error('fum')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="gestas" class="col-md-4 col-form-label text-md-right">{{ __('Gesta') }}</label>
                            <div class="col-md-6">
                                <input id="gestas" type="text" class="form-control @error('gestas') is-invalid @enderror" name="gestas" value="{{ $history->gestas }}"  autocomplete="gestas" autofocus>
                                @error('gestas')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="paras" class="col-md-4 col-form-label text-md-right">{{ __('Paras') }}</label>
                            <div class="col-md-6">
                                <input id="paras" type="text" class="form-control @error('paras') is-invalid @enderror" name="paras" value="{{ $history->paras }}"  autocomplete="paras" autofocus>
                                @error('paras')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="abortions" class="col-md-4 col-form-label text-md-right">{{ __('Abortos') }}</label>
                            <div class="col-md-6">
                                <input id="abortions" type="text" class="form-control @error('abortions') is-invalid @enderror" name="abortions" value="{{ $history->abortions }}"  autocomplete="abortions" autofocus>
                                @error('abortions')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="caesareanSections" class="col-md-4 col-form-label text-md-right">{{ __('Cesáreas') }}</label>
                            <div class="col-md-6">
                                <input id="caesareanSections" type="text" class="form-control @error('caesareanSections') is-invalid @enderror" name="caesareanSections" value="{{ $history->caesareanSections }}"  autocomplete="caesareanSections" autofocus>
                                @error('caesareanSections')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="fup" class="col-md-4 col-form-label text-md-right">{{ __('FUP') }}</label>
                            <div class="col-md-6">
                                <input id="fup" type="text" class="form-control @error('fup') is-invalid @enderror" name="fup" value="{{ $history->fup }}"  autocomplete="fup" autofocus>
                                @error('fup')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="vsa" class="col-md-4 col-form-label text-md-right">{{ __('VSA') }}</label>
                            <div class="col-md-6">
                                <input id="vsa" type="text" class="form-control @error('vsa') is-invalid @enderror" name="vsa" value="{{ $history->vsa }}"  autocomplete="vsa" autofocus>
                                @error('vsa')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="contraceptiveUses" class="col-md-4 col-form-label text-md-right">{{ __('Uso de Anticonceptivos') }}</label>
                            <div class="col-md-6">
                                <input id="contraceptiveUses" type="text" class="form-control @error('contraceptiveUses') is-invalid @enderror" name="contraceptiveUses" value="{{ $history->contraceptiveUses }}"  autocomplete="contraceptiveUses" autofocus>
                                @error('contraceptiveUses')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="card-header">{{ __('EXPLORACION') }}</div>
                        <br>
                        <div class="form-group row">
                            <label for="weight" class="col-md-4 col-form-label text-md-right">{{ __('Peso') }}</label>
                            <div class="col-md-6">
                                <input id="weight" type="text" class="form-control @error('weight') is-invalid @enderror" name="weight" value="{{ $history->weight }}"  autocomplete="weight" autofocus>
                                @error('weight')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="size" class="col-md-4 col-form-label text-md-right">{{ __('Talla') }}</label>
                            <div class="col-md-6">
                                <input id="size" type="text" class="form-control @error('size') is-invalid @enderror" name="size" value="{{ $history->size }}"  autocomplete="size" autofocus>
                                @error('size')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="head" class="col-md-4 col-form-label text-md-right">{{ __('Cabeza') }}</label>
                            <div class="col-md-6">
                                <input id="head" type="text" class="form-control @error('head') is-invalid @enderror" name="head" value="{{ $history->head }}"  autocomplete="head" autofocus>
                                @error('head')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="eyes" class="col-md-4 col-form-label text-md-right">{{ __('Ojos') }}</label>
                            <div class="col-md-6">
                                <input id="eyes" type="text" class="form-control @error('eyes') is-invalid @enderror" name="eyes" value="{{ $history->eyes }}"  autocomplete="eyes" autofocus>
                                @error('eyes')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="ears" class="col-md-4 col-form-label text-md-right">{{ __('Oídos') }}</label>
                            <div class="col-md-6">
                                <input id="ears" type="text" class="form-control @error('ears') is-invalid @enderror" name="ears" value="{{ $history->ears }}"  autocomplete="ears" autofocus>
                                @error('ears')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="nose" class="col-md-4 col-form-label text-md-right">{{ __('Nariz') }}</label>
                            <div class="col-md-6">
                                <input id="nose" type="text" class="form-control @error('nose') is-invalid @enderror" name="nose" value="{{ $history->nose }}"  autocomplete="nose" autofocus>
                                @error('nose')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="mouth" class="col-md-4 col-form-label text-md-right">{{ __('Boca') }}</label>
                            <div class="col-md-6">
                                <input id="mouth" type="text" class="form-control @error('mouth') is-invalid @enderror" name="mouth" value="{{ $history->mouth }}"  autocomplete="mouth" autofocus>
                                @error('mouth')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="neck" class="col-md-4 col-form-label text-md-right">{{ __('Cuello') }}</label>
                            <div class="col-md-6">
                                <input id="neck" type="text" class="form-control @error('neck') is-invalid @enderror" name="neck" value="{{ $history->neck }}"  autocomplete="neck" autofocus>
                                @error('neck')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="chest" class="col-md-4 col-form-label text-md-right">{{ __('Tórax') }}</label>
                            <div class="col-md-6">
                                <input id="chest" type="text" class="form-control @error('chest') is-invalid @enderror" name="chest" value="{{ $history->chest }}"  autocomplete="chest" autofocus>
                                @error('chest')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="shape" class="col-md-4 col-form-label text-md-right">{{ __('Forma') }}</label>
                            <div class="col-md-6">
                                <input id="shape" type="text" class="form-control @error('shape') is-invalid @enderror" name="shape" value="{{ $history->shape }}"  autocomplete="shape" autofocus>
                                @error('shape')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="respiratoryMovements" class="col-md-4 col-form-label text-md-right">{{ __('Mov. Respiratorios') }}</label>
                            <div class="col-md-6">
                                <input id="respiratoryMovements" type="text" class="form-control @error('respiratoryMovements') is-invalid @enderror" name="respiratoryMovements" value="{{ $history->respiratoryMovements }}"  autocomplete="respiratoryMovements" autofocus>
                                @error('respiratoryMovements')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="fr" class="col-md-4 col-form-label text-md-right">{{ __('FR') }}</label>
                            <div class="col-md-6">
                                <input id="fr" type="text" class="form-control @error('fr') is-invalid @enderror" name="fr" value="{{ $history->fr }}"  autocomplete="fr" autofocus>
                                @error('fr')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="abnormalNoises" class="col-md-4 col-form-label text-md-right">{{ __('Ruidos Anormales') }}</label>
                            <div class="col-md-6">
                                <input id="abnormalNoises" type="text" class="form-control @error('abnormalNoises') is-invalid @enderror" name="abnormalNoises" value="{{ $history->abnormalNoises }}"  autocomplete="abnormalNoises" autofocus>
                                @error('abnormalNoises')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="fc" class="col-md-4 col-form-label text-md-right">{{ __('FC') }}</label>
                            <div class="col-md-6">
                                <input id="fc" type="text" class="form-control @error('fc') is-invalid @enderror" name="fc" value="{{ $history->fc }}"  autocomplete="fc" autofocus>
                                @error('fc')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="abdomen" class="col-md-4 col-form-label text-md-right">{{ __('Abdomen') }}</label>
                            <div class="col-md-6">
                                <input id="abdomen" type="text" class="form-control @error('abdomen') is-invalid @enderror" name="abdomen" value="{{ $history->abdomen }}"  autocomplete="abdomen" autofocus>
                                @error('abdomen')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="superiorLimbs" class="col-md-4 col-form-label text-md-right">{{ __('Extremidades Superiores') }}</label>
                            <div class="col-md-6">
                                <input id="superiorLimbs" type="text" class="form-control @error('superiorLimbs') is-invalid @enderror" name="superiorLimbs" value="{{ $history->superiorLimbs }}"  autocomplete="superiorLimbs" autofocus>
                                @error('superiorLimbs')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="lowerExtremities" class="col-md-4 col-form-label text-md-right">{{ __('Extremidades Inferiores') }}</label>
                            <div class="col-md-6">
                                <input id="lowerExtremities" type="text" class="form-control @error('lowerExtremities') is-invalid @enderror" name="lowerExtremities" value="{{ $history->lowerExtremities }}"  autocomplete="lowerExtremities" autofocus>
                                @error('lowerExtremities')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="d-none">
                            <div class="form-group row">
                                <label for="patient_id" class="col-md-4 col-form-label text-md-right">{{ __('Paciente') }}</label>
                                <div class="col-md-6">
                                    <input id="patient_id" type="text" class="form-control @error('patient_id') is-invalid @enderror" name="patient_id" value="{{ request()->route('id') }}">
                                    @error('patient_id')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Actualizar') }}
                                </button>
                                <button class="btn waves-effect waves-light">
                                    <a href="{{ redirect()->getUrlGenerator()->previous()}}" class="white-text">Cancelar</a>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection