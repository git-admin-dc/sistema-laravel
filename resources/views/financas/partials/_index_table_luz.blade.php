<table class="table table-condensed table-striped table-hover" id="main-table">
    <thead>
        <tr>
            <th class="text-center">Conta</th>
            <th class="text-center">Data Vencimento</th>
            <th class="text-center">Data Pagamento</th>
            <th class="text-center">Valor Conta</th>
            <th class="text-center">Description</th>
        </tr>
    </thead>
    <tbody>
        @foreach($viewluz as $viewluzs)
            <tr>                
                <td class="text-center">{{ (string) $viewluzs->nomeConta }}</td>
                <td class="text-center">{{ $viewluzs->dataVenc }}</td>
                <td class="text-center">{{ $viewluzs->dataPag }}</td>
                <td class="text-center">{{ $viewluzs->Valor }}</td>    
                <td class="text-center">{{ $viewluzs->description }}</td>            
            </tr>
        @endforeach
    </tbody>
</table>
