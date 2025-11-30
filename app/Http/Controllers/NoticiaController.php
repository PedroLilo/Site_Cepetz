<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Noticia;

class NoticiaController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->validate([
            'titulocadastro' => 'required',
            'descricaocadastro' => 'required',
            'autor' => 'required',
            'imagemcadastro' => 'image|nullable'
        ]);

        // Upload da imagem
        $imagemNome = null;
        if ($request->hasFile('imagemcadastro')) {
            $imagemNome = $request->file('imagemcadastro')->store('noticias', 'public');
        }

        // Salvar no banco
        Noticia::create([
            'titulo' => $data['titulocadastro'],
            'descricao' => $data['descricaocadastro'],
            'autor' => $data['autor'],
            'imagem' => $imagemNome
        ]);

        return redirect()->route('inicio')->with('success', 'Notícia cadastrada!');

    }
    public function index()
    {
        // pegar as notícias (ordena mais recente primeiro)
        $noticias = Noticia::orderBy('created_at', 'desc')->get();

        // enviar para a view 'index' (ou o nome correto da sua view)
        return view('index', compact('noticias'));
    }
}
