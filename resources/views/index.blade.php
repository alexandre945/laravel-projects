@extends('adminlte::page')

@section('title', 'New_Lister')

@section('content_header')

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
@if($message = Session::get('success'))
<div class="text-center col-ms-12 col-md-6 ">
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>produto cadastrado com sucesso!</strong> {{ $message }}
    </div>
    @endif
    <div class="text-center col-ms-12 col-md-12  ">
        <div class="row justify-content-ms-center ">
            <H5 class="fst-italic mt-3">BEM VINDO A SUA LISTA DE COMPRAS</H5>
            <form action="{{route('list.store')}}" method="post">
                @csrf
                <div class="d-inline  text-white mt-5">
                    <input class="btn btn-dark " id="newtask" name="name" type="text" placeholder="Produto"
                        value="{{ old('name') }}" />
                    <input class="btn btn-dark " name="quantidade" type="number" placeholder="Quantidade"
                        value=" {{ old('quantidade')}}" />
                    <button class="btn btn-dark" onclick="preventDefault()" id="button">Cadastrar</button>
                </div>

            </form>
        </div>
    </div>
</div>
@if(!$data->isEmpty())
    {{-- <div class="card">
<div class="card-header">
<h3 class="card-title">Condensed Full Width Table</h3>
</div>

<div class="card-body p-0">
<table class="table table-sm">
<thead>
<tr>
<th style="width: 10px">#</th>
<th>Task</th>
<th>Progress</th>
<th style="width: 40px">Label</th>
</tr>
</thead>
<tbody>
<tr>
<td>1.</td>
<td>Update software</td>
<td>
<div class="progress progress-xs">
<div class="progress-bar progress-bar-danger" style="width: 55%"></div>
</div>
</td>
<td><span class="badge bg-danger">55%</span></td>
</tr>
<tr>
<td>2.</td>
<td>Clean database</td>
<td>
<div class="progress progress-xs">
<div class="progress-bar bg-warning" style="width: 70%"></div>
</div>
</td>
<td><span class="badge bg-warning">70%</span></td>
</tr>
<tr>
<td>3.</td>
<td>Cron job running</td>
<td>
<div class="progress progress-xs progress-striped active">
<div class="progress-bar bg-primary" style="width: 30%"></div>
</div>
</td>
<td><span class="badge bg-primary">30%</span></td>
</tr>
<tr>
<td>4.</td>
<td>Fix and squish bugs</td>
<td>
<div class="progress progress-xs progress-striped active">
<div class="progress-bar bg-success" style="width: 90%"></div>
</div>
</td>
<td><span class="badge bg-success">90%</span></td>
</tr>
</tbody>
</table>
</div>

</div> --}}


        <div class="card-body p-0 ">
            <div class="card-body p-0">
                <div class=" card-body p-0">
                    <table class="teal">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Produto</th>
                                <th>QUANTIDADE</th>
                                <th>Ação</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $item)
                                <tr>
                                    <td> {{ $item->id }} </td>
                                    <td> {{ $item->name}} </td>
                                    <td> {{ $item->quantidade }} </td>
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
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    @else
        <div class="btn btn-warning">
            <li>AINDA NÃO EXISTE NEN UM CADASTADRO NA SUA LISTA</li>
        </div>
    @endif
@stop

@section('footer')
    <div class="car-footer">
        <p>Desenvolvido por XandyDesenvolvimentoweb: (35)-998464219</p>
    </div>
@endsection



@section('css')

<style>
.text-center {
    background-color: teal;


}

.car-footer {
    background-color: teal;

}

.teal {
    background-color: teal;
}
</style>
@stop
@section('js')
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
    integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
    integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
    </script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
@stop

