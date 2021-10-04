@extends('adminlte::page')

@section('title', 'Bloog')

@section('content_header')

    @can('admin.roles.create')
        <a class="btn btn-secondary btn-sm float-right" href="{{ route('admin.roles.create') }}" title="Agregar Categoria">
            <i class="fas fa-fw fa-plus-circle"></i> Agregar rol
        </a>
    @endcan

    <h1>Listado de roles</h1>
@stop

@section('content')
    @if (session('info'))
        <div id="alerta" class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <h5><i class="icon fas fa-check"></i> {{ session('info') }}</h5>
        </div>
    @endif
    @livewire('admin.roles-index')
@stop

@section('js')
    <script>
        $("#alerta").delay(1800).fadeOut("slow");
    </script>
@stop
