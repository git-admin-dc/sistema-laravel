@extends('adminlte::page')

@section('content')
    <h1>Modelos </h1>
    <div class="container">
        <div class="col-md-12">
            @foreach ($modelos as $modelo)
                <h3>{{ $modelo->modelo }} </h3>
            @endforeach
        </div>
    </div>
@stop
