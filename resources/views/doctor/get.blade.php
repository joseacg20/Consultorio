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
            <h3>Doctores</h3>
            <table class="table table">
                <thead>
                  <tr>
                      <th>Nombre(s)</th>
                      <th>Apellido(s)</th>
                      <th>Email</th>
                      <th>Actualizar</th>
                      <th>Detalle</th>
                      <th>Eliminar</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach($doctors as $doctor)
                        <tr>
                            <td>{{$doctor->name}}</td>
                            <td>{{$doctor->lastName}}</td>
                            <td>{{$doctor->email}}</td>
                            <td>
                                <button class="btn waves-effect red" >
                                    <a href="{{ route('doctores.edit', $doctor->id) }}" role="button" style="color:green; text-decoration:none">Actualizar</a>
                                </button>
                            </td> 
                            <td>
                                <button class="btn waves-effect red" >
                                    <a href="{{ route('doctores.show', $doctor->id) }}" role="button" style="text-decoration:none">Ver</a>
                                </button>
                            </td> 
                            <td>
                                <!-- Button trigger modal -->
                                <button class="btn waves-effect red" data-toggle="modal" style="color:red" data-target="#eliminar-{{ $doctor->id }}">Eliminar</button>
                            
                                <!-- Modal -->
                                <div class="modal fade" id="eliminar-{{ $doctor->id }}" tabindex="-1" role="dialog" aria-labelledby="eliminarTitle" aria-hidden="true">
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
                                                <form method="POST" action="{{ route('doctores.destroy', $doctor->id) }}" accept-charset="UTF-8">
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
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </section>
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