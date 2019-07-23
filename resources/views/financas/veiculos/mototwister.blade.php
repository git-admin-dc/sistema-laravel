@extends('adminlte::page')

@section('title', 'Diamond Control')

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('content_header')
    <h1>Dashboard </h1>
@stop

@section('content')
<section class="content">
    <div class="box box-default">
        <div class="box-header with-border">
            <div class="pull-right">
                <form id="form_filters" action="{{ route("financas.veiculos.mototwister") }}" class="form form-inline">
                    @include("financas.partials._filters_and_toolbox")
                </form>
            </div>
            <h2 class="box-title">Financas &rsaquo; Moto Twister (Miza)</h2>
        </div>
        <div class="box-body">
            @include("financas.partials._index_table_veiculos")
        </div>
    </div>
</section>
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
