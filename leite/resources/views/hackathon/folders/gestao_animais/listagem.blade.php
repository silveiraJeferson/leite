@extends('hackathon.layout.welcome')
@section('content')
@include('hackathon.components.nav_gestao_animais')
<table class="table">
    <tr>
        <th>Código</th>
        <th>Pai</th>
        <th>Mãe</th>
    </tr>
    @foreach($lista as $animal)
    <tr>
        <td>{{$animal->id}}</td>
        <td>{{$animal->pai}}</td>
        <td>{{$animal->mae}}</td>
        
    </tr>
    @endforeach
</table>




@endsection