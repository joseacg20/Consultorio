@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Eliminacion de Rol para un Usuario') }}</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('asrole', $user->id)}}">
                        @csrf
                        <div class="form-group row">
                            <label for="user_id" class="col-md-4 col-form-label text-md-right">{{ __('Usuario') }}</label>
                            <div class="col-md-6">
                                    <select class="form-control" id="user_id" for="user_id" class="form-control @error('user_id') is-invalid @enderror" name="user_id" value="{{ old('user_id') }}" required autocomplete="user_id" autofocus>
                                        @foreach($users as $user_id)
                                            <option value="{{$user_id->id}}">{{$user_id->name}} {{$user_id->lastName}}</option>
                                        @endforeach
                                    </select>
                                @error('user_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        {{-- <div class="form-group row">
                            <label for="role_id" class="col-md-4 col-form-label text-md-right">{{ __('Asignar nuevo Rol') }}</label>
                            <div class="col-md-6">
                                    <select class="form-control" id="role_id" for="role_id" class="form-control @error('role_id') is-invalid @enderror" name="role_id" value="{{ old('role_id') }}" required autocomplete="role_id" autofocus>
                                        @foreach($roless as $roles_id)
                                            <option value="{{$roles_id->id}}">{{$roles_id->role}}</option>
                                        @endforeach
                                    </select>
                                @error('role_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div> --}}

                        {{-- <div class="form-group row">
                            <label for="role_id" class="col-md-4 col-form-label text-md-right">{{ __('Roles Asignados') }}</label>
                            <div class="col-md-6">
                                <input type="checkbox" name="roles[]" value="{{$roles->id}}" class="filled-in" id="{{$rol->id}}" @if ($user->has_role($roles->id)) checked @endif/>
                                <label for="{{$roles->id}}">
                                    <span>{{$rol->role}}</span>
                                </label>
                            </div>
                        </div> --}}
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Eliminar') }}
                                </button>
                                <button class="btn waves-effect waves-light">
                                    <a href="{{ route('administradores.index') }}" class="white-text">Cancelar</a>
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
