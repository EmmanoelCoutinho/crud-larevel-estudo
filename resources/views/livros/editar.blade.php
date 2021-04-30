<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
        label {
            float: left;
            display: block;
            width: 90px;
        }
    </style>

    <title>Adicionar livros</title>
</head>

<body>

    <form action="{{ route('atualizar_livro', ['id'=>$livro->id])}}" method="post">
        @csrf
        <div for='isbn'><label>ISBN</label><input type='text' name="isbn" id="isbn" value='{{$livro->isbn}}'></div>
        <div for='titulo'><label>Titulo</label><input type='text' name="titulo" id="titulo" value='{{$livro->titulo}}'></div>
        <div for='autor'><label>Autor</label><input type='text' name="autor" id="autor" value='{{$livro->autor}}'></div>
        <div for='preco'><label>Preço</label><input type='text' name="preco" id="preco" value='{{$livro->preco}}'></div>
        <button type="submit">Salvar!</button>
    </form>

</body>

</html>
