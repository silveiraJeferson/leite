@extends('hackathon.layout.welcome')
@section('content')


<div class="col-md-8">
<table class="table table-hover">
    @forelse($lista as $animal)
    <tr>
        <th>Código</th><td>{{$animal->id}}</td>
    </tr>
    <tr>
        <th>Raça</th><td>{{$animal->raca}}</td>
    </tr>
    <tr>
        <th>Data de Nascimentto</th><td>{{$animal->data_nascimento}}</td>
    </tr>
    <tr>
        <th>Produtor</th><td>{{$animal->id_produtor}}</td>
    </tr>
    <tr>
        <th>Pai</th><td>{{$animal->pai}}</td>
    </tr>
    <tr>
        <th>Mãe</th><td>{{$animal->mae}}</td>
    </tr>
    @empty
    <h2 class="bg-danger">Nenhum Animal Cadastrado</h2>
    @endforelse
</table>
</div>
<div class=" thumbnail img-circle col-md-4">
    <img src="{{asset('/public/Vaca-Leiteira-16.jpg')}}" alt=""/>Foto
</div>

@endsection