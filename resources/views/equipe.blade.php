@extends('layout')

@section('content')
<div class="equipe-section">
    <!-- Cabeçalho -->
    <div class="equipe-hero">
        <div class="container text-center">
            <h1 class="titulo-equipe">Equipe CEPETz 2025</h1>
            <p class="subtitulo-equipe">Conheça quem faz o CEPETz acontecer</p>
        </div>
    </div>

    <div class="container">
        <!-- Foto da Equipe Completa -->
        <div class="row justify-content-center mb-5">
            <div class="col-md-8">
                <div class="foto-equipe-completa">
                    <img src="{{ asset('storage/images/equipe2025.jpg') }}" alt="Equipe 2025">
                </div>
            </div>
        </div>

        <!-- Coordenação -->
        <div class="secao-categoria">
            <h2 class="categoria-titulo">
                <i class="bi bi-star-fill"></i> Coordenação
            </h2>

            <div class="row justify-content-center">
                <div class="col-md-4">
                    <div class="card-membro coordenadora">
                        <div class="foto-membro">
                            <img src="{{ asset('storage/images/erikakress.png') }}" alt="Erika Kress">
                        </div>
                        <span class="cargo-badge coordenadora-cargo">Coordenadora</span>
                        <h5 class="nome-membro">Erika Kress</h5>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bolsistas -->
        <div class="secao-categoria">
            <h2 class="categoria-titulo">
                <i class="bi bi-award-fill"></i> Bolsistas
            </h2>

            <div class="row justify-content-center g-4">
                <div class="col-md-4">
                    <div class="card-membro bolsista">
                        <div class="foto-membro">
                            <img src="{{ asset('storage/images/anavitoria.png') }}" alt="Ana Vitória">
                        </div>
                        <span class="cargo-badge bolsista-cargo">Bolsista</span>
                        <h5 class="nome-membro">Ana Vitória</h5>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card-membro bolsista">
                        <div class="foto-membro">
                            <img src="{{ asset('storage/images/anita.png') }}" alt="Anita">
                        </div>
                        <span class="cargo-badge bolsista-cargo">Bolsista</span>
                        <h5 class="nome-membro">Anita</h5>
                    </div>
                </div>
            </div>
        </div>

        <!-- Voluntários -->
        <div class="secao-categoria">
            <h2 class="categoria-titulo">
                <i class="bi bi-heart-fill"></i> Voluntários
            </h2>

            @php
                $voluntarios = [
                    ['nome' => 'Amanda Gabriela', 'img' => 'amandagabriela.png'],
                    ['nome' => 'Ana Clara', 'img' => 'anaclara.png'],
                    ['nome' => 'Breno', 'img' => 'breno.png'],
                    ['nome' => 'Florênça', 'img' => 'florenca.png'],
                    ['nome' => 'Giovana', 'img' => 'giovana.png'],
                    ['nome' => 'Giovanna', 'img' => 'giovanna.jpg'],
                    ['nome' => 'Helena', 'img' => 'helena.png'],
                    ['nome' => 'Jéssica', 'img' => 'jessica.png'],
                    ['nome' => 'João Emanoel', 'img' => 'joaoemanoel.png'],
                    ['nome' => 'Julia', 'img' => 'julia.png'],
                    ['nome' => 'Larissa', 'img' => 'larissa.png'],
                    ['nome' => 'Maike', 'img' => 'maike.png'],
                    ['nome' => 'Maria Fernanda', 'img' => 'mariafernanda.png'],
                    ['nome' => 'Melyssa', 'img' => 'melyssa.png'],
                    ['nome' => 'Miguel', 'img' => 'miguel.png'],
                    ['nome' => 'Milena', 'img' => 'milena.png'],
                    ['nome' => 'Pedro Liló', 'img' => 'pedrolilo.png'],
                ];
            @endphp

            <div class="row g-4">
                @foreach ($voluntarios as $v)
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="card-membro voluntario">
                            <div class="foto-membro">
                                <img src="{{ asset('storage/images/' . $v['img']) }}" alt="{{ $v['nome'] }}">
                            </div>
                            <span class="cargo-badge voluntario-cargo">Voluntário</span>
                            <h5 class="nome-membro">{{ $v['nome'] }}</h5>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection