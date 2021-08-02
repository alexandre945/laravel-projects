
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
              <form class="grup-control">
                  <fieldset>
                    <label>digite-seu-Produto</label>
                    <input class="btn btn-primary"type="text" name="name" value="{{ $data->name }}"/><br>
                    <label>digite-a-quantidade</label>
                    <input class="btn btn-primary"type="number" name="quantidade" value="{{ $data->quantidade }}"/><br>
                    <button class="btn btn-primary" type="submit">Concluir</button>
                  </fieldset>

              </form>

            </div>

        </Form>

    </div>


</body>
<style>

    input {
        margin-left: 250px;
        margin-top: 100px;
        background-color: aquamarine;
        height: 25px;
        width: 100px;
        padding-top: 10px;
    }
    label {
        margin-left: 200px;
    }
    .controller {
        background-color: chocolate;
        height: 400px;
    }
    button {
        height: 35px;
        width: 100px;
        background-color: aquamarine;
    }


</style>
</html>
