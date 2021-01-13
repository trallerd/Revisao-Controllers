<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New</title>
</head>
<body>
   <h2>Cadastrar Cidade</h2>

    <form action="{{ route('cidade.store') }}" method="POST">
        @csrf
        <a href="{{route('cidade.index')}}"><h4>voltar</h4></a>
        <label>Cidade: </label> <input type='text' name='nome'>
        <label>Porte: </label> <input type='text' name='porte'>
        <input type="submit" value="Salvar">
    </form>
 
</body>
</html>

