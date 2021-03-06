<div class="card">

    <div class="card-header">
        <input wire:model="search" class="form-control" type="text" placeholder="Ingrese el nombre de un post">
    </div>

    @if ($posts->count())
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th colspan="2"></th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($posts as $post)
                        <tr>
                            <td>{{ $post->id }}</td>
                            <td>{{ $post->name }}</td>
                            <td width="10px">

                                @can('admin.posts.edit')
                                    <a class="btn btn-primary btn-sm" href="{{ route('admin.posts.edit', $post) }}">
                                        <i class="fas fa-pen-square"></i>
                                    </a>
                                @endcan

                            </td>
                            <td width="10px">

                                @can('admin.posts.destroy')
                                    <form action="{{ route('admin.posts.destroy', $post) }}" method="POST">
                                        @csrf
                                        @method('DELETE')

                                        <button class="btn btn-danger btn-sm" type="submit">
                                            <i class="far fa-trash-alt"></i>
                                        </button>
                                    </form>
                                @endcan

                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="card-footer">
            {{ $posts->links() }}
        </div>
    @else
        <div class="card-body">
            <div class="alert alert-danger">
                <h5><i class="icon fas fa-ban"></i> No hay resultados</h5>
                Intente buscar otro post
            </div>
        </div>
    @endif

</div>
