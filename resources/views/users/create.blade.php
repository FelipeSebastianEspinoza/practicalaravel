@extends('layouts.app')

@section('content')
    <div class="container">
        {!! Form::open(['url' => 'foo/bar']) !!}
        <div class="form-group">
            <label for="nombre">Text</label>
            <input id="nombre" class="form-control" type="text" name="">
        </div>
        <div class="form-group">
            <label for="nombre">Text</label>
            <input id="nombre" class="form-control" type="text" name="">
        </div>
        <div class="form-group">
            <label for="nombre">Text</label>
            <input id="nombre" class="form-control" type="text" name="">
        </div>
        <div class="form-group">
            <label for="nombre">Text</label>
            <input id="nombre" class="form-control" type="text" name="">
        </div>
        <div class="form-group">
            <label for="nombre">Text</label>
            <input id="nombre" class="form-control" type="text" name="">
        </div>
        {!! Form::close() !!}
    </div>
@endsection
