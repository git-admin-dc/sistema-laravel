@extends('adminlte::page')

@section('title', 'Diamond Control')

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('content_header')
    <h1>Dashboard </h1>
@stop

@section('content')
    @include("financas.partials._index_table_luz")
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
