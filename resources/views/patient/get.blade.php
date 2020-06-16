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
            <h3>Pacientes</h3>
            <table class="table table">
                <thead>
                  <tr>
                      <th>Carnet</th>
                      <th>Name</th>
                      <th>Apellidos</th>
                      <th>Email</th>
                      <th>Actualizar</th>
                      <th>Detalles</th>
                      <th>Eliminar</th>
                      <th>Expedientes</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach($patients as $patient)
                        <tr>
                            <td>{{$patient->id}}</td>
                            <td>{{$patient->name}}</td>
                            <td>{{$patient->lastName}}</td>
                            <td>{{$patient->email}}</td>
                            <td>
                                <button class="btn waves-effect red" >
                                    <a href="{{ route('pacientes.edit', $patient->id) }}" role="button" style="color:green; text-decoration:none">Actualizar</a>
                                </button>
                            </td> 
                            <td>
                                <button class="btn waves-effect red" >
                                    <a href="{{ route('pacientes.show', $patient->id) }}" role="button" style="text-decoration:none">Ver</a>
                                </button>
                            </td>
                            <td> 
                                <!-- Button trigger modal -->
                                <button class="btn waves-effect red" data-toggle="modal" style="color:red" data-target="#eliminar-{{ $patient->id }}">Eliminar</button>
                                
                                <!-- Modal -->
                                <div class="modal fade" id="eliminar-{{ $patient->id }}" tabindex="-1" role="dialog" aria-labelledby="eliminarTitle" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                            <h5 class="modal-title" id="eliminarTitle">Confirmacion de Eliminacion</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                            </div>
                                            <div class="modal-body">
                                                <p>
                                                    La siguiente accion es irreversible una vez que confirmes la accion el daro sera eliminado por completo
                                                    <br>
                                                    ¿Estas seguro?
                                                </p>
                                            </div>
                                            <div class="modal-footer">
                                                <form method="POST" action="{{ route('pacientes.destroy', $patient->id) }}" accept-charset="UTF-8">
                                                    @csrf
                                                    @method('delete')
                                                        <button class="btn waves-effect red" type="submit" style="color:red">Eliminar</button> 
                                                </form>
                                                <button class="btn waves-effect blue" type="button" style="text-decoration:none" data-dismiss="modal">Cancelar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <button class="btn waves-effect red" >
                                    <a href="{{ route('file', $patient->id) }}" role="button" style="color:orange; text-decoration:none">Ver</a>
                                </button>
                            </td>
                            <td>

                            </td>
                        </tr>
                        
                    @endforeach
                </tbody>
            </table>
        </section>
        
        @if (!$sharePatient->isEmpty())
        <hr>
        <h3>Pacientes Compartidos</h3>
        <section id="Obtener Pacientess Compartidos">
            <table class="table table">
                <thead>
                    <tr>
                        <th>Carnet</th>
                        <th>Name</th>
                        <th>Apellidos</th>
                        <th>Email</th>
                        <th>Expedientes</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($sharePatient as $share)
                        <tr>
                            <td>{{$share->id}}</td>
                            <td>{{$share->name}}</td>
                            <td>{{$share->lastName}}</td>
                            <td>{{$share->email}}</td>
                            <td>
                                <button class="btn waves-effect red" >
                                    <a href="{{ route('file', $share->id) }}" role="button" style="color:orange; text-decoration:none">Ver</a>
                                </button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </section>      
        @endif
    </div>

    <script type="text/javascript">
        setTimeout(function () {
            $(document).ready(function(){
                $('#myModal').on('shown.bs.modal', function () {
                    $('#myInput').trigger('focus')
                })
            });
        }, 0);
    </script>
@endsection