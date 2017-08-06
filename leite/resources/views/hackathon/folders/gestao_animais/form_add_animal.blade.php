@extends('hackathon.layout.welcome')
@section('content')
<h1 class="add-animal text-center">Cadastro de Animal</h1>
<form action="{{url('/add')}}" method="post"><br/>
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <table class="table">
        <tr>
            <td width='400px'>Produtor</td><td ><input type="text" name="id_produtor" value="{{rand(1,5)}}"/></td>
        </tr>
        <tr>
            <td>Data de Nascimento</td><td><input type="text" name="data_nascimento" value="{{rand(1,28)}}/{{rand(1,12)}}/{{rand(2010,2017)}}"/></td>
        </tr>
        <tr>
            <td>Raça</td><td><input type="text" name="raca" value="Jersey"/></td>
        </tr>
        <tr>
            <td>Pai</td><td><input type="text" name="pai" value="1150"/><br/></td>
        </tr>
        <tr>
            <td>Mãe</td><td><input type="text" name="mae" value="1644"/></td>
        </tr>
        <tr>
            <td></td><td><input class="btn btn-primary azul-milkon btn-cadastrar" type="submit" value="Cadastrar"/></td>
        </tr>
        
    </table>
    
    
    
    
    
    <input type="hidden" name="foto" value="1"/><br/>
    


</form> 

@endsection