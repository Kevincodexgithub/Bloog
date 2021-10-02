<div class="form-group">
    {!! Form::label('name', 'Nombre') !!}
    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre del rol']) !!}

    @error('name')
        <small class="text-danger">
            {{ $message }}
        </small>
    @enderror
</div>
<h2>Lista de Permisos</h2>
<div class="row">
    @foreach ($permissions as $permission)
        <div class="col-md-3">
            <label>
                {!! Form::checkbox('permissions[]', $permission->id, null, ['class' => 'mr-1']) !!}
                {{ $permission->description }}
            </label>
        </div>
    @endforeach
</div>