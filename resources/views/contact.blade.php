@extends('adminlte::page')

@section('title', 'Contato-form')

@section('content_header')
<div class="text-center">
    <h1>Formulário de Contato</h1>
</div>


@stop

@section('content')
<div class="container">
    <div class="row">

        <div class="col-md-6 jumbotron mx-auto">

            <h2>Envie o seu Contato</h2>
            <form action="{{ route('contact.store')}}" method="post">
                @csrf

                @if(count($errors))

                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>preencha os dados corretamente</strong>
                    <ul>
                        @foreach($errors->all() as $error)
                        <li>{{ $error}}</li>
                        @endforeach
                    </ul>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif

                @if($message = Session::get('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>mensagen enviada com sucesso!</strong> {{ $message }}
                    <!-- <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button> -->
                </div>
                @endif

                @if($message = Session::get('error'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>oopss</strong>  
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif
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