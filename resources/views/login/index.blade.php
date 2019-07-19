
@extends('layout.site')

@section('titulo', 'Cursos')

@section('conteudo')
    <div class="container">
        <h3 class="center">Entrar</h3>
        <div class="row">
            <form class="" action="{{route('site.login.entrar')}}" method="post">
                <!-- Cria um input com um token automaticamente. -->
                {{ csrf_field() }}
                <div class="input-field">
                    <!-- Aqui é testado antes pelo isset se há valor e caso haja é atribuído o valor inserido a variável ou ela é deixada vazia. -->
                    <input type="text" name="email">
                    <label>E-mail</label>
                </div>
                <div class="input-field">
                    <!-- Aqui é testado antes pelo isset se há valor e caso haja é atribuído o valor inserido a variável ou ela é deixada vazia. -->
                    <input type="password" name="senha">
                    <label>Senha</label>
                </div>
                <button class="btn deep-orange">Entrar</button>
            </form>
        </div>


@endsection

