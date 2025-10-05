@extends('layout')

@section('content')
<div class="container-fluid equipe-bg py-5">
    <div class="container text-center">
        <h1 class="fw-bold text-primary titulo-equipe mb-5">Equipe CEPETz 2025</h1>

        <div class="row justify-content-center g-4">

            <!-- COORDENADORA -->
            <div class="col-md-4 col-sm-6">
                <div class="card-equipe">
                    <div class="foto-equipe">
                        <img src="{{ asset('storage/images/erikakress.png') }}" alt="Erika Kress">
                    </div>
                    <h6 class="cargo-equipe text-uppercase text-warning">Coordenadora</h6>
                    <h5 class="nome-equipe">Erika Kress</h5>
                </div>
            </div>

            <!-- BOLSISTAS -->
            <div class="col-md-4 col-sm-6">
                <div class="card-equipe">
                    <div class="foto-equipe">
                        <img src="{{ asset('storage/images/anita.png') }}" alt="Anita">
                    </div>
                    <h6 class="cargo-equipe text-uppercase text-warning">Bolsista</h6>
                    <h5 class="nome-equipe">Anita</h5>
                </div>
            </div>

            <div class="col-md-4 col-sm-6">
                <div class="card-equipe destaque">
                    <div class="foto-equipe">
                        <img src="{{ asset('storage/images/anavitoria.png') }}" alt="Ana Vitória">
                    </div>
                    <h6 class="cargo-equipe text-uppercase text-warning">Bolsista</h6>
                    <h5 class="nome-equipe">Ana Vitória</h5>
                </div>
            </div>

            <!-- VOLUNTÁRIOS -->
            @php
                $voluntarios = [
                    ['nome' => 'Amanda Gabriela', 'img' => 'amandagabriela.png'],
                    ['nome' => 'Ana Clara', 'img' => 'anaclara.png'],
                    ['nome' => 'Breno', 'img' => 'breno.png'],
                    ['nome' => 'Florênça', 'img' => 'florenca.png'],
                    ['nome' => 'Giovana', 'img' => 'giovana.png'],
                    ['nome' => 'Giovanna', 'img' => 'giovanna.png'],
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

            @foreach ($voluntarios as $v)
                <div class="col-md-4 col-sm-6">
                    <div class="card-equipe">
                        <div class="foto-equipe">
                            <img src="{{ asset('storage/images/' . $v['img']) }}" alt="{{ $v['nome'] }}">
                        </div>
                        <h6 class="cargo-equipe text-uppercase text-warning">Voluntário</h6>
                        <h5 class="nome-equipe">{{ $v['nome'] }}</h5>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
