@extends('hackathon.layout.welcome')
@section('content')

<form action="{{url('/add')}}" method="post"><br/>
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <table class="table">
        <tr>
            <td>Produtor</td><td><input type="text" name="id_produtor" value="{{rand(1,5)}}"/></td>
        </tr>
        <tr>
            <td>Data de Nascimento</td><td><input type="text" name="data_nascimento" value="{{rand(1,28)}}/{{rand(1,12)}}/{{rand(2010,2017)}}"/></td>
        </tr>
        <tr>
            <td>Raça</td><td><input type="text" name="raca"/></td>
        </tr>
        <tr>
            <td>Pai</td><td><input type="text" name="pai"/><br/></td>
        </tr>
        <tr>
            <td>Mãe</td><td><input type="text" name="mae"/></td>
        </tr>
        
    </table>
    
    
    
    
    
    <input type="hidden" name="foto" value="1"/><br/>
    <input class="btn btn-success" type="submit" value="Cadastrar"/>


</form> 

@endsection