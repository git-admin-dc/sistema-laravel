@extends('adminlte::page')

@section('content')
    <div class="container">
        <div class="col-md-12">
            <form action="{{ route('modelo.store') }}" class="form-horizontal" method="POST">
                @csrf
                <div class="row">
                    <div class="form-group">
                        <label>Modelo do Veiculo</label>
                        <input type="text" class="form-control" name="modelo" />
                    </div>
                </div>
                <div class="row">
                    <div class="form-group">
                        <label>Modelo do Veiculo</label>
                        <select type="text" class="form-control" name="status">
                                <option value="ativo">Ativo</option>
                                <option value="Inativo">Inativo</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Salvar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@stop
