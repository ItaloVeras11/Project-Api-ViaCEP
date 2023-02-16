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
            Adicionar CEP
        </h1>
        <form action="{{ route('buscar') }}" method="GET">
            <div class="mb-3">
                <label>CEP</label>
                <input type="text" class="form-control" name="cep" value="{{$cep}}">
            </div>
            <div class="mb-3">
                <label>Logradouro</label>
                <input type="text" class="form-control" name="logradouro" value="{{$logradouro}}">
            </div>
            <div class="mb-3">
                <label>Numero</label>
                <input type="text" class="form-control" name="numero" >
            </div>
            <div class="mb-3">
                <label>Bairro</label>
                <input type="text" class="form-control" name="bairro" value="{{$bairro}}">
            </div>
            <div class="mb-3">
                <label>Cidade</label>
                <input type="text" class="form-control" name="cidade" value="{{$cidade}}">
            </div>
            <div class="mb-3">
                <label>Estado</label>
                <input type="text" class="form-control" name="Estado" value="{{$estado}}">
            </div>

            <button type="submit" class="btn btn-primary">Salvar</button>
        </form>

    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
</body>

</html>
