
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>update</title>
</head>
<body>
    <div class="controller">
        <Form action="{{ route('list.update', $data->id) }}" method="post">
            @method('PUT')
            @csrf
            <div class="text-center">
                <input class="btn btn-primary"type="text" name="name" value="{{ $data->name }}"/>
                <input class="btn btn-primary"type="text" name="quantidade" value="{{ $data->quantidade }}"/>
                <button class="btn btn-primary" type="submit">Concluir</button>
            </div>

        </Form>

    </div>


</body>
<style>

    input {
        margin-left: 250px;
        margin-top: 100px;
        background-color: aquamarine;
    }
    .controller {
        background-color: chocolate;
        height: 400px;

    }

</style>
</html>
