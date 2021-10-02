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
        <div class="alert alert-success alert-dismissible">
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
                        <th>Name</th>
                        <th class="col-span-2"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $category)
                        <tr>
                            <td>{{ $category->id }}</td>
                            <td>{{ $category->name }}</td>
                            <td width="10px">
                                @can('admin.categories.edit')
                                    <a class="btn btn-primary btn-sm" href="{{ route('admin.categories.edit', $category) }}"
                                        title="Editar"><i class="fas fa-pen-square"></i>
                                    </a>
                                @endcan
                            </td>
                            <td width="10px">
                                @can('admin.categories.destroy')
                                    <form action="{{ route('admin.categories.destroy', $category) }}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <button class="btn btn-danger btn-sm"><i class="far fa-trash-alt"></i></button>
                                    </form>
                                @endcan
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop
