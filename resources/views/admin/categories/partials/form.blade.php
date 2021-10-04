<div class="form-group">
    {!! Form::label('name', 'Nombre') !!}
    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre de la categoria']) !!}

    @error('name')
        <span class="text-danger"><i class="icon fas fa-ban"></i> {{ $message }}</span>
    @enderror

</div>

<div class="form-group">
    {!! Form::label('slug', 'Slug') !!}
    {!! Form::text('slug', null, ['class' => 'form-control', 'readonly']) !!}

    @error('slug')
        <span class="text-danger"><i class="icon fas fa-ban"></i> {{ $message }}</span>
    @enderror

</div>
