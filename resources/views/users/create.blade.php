@extends('layouts.app')

@section('content')
    <div class="container container-sm">
        {!! Form::open(['method' => 'POST', 'action' => 'UserController@store', 'files' => true]) !!}

        {!! Form::token() !!}
        <div class="form-group">
            <label for="nombre">Name</label>
            <input id="nombre" class="form-control" type="text" name="name" value="">
        </div>
        <div class="form-group">
            <label for="nombre">Email</label>
            <input id="nombre" class="form-control" type="text" name="email" value="">
        </div>
        <div class="form-group">
            <label for="nombre">Password</label>
            <input id="nombre" class="form-control" type="text" name="password" value="">
        </div>
        <div class="form-group">
            <label for="nombre">Verificar email</label>
            <input id="nombre" class="form-control" type="text" name="email_verified_at" value="">
        </div>
        <div class="form-group">
            <label for="nombre">Role</label>
            <input id="nombre" class="form-control" type="text" name="role_id" value="">
        </div>
        <div class="form-group">
            <label for="nombre">Foto</label>
            <input id="foto" class="form-control" type="file" name="foto_id" value="">
        </div>
        <button class="btn btn-primary" type="submit">Registrar</button>

        {!! Form::reset('Borrar campos') !!}
        {!! Form::close() !!}
    </div>
@endsection
