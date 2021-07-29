<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/style.css') }}" type="text/css" rel="stylesheet" />


    <title>Blog</title>
</head>

<body>
    <div id="center">
        <div id="main">
            <div id="image">
                <img src="{{asset('asset/images/teclado-em-close-up_1161-210.jpg') }}" alt="logo">
            </div>
            <div id="articli">
                <h1>Sejá bem vindo ao Blog do Dv iniciante: </h1>
                <p>Cadastre-se aqui: O Blog do Dev iniciante</p>
            </div>
        </div>
        <div class="cadastro">
            <form action="{{ route('store') }}" id="form-cadastro" method="post">
                @csrf
                <fieldset id="form">
                    <legend>CADASTRO</legend>
                    <legend>Name</legend>
                    <input type="text" name="name"> <br />
                    <legend>E-mail</legend>
                    <input type="text" name="email"> <br />
                    <legend>Password</legend>
                    <input type="password" name="senha"><br />
                    <button type="submit" form="form-cadastro">CADASTRAR</button>
                </fieldset>
            </form>
        </div>
        <div class="login">
            <form action="" id="login" method="post">
                <fieldset>
                    <legend>LOGIN</legend>
                    <legend>Name</legend>
                    <input type="text" name="name"> <br />
                    <legend>E-mail</legend>
                    <input type="email" name="email"> <br />
                    <legend>Password</legend>
                    <input type="password" name="senha"><br />
                    <button type="submit" form="login">LOGAR</button>
                </fieldset>
            </form>
        </div>


    </div>

</body>
</html>
