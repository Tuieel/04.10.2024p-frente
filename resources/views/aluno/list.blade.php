<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

        <form action="/buscar" method="post">
            <label for="select">Selecione:</label>
            <select id="select" name="select">
                <option value="nome">Nome</option>
                <option value="cpf">CPF</option>
                <option value="telefone">Telefone</option>
            </select>


            <label for="input">Valor:</label>
            <input type="text" id="input" name="input" required>


            <button type="submit">Buscar</button>
            <button><a href="{{url('aluno/create')}}">Novo</a></button>
        </form>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>CPF</th>
                <th>Telefone</th>
                <th>Ação</th>
                <th>Ação</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($dados as $item)
            <tr>
                <td>{{($item->id)}}</td>
                <td>{{($item->nome)}}</td>
                <td>{{($item->cpf)}}</td>
                <td>{{($item->telefone)}}</td>
                <td><a href="{{route('aluno.edit',$item->id)}}">Editar</a></td>
            </tr>
        @endforeach
    </tbody>
</table>

</body>
</html>

