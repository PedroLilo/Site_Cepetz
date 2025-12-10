<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
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
    public function gerenciar()
    {
        $noticias = Noticia::orderBy('created_at', 'desc')->get();
        return view('gerenciar', compact('noticias'));
    }
    public function excluir($id)
    {
        $noticia = Noticia::findOrFail($id);

        // Remove a imagem se existir
        if ($noticia->imagem) {
            Storage::delete('public/' . $noticia->imagem);
        }

        $noticia->delete();

        return redirect('/cepetz/gerenciamento')->with('success', 'Notícia excluída com sucesso!');
    }
    public function cadastrarnoticia(Request $request)
    {
        $request->validate([
            'titulocadastro' => 'required|string|max:255',
            'descricaocadastro' => 'required|string',
            'autor' => 'required|string|max:255',
            'imagemcadastro' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $noticia = new Noticia();
        $noticia->titulo = $request->titulocadastro;
        $noticia->descricao = $request->descricaocadastro; // Já vem com HTML formatado
        $noticia->autor = $request->autor;
        $noticia->tipo = $request->tipocadastro;

        if ($request->hasFile('imagemcadastro')) {
            $path = $request->file('imagemcadastro')->store('images', 'public');
            $noticia->imagem = $path;
        }

        $noticia->save();

        return redirect('/')->with('success', 'Notícia cadastrada com sucesso!');
    }

    public function editar($id)
    {
        // Buscar a notícia no banco de dados
        $noticia = Noticia::find($id);

        // Verificar se a notícia existe
        if (!$noticia) {
            return redirect()->route('inicio')->with('error', 'Notícia não encontrada.');
        }

        // Retornar a view de edição com os dados da notícia
        return view('editar', compact('noticia'));
    }



    public function atualizar(Request $request, $id)
    {
        $noticia = Noticia::find($id);  // Encontre a notícia pelo ID
        if (!$noticia) {
            return redirect()->route('home')->with('error', 'Notícia não encontrada.');
        }

        // Validação de dados
        $request->validate([
            'tipocadastro' => 'required',
            'titulocadastro' => 'required',
            'descricaocadastro' => 'required',
            'autor' => 'required',
            'imagemcadastro' => 'nullable|image',
        ]);

        // Atualizar os campos
        $noticia->tipocadastro = $request->tipocadastro;
        $noticia->titulocadastro = $request->titulocadastro;
        $noticia->descricaocadastro = $request->descricaocadastro;
        $noticia->autor = $request->autor;

        // Se houver uma nova imagem
        if ($request->hasFile('imagemcadastro')) {
            $imagemPath = $request->file('imagemcadastro')->store('imagens', 'public');
            $noticia->imagemcadastro = $imagemPath;
        }

        $noticia->save();

        return redirect()->route('home')->with('success', 'Notícia atualizada com sucesso.');
    }
}
