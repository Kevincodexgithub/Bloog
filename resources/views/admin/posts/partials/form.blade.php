<div class="form-group">

    {!! Form::hidden('user_id', auth()->user()->id) !!}

    {!! Form::label('name', 'Nombre:') !!}
    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre del post']) !!}

    @error('name')
        <span class="text-danger">
            <i class="icon fas fa-ban"></i> {{ $message }}
        </span>
    @enderror

</div>

<div class="form-group">

    {!! Form::label('slug', 'Slug:') !!}
    {!! Form::text('slug', null, ['class' => 'form-control', 'readonly']) !!}

    @error('slug')
        <span class="text-danger">
            <i class="icon fas fa-ban"></i> {{ $message }}
        </span>
    @enderror

</div>

<div class="form-group">

    {!! Form::label('category_id', 'Categorias:') !!}
    {!! Form::select('category_id', $categories, null, ['class' => 'form-control']) !!}

    @error('category_id')
        <span class="text-danger">
            <i class="icon fas fa-ban"></i> {{ $message }}
        </span>
    @enderror

</div>

<div class="form-group">
    <p class="font-weight-bold">Etiquetas:</p>
    @foreach ($tags as $tag)
        <label class="mr-2">
            {!! Form::checkbox('tags[]', $tag->id, null) !!}
            {{ $tag->name }}
        </label>
    @endforeach

    @error('tags')
        <br>
        <span class="text-danger">
            <i class="icon fas fa-ban"></i> {{ $message }}
        </span>
    @enderror

</div>

<div class="row mb-3">
    <div class="col">
        <div class="image-wrapper">
            <img id="picture"
                src="https://media.istockphoto.com/photos/default-wood-word-picture-id1312337165?s=612x612" alt="">
        </div>
    </div>
    <div class="col">
        <div class="form-group">
            {!! Form::label('file', 'Imagen que se mostrará en el post') !!}
            {!! Form::file('file', ['class' => 'form-control-file', 'accept' => 'image/*']) !!}
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cupiditate fuga distinctio nobis optio laudantium
            temporibus nemo nam. Animi saepe suscipit error doloribus nulla temporibus nemo, ratione mollitia tenetur,
            doloremque est!
            <br>
            @error('file')
                <span class="text-danger">
                    <i class="icon fas fa-ban"></i> {{ $message }}
                </span>
            @enderror
        </div>
    </div>
</div>

<div class="form-group">

    {!! Form::label('extract', 'Extracto:') !!}
    {!! Form::textarea('extract', null, ['class' => 'form-control']) !!}

    @error('extract')
        <span class="text-danger">
            <i class="icon fas fa-ban"></i> {{ $message }}
        </span>
    @enderror

</div>

<div class="form-group">

    {!! Form::label('body', 'Cuerpo del Post:') !!}
    {!! Form::textarea('body', null, ['class' => 'form-control']) !!}

    @error('body')
        <span class="text-danger">
            <i class="icon fas fa-ban"></i> {{ $message }}
        </span>
    @enderror

</div>

<div class="form-group">

    <p class="font-weight-bold">Estado:</p>
    <label class="mr-2">
        {!! Form::radio('status', 1, true) !!}
        Borrador
    </label>

    <label>
        {!! Form::radio('status', 2) !!}
        Publicado
    </label>

    @error('status')
        <br>
        <span class="text-danger">
            <i class="icon fas fa-ban"></i> {{ $message }}
        </span>
    @enderror

</div>
