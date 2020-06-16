@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Actualizacion de Doctor') }}</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('doctores.update', $doctor->id) }}">
                        @csrf
                        @method('PUT')
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nombre(s)') }}</label>
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $doctor->name }}" required autocomplete="name" autofocus>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="lastName" class="col-md-4 col-form-label text-md-right">{{ __('Apellido(s)') }}</label>
                            <div class="col-md-6">
                                <input id="lastName" type="text" class="form-control @error('lastName') is-invalid @enderror" name="lastName" value="{{ $doctor->lastName }}" required autocomplete="lastName" autofocus>
                                @error('lastName')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="specialty" class="col-md-4 col-form-label text-md-right">{{ __('Especialidad') }}</label>
                            <div class="col-md-6">
                                <input id="specialty" type="text" class="form-control @error('specialty') is-invalid @enderror" name="specialty" value="{{ $doctor->specialty }}" autocomplete="specialty" autofocus>
                                @error('specialty')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="professionalCertificate" class="col-md-4 col-form-label text-md-right">{{ __('Cedula Profesional') }}</label>
                            <div class="col-md-6">
                                <input id="professionalCertificate" type="text" class="form-control @error('professionalCertificate') is-invalid @enderror" name="professionalCertificate" value="{{ $doctor->professionalCertificate }}"  autocomplete="professionalCertificate" autofocus>
                                @error('professionalCertificate')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Correo electronico') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $doctor->email }}" required autocomplete="email">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Actualizar') }}
                                </button>
                                <button class="btn waves-effect waves-light">
                                    <a href="{{ route('doctores.index') }}" class="white-text">Cancelar</a>
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