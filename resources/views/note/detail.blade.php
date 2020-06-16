@extends('layouts.app')

@section('content')
    <div class="container">
        <section>
            <div class="col-md-8">
                <button class="btn waves-effect waves-light">
                    <a href="{{ redirect()->getUrlGenerator()->previous()}}" class="white-text">Regresar</a>
                </button>
            </div>
        </section>
        <br>
        <hr>
        <section id="Obtener Usuarios">
            <h3>Asunto: {{$note->affair}}</h3>
            <h5>De: {{$note->doctor}}</h5>
            <br>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Nota</label>
                <textarea disabled class="form-control" id="exampleFormControlTextarea1" rows="3">{{$note->content}}</textarea>
              </div>
        </section>            
    </div>
@endsection