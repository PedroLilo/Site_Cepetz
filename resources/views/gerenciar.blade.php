@extends('layout')

@section('content')
    <div class="container com-margem">
        <h1 class="titulo-gerenciamento">
            Gerenciamento de Notícias
            @if(isset($noticias) && count($noticias) > 0)
                <span class="badge-contador">{{ count($noticias) }} notícias</span>
            @endif
        </h1>

        <div class="table-responsive">
            @if(isset($noticias) && count($noticias) > 0)
                <table class="table table-gerenciamento">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Título</th>
                            <th>Data de Publicação</th>
                            <th style="text-align: center;">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($noticias as $noticia)
                            <tr>
                                <td>{{ $noticia->id }}</td>
                                <td>{{ $noticia->titulo }}</td>
                                <td>{{ $noticia->created_at->format('d/m/Y') }}</td>
                                <td style="text-align: center;">
                                    <a href="{{ route('editar', $noticia->id) }}" class="btn-action btn-editar">
                                        <i class="fas fa-edit"></i> Editar
                                    </a>

                                    <form action="/cepetz/excluir/{{ $noticia->id }}" method="POST" style="display: inline;"
                                        onsubmit="return confirm('Tem certeza que deseja excluir esta notícia?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn-action btn-excluir">
                                            <i class="fas fa-trash"></i> Excluir
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @else
                <div class="empty-state">
                    <i class="fas fa-newspaper"></i>
                    <p>Nenhuma notícia cadastrada ainda.</p>
                    <a href="/cepetz/cadastro" class="btn-primeira-noticia">
                        <i class="fas fa-plus-circle"></i> Cadastrar primeira notícia
                    </a>
                </div>
            @endif
        </div>
        <div style="margin-bottom: 30px;">
            <a href="/cepetz/cadastro" class="btn-nova-noticia">
                <i class="fas fa-plus-circle"></i> Nova Notícia
            </a>
        </div>
    </div>

@endsection