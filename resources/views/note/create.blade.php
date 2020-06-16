@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Notas') }}</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('notas.store')}}">
                        @csrf
                        <div class="form-group row">
                            <label for="affair" class="col-md-4 col-form-label text-md-right">{{ __('Asunto') }}</label>
                            <div class="col-md-6">
                                <input id="affair" type="text" class="form-control @error('affair') is-invalid @enderror" name="affair" value="{{ old('affair') }}" required autocomplete="affair" autofocus>
                                @error('affair')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="content" class="col-md-4 col-form-label text-md-right">{{ __('Contenido') }}</label>
                            <div class="col-md-6">
                                <input id="content" type="text" class="form-control @error('content') is-invalid @enderror" name="content" value="{{ old('content') }}" required autocomplete="content" autofocus>
                                @error('content')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="d-none">
                            <div class="form-group row">
                                <label for="doctor" class="col-md-4 col-form-label text-md-right">{{ __('Doctor') }}</label>
                                <div class="col-md-6">
                                    <input id="doctor" type="text" class="form-control @error('doctor') is-invalid @enderror" name="doctor" value="{{ Auth::user()->name }} {{ Auth::user()->lastName }}">
                                    @error('doctor')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="secretary" class="col-md-4 col-form-label text-md-right">{{ __('Para la Secretaria') }}</label>
                            <div class="col-md-6">
                                    <select class="form-control" id="secretary" for="secretary" class="form-control @error('secretary') is-invalid @enderror" name="secretary" value="{{ old('secretary') }}" required autocomplete="secretary" autofocus>
                                        @foreach($secretarys as $secretary)
                                            <option value="{{$secretary->id}}">{{$secretary->name}}</option>
                                        @endforeach
                                    </select>
                                @error('secretary')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Crear') }}
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
