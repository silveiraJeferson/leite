@extends('hackathon.layout.welcome')
@section('content')
<div class="form-login center-block">
    <form class="form-horizontal">
        <h3 class="text-center">Login</h3>
        <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label"></label>
            <div class="col-sm-10">
                <input type="email" class="form-control" id="inputEmail3" placeholder="Digite seu usuário">
            </div>
        </div>
        <div class="form-group">
            <label for="inputPassword3" class="col-sm-2 control-label"></label>
            <div class="col-sm-10">
                <input type="password" class="form-control" id="inputPassword3" placeholder="Digite sua Senha">
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <div class="checkbox">
                    <label>
                        <input type="checkbox"> Salvar acesso
                    </label>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <a class='btn btn-primary center-block azul-milkon' href="{{url('/inicio')}}">Entrar</a>
            </div>
        </div>
    </form>
</div>
@endsection