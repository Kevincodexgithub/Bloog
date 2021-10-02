@extends('adminlte::page')

@section('title', 'Bloog')

@section('content_header')
    <a class="btn btn-secondary btn-sm float-right" href="{{ route('admin.roles.create') }}" title="Agregar Categoria">
        <i class="fas fa-fw fa-plus-circle"></i> Agregar rol
    </a>
    <h1>Listado de roles</h1>
@stop

@section('content')
    @if (session('info'))
        <div id="alerta" class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <h5><i class="icon fas fa-check"></i> {{ session('info') }}</h5>
        </div>
    @endif
    <div class="card">
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Role</th>
                        <th colspan="2"></th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($roles as $role)
                        <tr>
                            <td>{{ $role->id }}</td>
                            <td>{{ $role->name }}</td>
                            <td width="10px">
                                <a href="{{ route('admin.roles.edit', $role) }}" class="btn btn-primary btn-sm">
                                    Editar
                                </a>
                            </td>
                            <td width="10px">
                                <form action="{{ route('admin.roles.destroy', $role) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">
                                        Eliminar
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop

@section('js')
    <script>
        $("#alerta").delay(1800).fadeOut("slow");
    </script>
@stop
