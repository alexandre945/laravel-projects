@extends('adminlte::page')

@section('title', 'new_Lister')

@section('content_header')
    <h1 class="text-center">Lister</h1>
@stop

@section('content')
    <div class="text-center">
        <form action="{{route('list.store')}}" method="post">
            @csrf
            <h1>Lista de compra</h1>
            <input id="newtask" name="name" type="text"/>
            <input name="quantidade" type="number"/>
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
                        <button id="excluir"class="btn btn-danger">Excluir</button>
                        <button id="update"class="btn btn-success">update</button>
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

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <style>
      body {

          backgroud-color: rgb(245, 69, 16);
      }
      input {
          background-color: aqua;
      }
      button {
          margin-left: 10PX;

      }
      #excluir,update {
         margin-right: 0px;

      }
    </style>
@stop


@section('js')

 @stop
