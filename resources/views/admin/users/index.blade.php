@extends('adminlte::page')

@section('title', 'Bloog')

@section('content_header')
    <h1>Lista de Usuarios</h1>
@stop

@section('content')
    @livewire('admin.users-index')
@stop
