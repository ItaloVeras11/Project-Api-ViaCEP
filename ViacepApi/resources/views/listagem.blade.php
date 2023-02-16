<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1 class="mb-5">
            Endereços Cadastrados
        </h1>

        <a class="btn btn-success" href="{{route('adicionar')}}" >
            Adicionar CEP
        </a>

        <table class="table mt-5">
            <thead>
              <tr>
                <th scope="col">Id</th>
                <th scope="col">Cep</th>
                <th scope="col">Logradouro</th>
                <th scope="col">Numero</th>
                <th scope="col">Bairro</th>
                <th scope="col">Cidade</th>
                <th scope="col">Estado</th>
                <th scope="col">Data de Criação</th>

              </tr>
            </thead>
            <tbody>
                @foreach ($enderecos as $endereco)
                    <tr>
                        <td>{{$enderco->id}}</td>
                        <td>{{$enderco->logradouro}}</td>
                        <td>{{$enderco->numero}}</td>
                        <td>{{$enderco->bairro}}</td>
                        <td>{{$enderco->cidade}}</td>
                        <td>{{$enderco->estado}}</td>
                        <td>{{(new DateTime($endereco->created_at))->format('d/d/Y H:i:s')}}</td>
                    </tr>
                @endforeach
            </tbody>
          </table>

    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
</body>

</html>
