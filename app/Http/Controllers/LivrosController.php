<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//chamando a class do livro
use App\Models\Livro;

class LivrosController extends Controller
{
    public function create()
    {
        return view('livros.create');
    }

    public function store(Request $request)
    {
        Livro::create([
            'isbn' => $request->isbn,
            'titulo' => $request->titulo,
            'autor' => $request->autor,
            'preco' => $request->preco,
        ]);
        return "o livro foi salvo com sucesso";
    }
}
