@extends('adminlte::page')

@section('title', 'New_Lister')

@section('content_header')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<div class="text-center col-ms-12 col-md-6 ">
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

    @stop

    @section('content')

    <div class="text-center colo-ms-12 "style="width:52vh">
        <div class="row justify-content-ms-center">
            <H5 class="fst-italic">BEM VINDO A SUA LISTA DE COMPRAS</H5>
            <form action="{{route('list.store')}}" method="post">
                @csrf
                <div class="d-inline  text-white">
                    <input class="btn btn-dark " id="newtask" name="name" type="text"
                        placeholder="Produto" value="{{ old('name') }}" />
                    <input class="btn btn-dark " name="quantidade" type="number"
                        placeholder="Quantidade" value=" {{ old('quantidade')}}" />
                    <button class="btn btn-dark" onclick="preventDefault()" id="button">Cadastrar</button>
                </div>

            </form>

        </div>

    </div>

    @if(!$data->isEmpty())

    <div class="card">
        <div class="rows">
            <div class="text-center col-ms-12 col-md-12">
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
                                <div class="d-flex flex-wrap">
                                    <form action="{{ route('list.destroy',$item->id)}}" method="post">
                                        @method('DELETE')
                                        @csrf
                                        <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal{{$item->id}}">
                                            Excluir
                                        </button>
                                    </form>
                                    <a href="{{ route('list.edit', $item->id) }}"><button id="update"
                                            class="btn btn-success"> Edit</button></a>

                                    <!-- <form action="{{ route('listtd.destroy',$item->id)}}" method="post">
                                        @method('DELETE')
                                        @csrf
                                        <button id="excluir"class="btn btn-danger">Excl/Tud</button>  
                                    </form> -->
                                </div>
                            </td>
                        </tr>
                        <form action="{{ route('list.destroy',$item->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <div class="modal fade" id="exampleModal{{$item->id}}" tabindex="-1"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header,btn btn-danger">
                                            <h5 class="modal-title" id="exampleModalLabel">COMFIRMAÇÃO</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <p>Tem certeza que deseja excluir este item?</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-warning"
                                                data-bs-dismiss="modal">Cancelar</button>
                                            <button type="submit" class="btn btn-danger">Excluir</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                        @endforeach
                        @if($message = Session::get('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>produto cadastrado com sucesso!</strong> {{ $message }}
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
</div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
    integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
    integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
</script>
@stop



@section('css')

<style>
.text-center {
    background-color: teal;

}

.car-footer {
    background-color: teal;

}

.table {
    background-color: teal;
}


</style>
@stop
@section('js')

@stop