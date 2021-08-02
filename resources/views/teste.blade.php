@extends('adminlte::page')

@section('title', 'new_Lister')

@section('content_header')
<div class="conteudo">
    <h1 class="text-center">Bem vindo a sua lista de Compras</h1>
@stop

@section('content')
    <div class="text-center">
        <form action="{{route('list.store')}}" method="post">
            @csrf

           <div id="paragraf">
               <p>Digite-produtos</p>
               <p>Digite-Quatidade</p>
           </div>
            <input class="btn btn-primary"id="newtask" name="name" type="text" placeholder="Digite-Seu-Produto"/>
            <input class="btn btn-primary"name="quantidade" type="number" placeholder="Digite-A-Quantidade"/>
            <button class="btn btn-dark" onclick createList()>Incluir</button>
        </form>
    </div>
@if(!$data->isEmpty())
    <div class="text-center">
        <table class="table table-sm">
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
                        <td> {{ $item->name }} </td>
                        <td> {{ $item->quantidade }} </td>
                        <td> {{ $item->user->name }} </td>
                        <td>
                            <div class="button">
                                <form action="{{ route('list.destroy',$item->id)}}"  method="post">
                                    @method('DELETE')
                                    @csrf
                                    <button id="excluir"class="btn btn-danger">Excluir</button>
                                </form>
                           <a href="{{ route('list.edit', $item->id) }}"><button id="update"class="btn btn-success">Edit</button></a>

                            </div>

                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
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
          margin-left: 10PX;

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
          margin-left: 20px;

      }
      .text-center {
          background-color: rgba(0, 0, 255, 0.377);
          padding-bottom: 5px;
      }
      @media (max-width:600px)
      {
      .conteudo {
          width:300px;
          height: 80px;
      }
      .table table-sm {
          margin-left: 0;
      }
      input {
          width: 80px;
      }

      tr {
          width: 50px;
      }
      .button {
          margin-left: 50px;
      }
      .paragraf {
          display: none;
      }
      }
    </style>
@stop


@section('js')

 @stop
