@extends('layouts.app')

@section('content')
<div class="container">
    @guest
    <div class="row justify-content-center">
        <div class="col-md-12 justify-content-center">
            <img style="height: 650px;" class="rounded mx-auto d-block"  src="{{ asset ('../public/images/home.png') }}">
        </div>
    </div>
    @else
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Inicio</div>
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                            @php
                                $user = Auth::user();
                            @endphp
                        <h4>{{$user->name}} {{$user->lastName}}</h4>
                        <h2>Nos alegra que estes de vuelta!!!</h2>
                    </div>
                @endguest
            </div>
        </div>
    </div>
</div>
@endsection
