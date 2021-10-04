@extends('adminlte::page')

@section('title', 'Bloog')

@section('content_header')

    @can('admin.posts.create')
        <a class="btn btn-secondary btn-sm float-right" href="{{ route('admin.posts.create') }}">
            <i class="far fa-fw fa-file-alt "></i> Nuevo Post
        </a>
    @endcan

    <h1>Listado de Posts</h1>
@stop

@section('content')
    @if (session('info'))
        <div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <h5><i class="icon fas fa-check"></i> {{ session('info') }}</h5>
        </div>
    @endif

    @livewire('admin.posts-index')
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>
        console.log('Hi!');
    </script>
@stop
