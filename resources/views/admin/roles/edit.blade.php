@extends('adminlte::page')

@section('title', 'Bloog')

@section('content_header')
    <h1>Editar rol</h1>
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
            {!! Form::model($role, ['route' => ['admin.roles.update', $role], 'method' => 'put']) !!}

            @include('admin.roles.partials.form')

            <a href="{{ route('admin.roles.index') }}" class="btn btn-warning btn-sm float-right text-white">
                <i class="fas fa-fw fa-reply"></i> Volver
            </a>

            {!! Form::submit('Editar Rol', ['class' => 'btn btn-primary btn-sm']) !!}

            {!! Form::close() !!}
        </div>
    </div>
@stop

@section('js')
    <script>
        $("#alerta").delay(1800).fadeOut("slow");
    </script>
@stop
