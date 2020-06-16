@extends('layouts.app')

@section('content')
    <div class="container">
        <section>
            <div class="col-md-8">
                <button class="btn waves-effect waves-light">
                    <a href="{{ redirect()->getUrlGenerator()->previous()}}" style="text-decoration:none" class="white-text">Regresar</a>
                </button>
            </div>
        </section>
        <br>
        <hr>
        <section id="Obtener Usuarios">
            <h3>Paciente {{$patient->name}} {{$patient->lastName}}</h3>
            <table class="table table">
                <thead>
                  <tr>
                      <th>id</th>
                      <th>Name</th>
                      <th>Apellidos</th>
                      <th>Email</th>
                      <th>Direccion</th>
                      <th>Telefono</th>
                      <th>Compartido</th>
                      <th>Doctor</th>
                      <th>Creado</th>
                  </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{$patient->id}}</td>
                        <td>{{$patient->name}}</td>
                        <td>{{$patient->lastName}}</td>
                        <td>{{$patient->email}}</td>
                        <td>{{$patient->home}}</td>
                        <td>{{$patient->phone}}</td>
                        @if ($patient->share == 1)
                            <td>Si</td> 
                        @else
                            <td>No</td>    
                        @endif
                        <td>{{$doctor->name}} {{$doctor->lastName}}</td>
                        <td>{{$patient->created_at}}</td>
                </tbody>
            </table>
        </section>            
    </div>
@endsection