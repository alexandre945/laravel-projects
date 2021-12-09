@extends('adminlte::page')

@section('title', 'New_Lister')

@section('content_header')

<div class="card">
    <h1 class="text-center">Bem vindo a sua lista de Compras</h1>
    @stop

    @section('content')

    <div class="card">

        @if ($errors->any())
        <div class="btn btn-warning">
            @foreach ($errors->all() as $error)
            <p> {{ $error}}</p>
            @endforeach
        </div>
        @endif

        <form action="{{route('list.store')}}" method="post">
            @csrf

            <div class="header">

                <input class="btn btn-dark" id="newtask" name="name" type="text" placeholder="-Produto"
                    value="{{ old('name') }}" />
                <input class="btn btn-dark" name="quantidade" type="number" placeholder="-Quantidade"
                    value=" {{ old('quantidade')}}" />
                <button class="btn btn-dark" onclick createList()>Cadastrar</button>

            </div>

        </form>
    </div>
    @if(!$data->isEmpty())

    <div class="card">
        <div class="text-center col-md-12">
            <table class="table table-condensed">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>QUANTIDADE</th>
                        <th>Usuario</th>
                        <th>Ação</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $item)
                    <tr>
                        <td> {{ $item->id }} </td>
                        <td> <input type="checkbox" value="{{ $item->name }}">{{ $item->name }} </td>
                        <td> {{ $item->quantidade }} </td>
                        <td> {{ $item->user->name }} </td>
                        <td>
                            <div class="button">
                                <form action="{{ route('list.destroy',$item->id)}}" method="post">
                                    @method('DELETE')
                                    @csrf
                                    <button id="excluir" class="btn btn-danger">Excluir</button>
                                </form>
                                <a href="{{ route('list.edit', $item->id) }}"><button id="update"
                                        class="btn btn-success"> Edit</button></a>

                                <form action="{{ route('listtd.destroy',$item->id)}}" method="post">
                                    @method('DELETE')
                                    @csrf
                                    <!-- <button id="excluir"class="btn btn-danger">Excl/Tud</button>   -->
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div class="car-footer">
        <p>Desenvolvido por XandyDesenvolvimentoweb: (35)-998464219</p>
    </div>


    @else
    <div class="btn btn-warning">
        <p>AINDA NÃO EXISTE NEN UM CADASTADRO NA SUA LISTA</p>
    </div>
    @endif
    @stop
</div>


@section('css')

<style>
body {

    backgroud-color: rgb(245, 69, 16);
}

.btn btn-warning {

    background-color: rgba(0, 0, 255, 0.377);
}


#excluir {
    margin-right: 0px;

}

#paragraf {
    display: flex;
    margin-left: 300px;

}

p {
    margin-left: 50px;
}

.button {
    display: flex;
    margin-left: 30px;

}

.text-center {
    background-color: rgba(0, 0, 255, 0.377);
    padding-bottom: 20px;

}

.car-footer {
    background-color: rgba(0, 0, 255, 0.377);
    padding: 10px;
    margin-top: -12px;
    /* width: 550px; */
}

.card-body {
    background-color: rgba(0, 0, 255, 0.377);
    padding-bottom: 10px;
    margin-top: -10px;
}

/* .input {
    padding-top: 25px;
    padding-bottom: 0px;
    justify-content: center;
    margin-left: 200px;


} */

.header {

    background-color: rgba(0, 0, 255, 0.377);
    height: 80px;
    width: auto;
    justify-content: center;
    display: flex;
    padding-bottom: 14px;
    padding-top: 14px;
    margin-top: -8px;
    margin-bottom: -20px;
    justify-content: space-around;

}

input {
    padding: 2px;

}



@media (max-width:600px) {
    .conteudo {
        width: 340px;
        height: 12px;


    }

    .input {
        width: 548px;
        margin-left: 60px;
    }

    .text-center {
        width: 548px;
        padding-bottom: 10px;
        padding-top: 10px;

    }

    .header {
        margin-botton: 2px;
        width: 550px;
    }

    .card-body {
        width: 548px;
        padding-bottom: 10px;
    }

    .table table-sm {
        width: 360px;

    }

    input {
        width: 82px;
        padding-top: 5px;
    }

    .button {
        margin-left: -30px;
        padding-top: 10px;
        padding-bottom: 0px;

    }



}
</style>
@stop


@section('js')

@stop