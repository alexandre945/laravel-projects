@extends('adminlte::page')

@section('title', 'new_Lister')

@section('content_header')

    <div class="card">
        <h1 class="text-center">Bem vindo a sua lista de Compras</h1>
    @stop

    @section('content')

        <div class="card-body">
            <form action="{{route('list.store')}}" method="post">
                @csrf

                <div class="input">
                    <input class="btn btn-dark"id="newtask" name="name" type="text" placeholder="-Produto"/>
                    <input class="btn btn-dark"name="quantidade" type="number" placeholder="-Quantidade"/>
                    <button class="btn btn-dark" onclick createList()>Cadastrar</button>

                </div>

            </form>
        </div>
    @if(!$data->isEmpty())

      <div class="card">
        <div class="text-center col-md-12">
            <table class="table table-sm col-md-12">
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
                                    <td> <input type="checkbox">{{ $item->name }} </td>
                                    <td> {{ $item->quantidade }} </td>
                                    <td> {{ $item->user->name }} </td>
                                    <td>
                                        <div class="button">
                                            <form action="{{ route('list.destroy',$item->id)}}"  method="post">
                                                @method('DELETE')
                                                @csrf
                                                <button id="excluir"class="btn btn-danger">Excluir</button>
                                            </form>
                                                <a href="{{ route('list.edit', $item->id) }}"><button id="update"class="btn btn-success">
                                                Edit</button></a>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
      </div>
      <div class="car-footer">
        Desenvolvido por XandyDesenvolvimentoweb:35 9 98464219
      </div>
    @else
        <h1>Não Existe registro de lista</h1>
    @endif
    @stop
    </div>


@section('css')

    <style>
      body {

          backgroud-color: rgb(245, 69, 16);
      }

      button {


      }
      #excluir, {
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
          margin-left: 0px;

      }
      .text-center {
          background-color: rgba(0, 0, 255, 0.377);
          padding-bottom: 20px;

      }
      .car-footer {
          background-color:  rgba(0, 0, 255, 0.377);
          padding: 10px;
      }
      .card-body {
        background-color: rgba(0, 0, 255, 0.377);
        padding-bottom: 10px;
      }
      .input {
         padding-top: 5px;
         padding-bottom: 0px;
         justify-content: center;
         margin-left: 170px;



      }

      @media (max-width:600px)
      {
      .conteudo {
          width:340px;
          height: 12px;


      }
      .input {
        width: 548px;
         margin-left: 60px;
      }
      .text-center {
          width: 548px;
          padding-bottom: 20px;
          padding-top: 20px;



      }
      .card-body{
        width: 548px;
      }
      .table table-sm {
          width: 360px;

      }
      input {
          width: 100px;
          padding-top: 5px;
      }
      .button {
          margin-left: -5px;
          background-color: rgba(0, 0, 255, 0.377);
          padding-top: 10px;
          padding-bottom: 0px;

      }



      }
    </style>
@stop


@section('js')

 @stop
