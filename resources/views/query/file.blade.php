@extends('layouts.app')

@section('content')
<div class="container">
    <div class="col-md-8">
        <button class="btn waves-effect red" >
            <a href="{{ redirect()->getUrlGenerator()->previous() }}" role="button" style="text-decoration:none">Regresar</a>
        </button>
    </div>
    <br>
    <hr>
    <br>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <h3 class="text-center">Historias Clinicas</h3>
            <div class="row justify-content-center">
                <div class="col-md-12 justify-content-center">
                    <img style="height: 300px;" class="rounded mx-auto d-block"  src="{{ asset ('../public/images/historia.png') }}">
                </div>
                <br>
                <button class="btn waves-effect red" >
                    <a href="{{ route('morehist', $patient->id) }}" role="button" style="text-decoration:none">Ver</a>
                </button>
            </div>
        </div>
        <div class="col-md-6">
            <h3 class="text-center">Evoluciones y/o Consultas</h3>
            <div class="row justify-content-center">
                <div class="col-md-12 justify-content-center">
                    <img style="height: 300px;" class="rounded mx-auto d-block"  src="{{ asset ('../public/images/evolucion.png') }}">
                </div>
                <br>
                <button class="btn waves-effect red" >
                    <a href="{{ route('moreevo', $patient->id) }}" role="button" style="text-decoration:none">Ver</a>
                </button>
            </div>
        </div>
    </div>
</div>
@endsection


