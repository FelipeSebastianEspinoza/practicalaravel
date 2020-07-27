@extends('layouts.app')

@section('content')
    <div class="container">
        {!! Form::open(['method' => 'POST','action'=>'UserController@store']) !!}
         
        {!! Form::token(); !!}
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
            <input id="nombre" class="form-control" type="text" name="role" value="">
        </div>

        <button class="btn btn-primary" type="submit">Registrar</button>
       
        {!! Form::reset('Borrar campos') !!}
        {!! Form::close() !!}
    </div>
@endsection
