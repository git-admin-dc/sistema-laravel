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
        @foreach($viewresidencialoutros as $viewresidencialoutro)
            <tr>                
                <td class="text-center">{{ (string) $viewresidencialoutro->nomeConta }}</td>
                <td class="text-center">{{ $viewresidencialoutro->dataVenc }}</td>
                <td class="text-center">{{ $viewresidencialoutro->dataPag }}</td>
                <td class="text-center">{{ $viewresidencialoutro->Valor }}</td>    
                <td class="text-center">{{ $viewresidencialoutro->description }}</td>            
            </tr>
        @endforeach
    </tbody>
</table>
