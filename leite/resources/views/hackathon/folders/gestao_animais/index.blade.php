@extends('hackathon.layout.welcome')
@section('content')
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{url('/adicionar')}}">Cadastrar</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

            <form class=" navbar-form navbar-right">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Search">
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
            </form>

        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
<table class="table table-striped">
    <tr>
        <th>Código</th>
        <th>Raça</th>
        <th>Imagem</th>
        <th></th>
    </tr>
    @forelse($lista as $animal)
    <tr>
        <td>{{$animal->id}}</td>
        <td>{{$animal->raca}}</td>
        <td><div class="">454</div></td>
        <td><a href="{{url('/ver/'.$animal->id)}}"class="glyphicon glyphicon-zoom-in"></a></td>
    </tr>
    @empty
        <h2 class="bg-danger">Nenhum Animal Cadastrado</h2>
    @endforelse
    
</table>



@endsection




<!--
