<table class="table table-condensed table-striped table-hover" id="main-table">
    <thead>
        <tr>
            <th class="text-center">Nome Veiculo</th>
            <th class="text-center">Placa</th>
            <th class="text-center">Renavam</th>
            <th class="text-center">Debitos</th>
            <th class="text-center">Description</th>
        </tr>
    </thead>
    <tbody>
        @foreach($viewveiculos as $viewveiculos)
            <tr>                
                <td class="text-center">{{ (string) $viewveiculos->nomeVeiculo }}</td>
                <td class="text-center">{{ $viewveiculos->placa }}</td>
                <td class="text-center">{{ $viewveiculos->renavam }}</td>
                <td class="text-center">{{ $viewveiculos->debitos }}</td>    
                <td class="text-center">{{ $viewveiculos->description }}</td>            
            </tr>
        @endforeach
    </tbody>
</table>
