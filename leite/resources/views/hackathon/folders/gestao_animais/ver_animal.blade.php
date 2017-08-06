@extends('hackathon.layout.welcome')
@section('content')

<h1 class="center-block">Informações do Animal</h1>
<div class="col-md-8">
    <table class="table table-hover">
        @forelse($lista as $animal)
        <tr>
            <th>Código</th><td>{{$animal->id}}</td>
        </tr>
        <tr>
            <th>Situação Atual</th><td>Animal em produção, sem restrição</td>
        </tr>
        <tr>
            <th>Data de Nascimentto</th><td>{{$animal->data_nascimento}}</td>
        </tr>

        @empty
        <h2 class="bg-danger">Nenhum Animal Cadastrado</h2>
        @endforelse
    </table>

</div>
<div class="relatorio">
    <h2>Ordenha</h2>
    <div class="ordenha form-control "><span class="nome-campo">Data:</span><span id="ordenha"></span></div><br/>
    <div class="ordenha form-control"><span class="nome-campo">Peso:</span><span id="ordenha"></span></div><br/>
    <div class="ordenha form-control"><span class="nome-campo">Litros Produzidos:</span><span id="ordenha"></span></div><br/>
    <input class="btn btn-primary azul-milkon center-block " type="submit" value="Cadastrar"/>
</div>


@endsection