@extends('hackathon.layout.welcome')
@section('content')
 <div class="form-group">
    
    <input  class="form-control center-block" id="busca-vaca" placeholder="Codigo da Vaca">
  </div>
<div class="inicio-animais ">
    <a class="btn btn-default azul-milkon btn-inicio" href="{{url('/ver/19')}}">Buscar</a><br/><br/>

    <a class="btn btn-default azul-milkon btn-inicio" href="{{url('/adicionar')}}">Cadastrar</a>

</div>



@endsection




<!--
