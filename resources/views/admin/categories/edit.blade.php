@extends('adminlte::page')

@section('title', 'Bloog')

@section('content_header')
    <h1>Editar categoria</h1>
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
            {!! Form::model($category, ['route' => ['admin.categories.update', $category], 'method' => 'put']) !!}

            @include('admin.categories.partials.form')

            <a href="{{ route('admin.categories.index') }}" class="btn btn-warning btn-sm float-right text-white">
                <i class="fas fa-fw fa-reply"></i> Volver
            </a>

            {!! Form::submit('Actualizar Categoria', ['class' => 'btn btn-primary btn-sm']) !!}

            {!! Form::close() !!}
        </div>
    </div>
@stop

@section('js')
    <script src="{{ asset('vendor/jQuery-Plugin-stringToSlug-1.3/jquery.stringToSlug.min.js') }}"></script>

    <script>
        $(document).ready(function() {
            $("#name").stringToSlug({
                setEvents: 'keyup keydown blur',
                getPut: '#slug',
                space: '-'
            });
        });

        $("#alerta").delay(1800).fadeOut("slow");
    </script>
@endsection
