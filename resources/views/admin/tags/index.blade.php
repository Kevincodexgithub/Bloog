@extends('adminlte::page')

@section('title', 'Bloog')

@section('content_header')
    <a class="btn btn-secondary btn-sm float-right" href="{{ route('admin.tags.create') }}" title="Agregar Etiquetas">
        <i class="fas fa-fw fa-plus-circle"></i> Agregar Etiqueta
    </a>
    <h1>Listados de etiquetas</h1>
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
                    @foreach ($tags as $tag)
                        <tr>
                            <td>{{ $tag->id }}</td>
                            <td>{{ $tag->name }}</td>
                            <td width="10px">
                                <a class="btn btn-primary btn-sm" href="{{ route('admin.tags.edit', $tag) }}"
                                    title="Editar"><i class="fas fa-pen-square"></i></a>
                            </td>
                            <td width="10px">
                                <form action="{{ route('admin.tags.destroy', $tag) }}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-danger btn-sm"><i class="far fa-trash-alt"></i></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop