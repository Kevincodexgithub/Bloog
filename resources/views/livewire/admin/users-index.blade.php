<div>
    <div class="card">
        <div class="card-header">
            <input wire:model="search" type="text" class="form-control"
                placeholder="Ingrese el nombre o correo del usuario a buscar">
        </div>
        @if ($users->count())
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Nombre</th>
                            <th>Email</th>
                            <th></th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td width="10px">
                                    <a class="btn btn-primary btn-sm"
                                        href="{{ route('admin.users.edit', $user) }}">Editar</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="card-footer">
                {{ $users->links() }}
            </div>
        @else
            <div class="card-body">
                <div class="alert alert-danger">
                    <h5><i class="icon fas fa-ban"></i> No hay resultados</h5>
                    Intente buscar otro usuario
                </div>
            </div>
        @endif

    </div>
</div>
