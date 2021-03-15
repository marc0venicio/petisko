<!doctype html>
<html lang="pt-br">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ url('assets/main.css') }}">

    <title>Busca CEP</title>
</head>

<body>
    <div class="container">
        <div class="header">
            <h2>Busca CEP</h2>
        </div>    
    <form action="" method="get">
        @csrf
        <div class="mb-3 row-6">
            <label for="exampleFormControlInput1" class="form-label">CEP</label>
            <input type="text" class="form-control" name="cep" id="cep" placeholder="99999-999" value="{{$obj->cep}}" required> 
        </div>
        <div class="row-4 mt-3">
            <button type="submit" class="btn btn-color-primary mb-3 mt-3">Buscar</button>
        </div>
    </form>
    <form action="" method="post">
        @csrf
        <div class="row g-3">
        <div class="mb-3 col">
            <label for="exampleFormControlInput1" class="form-label">Rua</label>
            <input type="text" class="form-control" id="logradouro" name="logradouro" value="{{$obj->logradouro}}" required>
        </div>
        <div class="mb-3 col">
            <label for="exampleFormControlInput1" class="form-label">Bairro</label>
            <input type="text" class="form-control" id="bairro" name="bairro" value="{{$obj->bairro}}" required>
        </div>
        <div class="mb-3 col">
            <label for="exampleFormControlInput1" class="form-label">Cidade</label>
            <input type="text" class="form-control" id="localidade" name="localidade" value="{{$obj->localidade}}" required>
        </div>
        <div class="mb-3 col">
            <label for="exampleFormControlInput1" class="form-label">Estado</label>
            <input type="text" class="form-control" id="uf" name="uf" value="{{$obj->uf}}" required>
        </div>
        <div class="mb-3 col">
            <label for="exampleFormControlInput1" class="form-label">Nome</label>
            <input type="text" class="form-control" id="name" name="name" value="" required>
        </div>
        <div class="row-4 mt-3">
            <button type="submit" class="btn btn-color-primary mb-3 mt-3">Enviar</button>
        </div>
    </div>
    </form>
</div>
    <script src="{{ url('assets/jquery.js') }}"></script>
    <script src="{{ url('assets/popper.js') }}"></script>
    <script src="{{ url('assets/bootstrap.js') }}"></script>
    <script src="{{ url('assets/scripts.js') }}"></script>
</body>

</html>
