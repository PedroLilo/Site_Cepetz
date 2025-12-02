@extends('layout')
@section('content')
<div class="container">
    <div class="row">

        @foreach ($noticias as $noticia)
        <div class="col-md-3 mb-3">
            <div class="card mb-4 shadow-sm noticiaCard">

                <div class="noticiaheader">
                    <h3>{{ $noticia->titulo }}</h3>
                    <p>{{ $noticia->created_at->format('d/m/Y') }}</p>
                </div>

                @if ($noticia->imagem)
                <img src="{{ asset('storage/' . $noticia->imagem) }}" class="card-img-top" style="height: 200px; object-fit: cover;">
                @endif

                <div class="card-body text-center noticiadescricao">
                    <p class="textnoticia">{{ Str::limit($noticia->descricao, 120) }}</p>

                    <button type="button" class="btn btn-secondary" 
                            data-bs-toggle="modal" 
                            data-bs-target="#modal{{ $noticia->id }}">
                        Ver Mais
                    </button>
                </div>
            </div>
        </div>

        <div class="modal fade" id="modal{{ $noticia->id }}" tabindex="-1">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">{{ $noticia->titulo }}</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>

                    <div class="modal-body">
                        @if ($noticia->imagem)
                        <img src="{{ asset('storage/' . $noticia->imagem) }}" class="img-fluid mb-3">
                        @endif
                        <p>{{ $noticia->descricao }}</p>
                        <p>Responsável pela notícia: {{ $noticia->autor }}</p>
                    </div>
                </div>
            </div>
        </div>
        @endforeach

    </div>
</div>

@endsection

