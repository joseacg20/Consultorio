@extends('layouts.app')

@section('content')
    <div class="container">
        <section>
            <div class="col-md-8">
                <button class="btn waves-effect red" >
                    <a href="{{ route('file', request()->route('id')) }}" role="button" style="text-decoration:none">Regresar</a>
                </button>
            </div>
        </section>
        <br>
        <hr>
        <section id="Obtener Usuarios">
            <h3>Historias Clinicas</h3>
            <button class="btn waves-effect red" >
                <a href="{{ route('histcreate', request()->route('id')) }}" role="button" style="text-decoration:none">Registrar una Historia</a>
            </button>
            <br>
            <br>
            @if ($patient->share == 1)
                <table class="table table">
                    <thead>
                    <tr>
                        <th>id</th>
                        <th>Fecha</th>
                        <th>Creada por</th>
                        <th>Detalles</th>
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
                                <td>
                                    <button class="btn waves-effect red" >
                                        <a href="{{ route('historias.show', $history->id) }}" role="button" style="text-decoration:none">Ver</a>
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>  
            @else
            <table class="table table">
                <thead>
                <tr>
                    <th>id</th>
                    <th>Fecha</th>
                    <th>Actualizar</th>
                    <th>Detalles</th>
                    <th>Eliminar</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($stories as $history)
                        <tr>
                            <td>{{$history->id}}</td>
                            <td>{{$history->created_at}}</td>
                            <td>
                                <button class="btn waves-effect red" >
                                    <a href="{{ route('historias.edit', $history->id) }}" role="button" style="color:green; text-decoration:none">Actualizar</a>
                                </button>
                            </td> 
                            <td>
                                <button class="btn waves-effect red" >
                                    <a href="{{ route('historias.show', $history->id) }}" role="button" style="text-decoration:none">Ver</a>
                                </button>
                            </td>
                            <td> 
                                <!-- Button trigger modal -->
                                <button class="btn waves-effect red" data-toggle="modal" style="color:red" data-target="#eliminar-{{ $history->id }}">Eliminar</button>
                                
                                <!-- Modal -->
                                <div class="modal fade" id="eliminar-{{ $history->id }}" tabindex="-1" role="dialog" aria-labelledby="eliminarTitle" aria-hidden="true">
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
                                                <form method="POST" action="{{ route('historias.destroy', $history->id) }}" accept-charset="UTF-8">
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
            @endif

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