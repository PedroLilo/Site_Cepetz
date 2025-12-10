@extends('layout')
@section('content')
<div class="container com-margem">
    <div class="noticias-grid">

        @foreach ($noticias as $noticia)
        <div class="card mb-2 shadow-sm noticiaCard">

            <div class="noticiaheader">
                <h3>{{ $noticia->titulo }}</h3>
                <p>{{ $noticia->created_at->format('d/m/Y') }}</p>
            </div>

            @if ($noticia->imagem)
            <img src="{{ asset('storage/' . $noticia->imagem) }}" class="card-img-top" alt="{{ $noticia->titulo }}">
            @endif

            <div class="card-body text-center noticiadescricao">
                <p class="textnoticia">{!! Str::limit(strip_tags($noticia->descricao), 120) !!}</p>

                <button type="button" class="btn btn-secondary" 
                        data-bs-toggle="modal" 
                        data-bs-target="#modal{{ $noticia->id }}">
                    Ver Mais
                </button>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="modal{{ $noticia->id }}" tabindex="-1" aria-labelledby="modalLabel{{ $noticia->id }}" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalLabel{{ $noticia->id }}">{{ $noticia->titulo }}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
            </div>

            <div class="modal-body">
                @if ($noticia->imagem)
                <img src="{{ asset('storage/' . $noticia->imagem) }}" class="img-fluid mb-3" alt="{{ $noticia->titulo }}">
                @endif
                
                <div class="descricao-formatada">
                    {!! $noticia->descricao !!}
                </div>
                
                <hr class="my-4">
                
                <p class="autor-info">
                    <strong><i class="fas fa-user"></i> Responsável pela notícia:</strong> {{ $noticia->autor }}
                </p>
                
                <p class="data-info">
                    <strong><i class="far fa-calendar-alt"></i> Publicado em:</strong> {{ $noticia->created_at->format('d/m/Y') }}
                </p>
            </div>
        </div>
    </div>
</div>
        @endforeach

    </div>
</div>

@endsection