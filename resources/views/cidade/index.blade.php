
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <h1>Sistema de Gestão de Municipios - Governo do Paraná</h1>
    <a href="{{ route('cidade.create') }}"><h4>Cadastrar Cidade</h4></a>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>CIDADE</th>
                <th>PORTE</th>
                <th>INFO</th>
                <th>EDITAR</th>
                <th>REMOVER</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($cidades as $item)
                <tr>
                    <td>{{ $item['id'] }}</td>
                    <td>{{ $item['nome'] }}</td>
                    <td>{{ $item['porte'] }}</td>
                    <td><a href="{{ route('cidade.show', $item['id']) }}">info</a></td>
                    <td><a href="{{ route('cidade.edit', $item['id']) }}">editar</a></td>
                    <td>
                        <form action="{{ route('cidade.destroy', $item['id']) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <input type='submit' value='remover'>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>


