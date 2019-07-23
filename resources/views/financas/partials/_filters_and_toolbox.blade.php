<input id="search_box" name="search_box" type="text" class="text form-control" placeholder="Procurar..."/>
<a href="{{-- route('dre.chaves.export',Request::all()) --}}" class="btn btn-default">
    <i class="fa fa-download"></i> Exportar
</a>
<a href="{{-- route('financas.create',Request::all()) --}}" class="btn btn-default">
    <i class="fa fa-plus"></i> Incluir
</a>
{{-- @include("partials._filtro_tipo_chave")

<a href="{{ route('dre.chaves.export',Request::all()) }}" class="btn btn-default">
    <i class="fa fa-download"></i> Exportar
</a> 
<a href="{{ route('financas.create',Request::all()) }}" class="btn btn-default">
    <i class="fa fa-plus"></i> Incluir
</a>--}}