
<!DOCTYPE html>
<html lang="pt-br">
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
                      <div class="label">
                        <label>digite-seu-Produto</label>
                        <input class="btn btn-primary"type="text" name="name" value="{{ $data->name }}"/><br>
                      </div>
                      <div class="label2">
                        <label>digite-a-quantidade</label>
                        <input class="btn btn-primary"type="number" name="quantidade" value="{{ $data->quantidade }}"/><br>
                      </div>

                    <button class="btn btn-primary" type="submit">Concluir</button>
                  </fieldset>

              </form>

            </div>

        </Form>

    </div>
</body>
<style>

    input {

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
        height: 150px;
        width: 600px;
        text-align: center;
    }
    button {
        height: 35px;
        width: 100px;
        background-color: aquamarine;
        margin-left: 330px;

    }
    .label {
        display: flexbox;
        padding-bottom: 7px;

    }
    .label2 {
        display: flexbox;
        padding-bottom: 7px;

    }
    .text-center {
    margin-left: -400px;
    }

    }




</style>
</html>
