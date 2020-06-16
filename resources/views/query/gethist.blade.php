@extends('layouts.app')

@section('content')
    <div class="container">
        <section>
            <div class="col-md-8">
                <button class="btn waves-effect red" >
                    <a href="{{ redirect()->getUrlGenerator()->previous() }}" role="button" style="text-decoration:none">Regresar</a>
                </button>
            </div>
        </section>
        <br>
        <hr>
        <section id="Obtener Usuarios">
            <h3>Historias Clinicas</h3>
            <br>
            <br>
            <table class="table table">
                <thead>
                <tr>
                    <th>No</th>
                    <th>Fecha</th>
                    <th>Creada por</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($stories as $history)
                        <tr>
                            <td>{{$history->id}}</td>
                            <td>{{$history->created_at}}</td>
                            @foreach ($users as $user)
                                @if ($user->id == $history->user_id)
                                    <td>{{$user->name}} {{$user->lastName}}</td>
                                @endif 
                            @endforeach
                        </tr>
                    @endforeach
                </tbody>
            </table>  
        </section>
    </div>
@endsection