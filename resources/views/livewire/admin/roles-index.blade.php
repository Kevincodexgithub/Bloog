<div class="card">
    <div class="card-header">
        <input wire:model="search" class="form-control" type="text" placeholder="Ingrese el nombre de un rol">
    </div>

    @if ($roles->count())

        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Role</th>
                        <th colspan="2"></th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($roles as $role)
                        <tr>
                            <td>{{ $role->id }}</td>
                            <td>{{ $role->name }}</td>
                            <td width="10px">

                                @can('admin.roles.edit')
                                    <a href="{{ route('admin.roles.edit', $role) }}" class="btn btn-primary btn-sm"
                                        title="Editar">
                                        <i class="fas fa-pen-square"></i>
                                    </a>
                                @endcan

                            </td>
                            <td width="10px">

                                @can('admin.roles.destroy')
                                    <form action="{{ route('admin.roles.destroy', $role) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">
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
            {{ $roles->links() }}
        </div>
    @else
        <div class="card-body">
            <div class="alert alert-danger">
                <h5><i class="icon fas fa-ban"></i> No hay resultados</h5>
                Intente buscar otro rol
            </div>
        </div>
    @endif
</div>
