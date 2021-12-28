@extends('adminlte::page')

@section('title', 'Contato-form')

@section('content_header')


@stop

@section('content')
<div class="container">
    <div class="row">

        <div class="col-md-6 jumbotron mx-auto">
            <h1>Formulário de Contato</h1>
            <h2>Envie o seu Contato</h2>
            <form action="#" method="POST">
                @csrf
                <div class="form-group">
                    <label for="name">Nome</label>
                    <input name="name" type="text" class="form-control" placeholder="Digite-Seu nome">
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input name="email" type="email" class="form-control" placeholder="Digite-Seu email">
                </div>

                <div class="form-group">
                    <label for="subject">Assunto</label>
                    <input name="subject" type="text" class="form-control" placeholder="Digite-Seu Assunto">
                </div>

                <div class="form-group">
                    <label for="message">Mensagen</label>
                    <textarea name="message" class="form-control" placeholder="Digite-Sua mesagen"></textarea>
                </div>

                <button type="submit" class="btn btn-primary">Enviar</button>

            </form>

        </div>
    </div>

</div>



@stop



