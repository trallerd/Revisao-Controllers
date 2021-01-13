<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
</head>
<body>

    <h2>Alterar Cidade</h2>

    <form action="{{ route('cidade.update', $dados['id']) }}" method="POST">
        @csrf
        @method('PUT')
        <a href="{{route('cidade.index')}}"><h4>voltar</h4></a>
        <label>Cidade: </label> <input type='text' name='nome' value='{{$dados['nome']}}'>
        <label>Porte: </label> <input type='text' name='porte' value='{{$dados['porte']}}'>
        <input type="submit" value="Salvar">
    </form>
    
</body>
</html>

