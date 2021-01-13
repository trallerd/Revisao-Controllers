<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Details</title>
</head>
<body>
    <h2>Informações da Cidade</h2>

    <a href="{{route('cidade.index')}}"><h4>voltar</h4></a>
    <h4>ID: {{ $dados['id'] }}</h4>
    <h4>Cidade: {{ $dados['nome'] }}</h4>
    <h4>Porte: {{ $dados['porte'] }}</h4>

</body>
</html>

