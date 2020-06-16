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
        <h3>Secretaria {{$secretary->name}}</h3>
            <table class="table table">
                <thead>
                  <tr>
                      <th>Nombre(s)</th>
                      <th>Apellido(s)</th>
                      <th>Email</th>
                      <th>Creado</th>
                      <th>Ultima Actualizacion</th>
                  </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{$secretary->name}}</td>
                        <td>{{$secretary->lastName}}</td>
                        <td>{{$secretary->email}}</td>
                        <td>{{$secretary->created_at}}</td>
                        <td>{{$secretary->updated_at}}</td>
                    </tr>
                </tbody>
            </table>
        </section>
    </div>
@endsection