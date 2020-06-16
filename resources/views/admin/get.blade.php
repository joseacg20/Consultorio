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
            <h3>Roles</h3>
            <table class="table table">
                <thead>
                  <tr>
                      <th>Nombre</th>
                      <th>Descripcion</th>
                      <th>Actualizar</th>
                      <th>Eliminar</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach($roles as $role)
                        <tr>
                            <td>{{$role->role}}</td>
                            <td>{{$role->description}}</td>
                            @if ($role->id > 3)
                                <td>
                                    <button class="btn waves-effect red" >
                                        <a href="{{ route('administradores.edit', $role->id) }}" role="button" style="color:green; text-decoration:none">Actualizar</a>
                                    </button>
                                </td> 
                            @endif
                            @if ($role->id > 3)
                                <td>
                                    <!-- Button trigger modal -->
                                    <button class="btn waves-effect red" data-toggle="modal" style="color:red" data-target="#eliminar-{{ $role->id }}">Eliminar</button>
                                
                                    <!-- Modal -->
                                    <div class="modal fade" id="eliminar-{{ $role->id }}" tabindex="-1" role="dialog" aria-labelledby="eliminarTitle" aria-hidden="true">
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
                                                    <form method="POST" action="{{ route('administradores.destroy', $role->id) }}" accept-charset="UTF-8">
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
                            @endif
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