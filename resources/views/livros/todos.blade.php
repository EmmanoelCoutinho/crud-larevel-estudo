<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Vitrine da loja</title>
</head>

<body>
    <table>
        <tr>
            <th>ISBN</th>
            <th>Titulo</th>
            <th>Autor</th>
            <th>Preço</th>
            <th></th>
            <th></th>
        </tr>
        @foreach($livros as $livros)
        <tr>
            <td>{{$livros->isbn}}</td>
            <td>{{$livros->titulo}}</td>
            <td>{{$livros->autor}}</td>
            <td>{{$livros->preco}}</td>
            <td><a href="{{ route('editar_livro', ['id' => $livros->id])}}" title="editar livro {{$livros->titulo}}">Editar</a></td>
            <td><a href="{{ route('excluir_livro', ['id' => $livros->id])}}" title="excluir livro {{$livros->titulo}}">Excluir</a></td>
        </tr>
        @endforeach
    </table>

</body>

</html>
