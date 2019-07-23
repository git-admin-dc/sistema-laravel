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
        @foreach($viewagua as $viewaguas)
            <tr>                
                <td class="text-center">{{ (string) $viewaguas->nomeConta }}</td>
                <td class="text-center">{{ $viewaguas->dataVenc }}</td>
                <td class="text-center">{{ $viewaguas->dataPag }}</td>
                <td class="text-center">{{ $viewaguas->Valor }}</td>    
                <td class="text-center">{{ $viewaguas->description }}</td>            
            </tr>
        @endforeach
    </tbody>
</table>
