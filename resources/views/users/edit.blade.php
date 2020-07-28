@extends('layouts.app')

@section('content')
    <div class="container container-sm">
        {!! Form::model($user, ['method' => 'PATCH', 'action' => ['UserController@update', $user->id], 'files' => true]) !!}

        {!! Form::token() !!}
        <div class="form-group">
            <label for="nombre">Name</label>
            <input id="nombre" class="form-control" type="text" name="name" value="{{ $user->name }}">
        </div>
        <div class="form-group">
            <label for="nombre">Email</label>
            <input id="nombre" class="form-control" type="text" name="email" value="{{ $user->email }}">
        </div>
        <div class="form-group">
            <label for="nombre">Role</label>
            <input id="nombre" class="form-control" type="text" name="role_id" value="{{ $user->id }}">
        </div>

        <div class="form-group">
            <label for="nombre">Foto</label>
            <img src="/images/{{ $user->foto ? $user->foto->ruta_foto : 'screenshot_4.jpg' }}" width="100">
        </div>

        <input id="foto" class="form-control" type="file" name="foto_id" value="{{ $user->id }}">
        <button class="btn btn-primary" type="submit">Actualizar</button>

        {!! Form::reset('Borrar campos') !!}
        {!! Form::close() !!}

        {!! Form::model($user, ['method' => 'DELETE', 'action' => ['UserController@destroy', $user->id]]) !!}

        <button class="btn btn-primary" type="submit">Eliminar</button>

        {!! Form::close() !!}

    </div>
@endsection
