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
        <h3>Doctor {{$doctor->name}}</h3>
            <table class="table table">
                <thead>
                  <tr>
                      <th>Nombre(s)</th>
                      <th>Apellido(s)</th>
                      <th>Especialidad</th>
                      <th>Cedula Profesional</th>
                      <th>Email</th>
                      <th>Creado</th>
                      <th>Ultima Actualizacion</th>
                  </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{$doctor->name}}</td>
                        <td>{{$doctor->lastName}}</td>
                        <td>{{$doctor->specialty}}</td>
                        <td>{{$doctor->professionalCertificate}}</td>
                        <td>{{$doctor->email}}</td>
                        <td>{{$doctor->created_at}}</td>
                        <td>{{$doctor->updated_at}}</td>
                    </tr>
                </tbody>
            </table>    
        </section>
    </div>
@endsection