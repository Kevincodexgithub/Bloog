@extends('adminlte::page')

@section('title', 'Bloog')

@section('content_header')
    <a class="btn btn-secondary btn-sm float-right" href="{{ route('admin.posts.create') }}">
        <i class="far fa-fw fa-file-alt "></i> Nuevo Post
    </a>
    <h1>Listado de Posts</h1>
@stop

@section('content')
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
