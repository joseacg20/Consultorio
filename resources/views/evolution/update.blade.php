@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Actualizacion de') }} {{$evolution->type}}</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('evoluciones.update', $evolution->id) }}">
                        @csrf
                        @method('PUT')
                        <div class="form-group row">
                            <label for="type" class="col-md-4 col-form-label text-md-right">{{ __('Tipo') }}</label>
                            <div class="col-md-6">
                                    <select class="form-control" id="type" for="type" class="form-control @error('type') is-invalid @enderror" name="type" value="{{ $evolution->type }}" required autocomplete="type" autofocus>
                                    @if ($evolution->type == 'Consulta')
                                        <option>Consulta</option>
                                        <option>Evolucion</option>
                                    @else
                                        <option>Evolucion</option>
                                        <option>Consulta</option>
                                    @endif
                                    </select>
                                @error('type')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="syptoms" class="col-md-4 col-form-label text-md-right">{{ __('Sintomas') }}</label>
                            <div class="col-md-6">
                                <input id="syptoms" type="text" class="form-control @error('syptoms') is-invalid @enderror" name="syptoms" value="{{ $evolution->syptoms }}" required autocomplete="syptoms" autofocus>
                                @error('syptoms')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="pressure" class="col-md-4 col-form-label text-md-right">{{ __('Presion') }}</label>
                            <div class="col-md-6">
                                <input id="pressure" type="text" class="form-control @error('pressure') is-invalid @enderror" name="pressure" value="{{ $evolution->pressure }}" required autocomplete="pressure" autofocus>
                                @error('pressure')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="temp" class="col-md-4 col-form-label text-md-right">{{ __('Temperatura') }}</label>
                            <div class="col-md-6">
                                <input id="temp" type="text" class="form-control @error('temp') is-invalid @enderror" name="temp" value="{{ $evolution->temp }}" required autocomplete="temp" autofocus>
                                @error('temp')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="rc" class="col-md-4 col-form-label text-md-right">{{ __('Ritmo Cardiaco') }}</label>
                            <div class="col-md-6">
                                <input id="specialty" type="text" class="form-control @error('rc') is-invalid @enderror" name="rc" value="{{ $evolution->rc }}" autocomplete="rc" autofocus>
                                @error('rc')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="diagnosis" class="col-md-4 col-form-label text-md-right">{{ __('Diagnostico') }}</label>
                            <div class="col-md-6">
                                <input id="diagnosis" type="text" class="form-control @error('diagnosis') is-invalid @enderror" name="diagnosis" value="{{ $evolution->diagnosis }}"  autocomplete="diagnosis" autofocus>
                                @error('diagnosis')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="treatment" class="col-md-4 col-form-label text-md-right">{{ __('Tratamiento') }}</label>
                            <div class="col-md-6">
                                <input id="treatment" type="text" class="form-control @error('treatment') is-invalid @enderror" name="treatment" value="{{ $evolution->treatment }}"  autocomplete="treatment" autofocus>
                                @error('treatment')
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