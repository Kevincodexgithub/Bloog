@extends('adminlte::page')

@section('title', 'Bloog')

@section('content_header')
    @can('admin.categories.create')
        <a class="btn btn-secondary btn-sm float-right" href="{{ route('admin.categories.create') }}"
            title="Agregar Categoria">
            <i class="fas fa-fw fa-plus-circle"></i> Agregar categoria
        </a>
    @endcan
    <h1>Listado de Categorias</h1>
@stop

@section('content')

    @if (session('info'))
        <div id="alerta" class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <h5><i class="icon fas fa-check"></i> {{ session('info') }}</h5>
        </div>
    @endif

    @livewire('admin.categories-index')
@stop

@section('js')
    <script>
        $("#alerta").delay(1800).fadeOut("slow");
    </script>
@stop
