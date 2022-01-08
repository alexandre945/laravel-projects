@extends('adminlte::page')

@section('title', 'New_Lister')

@section('content_header')

<div class="container-xl">
        @if ($errors->any())
        <div class="btn btn-warning">
            @foreach ($errors->all() as $error)
            <ul>
                <li>
                {{ $error}}
                </li>
            </ul>
            
            @endforeach
        </div>
        @endif
    <h1>Bem vindo a sua lista de Compras</h1>
    @stop

    @section('content')

    <div class="rows">
        <div class="header">
        <form action="{{route('list.store')}}" method="post">
            @csrf
                <input class="btn btn-dark" id="newtask" name="name" type="text" placeholder="Produto"
                    value="{{ old('name') }}" />
                <input class="btn btn-dark" name="quantidade" type="number" placeholder="Quantidade"
                    value=" {{ old('quantidade')}}" />
                <button class="btn btn-dark" onclick="preventDefault()">Cadastrar</button>
        </form>

        </div>
    </div>
    @if(!$data->isEmpty())

    <div class="card">
        <div class="rows">
        <div class="text-center col-md-12">
            <table class="table table-condensed">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>QUANTIDADE</th>
                        <th id="user">Usuario</th>
                        <th>Ação</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $item)
                    <tr>
                        <td> {{ $item->id }} </td>
                        <td> <input type="checkbox" value="{{ $item->name }}">{{ $item->name }} </td>
                        <td> {{ $item->quantidade }} </td>
                        <td id="users"> {{ $item->user->name }} </td>
                        <td>
                            <div class="button">
                                <form action="{{ route('list.destroy',$item->id)}}" method="post">
                                    @method('DELETE')
                                    @csrf
                                    <button id="excluir" class="btn btn-danger" onclick="preventDefault()">Excluir</button>
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
                    @if($message = Session::get('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>produto cadastrado com sucesso!</strong> {{ $message }}
                    <!-- <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button> -->
                </div>
                @endif

                </tbody>
            </table>
        </div>

        </div>
      
    </div>
    <div class="car-footer">
        <p>Desenvolvido por XandyDesenvolvimentoweb: (35)-998464219</p>
    </div>


    @else
    <div class="btn btn-warning">
        <li>AINDA NÃO EXISTE NEN UM CADASTADRO NA SUA LISTA</li>
    </div>
    @endif
    @stop
</div>


@section('css')

<style>
    #paragraf {
    display: flex;
    margin-left: 300px;

}
#excluir {
    margin-right: 0px;

}
p {
    margin-left: 50px;
}
.button {
    display: flex;
    margin-left: 30px;

}

.text-center {
    background-color: teal;
    padding-bottom: 20px;

}

.car-footer {
    background-color: teal;
    padding: 10px;
    margin-top: -12px;
   
}

.card-body {
    background-color: teal;
    padding-bottom: 10px;
    margin-top: -10px;
}



.header {

    background-color: teal;
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
h1 {
    text-align: center;
        background-color: teal;
        padding-top: 20px;
        
        height: 80px;
}



@media (max-width:600px) {

/* 
    .input {
        width: 500px;
        margin-left: 60px;
    } */
     #user {
        display: none;
    } 
    #users {
        display: none;
    }
    h1 {
        text-align: center;
        background-color: teal;
        width: 504px;
        padding-top: 20px;
    }

    .text-center {
        width: 510px;
        padding-bottom: 10px;
        padding-top: 10px;
     
  

    }

    .header {
        margin-botton: 2px;
        width: 510px;
       
    }

     /* .card-body {
        width: 548px;
        padding-bottom: 10px;
    } */

    .table table-sm {
        width: 360px;

    }

    input {
        width: 110px;
        padding-top: 5px;
    }

    .button {
        margin-left: -50px;
        padding-top: 10px;
        padding-bottom: 0px;

    }

    .car-footer{
        width: 550px;
    } 

}  
</style>
@stop


@section('js')

@stop