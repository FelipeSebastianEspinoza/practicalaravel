@extends('layouts.app')

@section('content')
    <table class="table table-light sm">
        <thead class="thead-light">
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Foto</th>
                <th>Email</th>
                <th>Role_id</th>
                <th>F.Creado</th>
                <th>F.Actualizado</th>
            </tr>
        </thead>
        <tbody>
            @if($users)
                @foreach($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        @if ($user->foto)
                        <td><img src="/images/{{$user->foto ? $user->foto->ruta_foto : '-' }}" width="100"> </td>
                        @else
                        <td>Sin imagen </td>
                        @endif
                         
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->role_id }}</td>
                        <td>{{ $user->created_at }}</td>
                        <td>{{ $user->updated_at }}</td>
                    </tr>
                @endforeach
            @else
                <td>No existen registros.</td>
            @endif
        </tbody>
    </table>
@endsection
