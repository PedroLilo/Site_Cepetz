@extends('layout')
@section('content')
<div class="container py-5"> <!-- py-5 adiciona espaçamento em cima e embaixo -->
    <!-- Texto em cima -->
    <div class="row justify-content-center mb-5">
        <div class="col-lg-8 col-md-10">
            <div class="p-4 texto-sobre rounded-4 shadow-sm text-center">
                <p>
                    O <strong>Sítio Maria José Semionato</strong> é uma associação dedicada ao cuidado de 
                    cães idosos e doentes, garantindo amor, acolhimento e dignidade para aqueles que mais precisam.
                    A instituição sobrevive de doações e está sempre precisando de ajuda para manter todos os animais
                    abrigados com segurança e carinho.
                </p>
                <p class="mt-3 fw-semibold text-secondary">
                    “Eles deram amor a vida toda. Agora é a nossa vez de retribuir.”
                </p>
            </div>
        </div>
    </div>

    <!-- Galeria lado a lado -->
    <div class="row justify-content-center g-4"> <!-- g-4 adiciona espaçamento entre colunas -->
        <div class="col-lg-5 col-md-6">
            <div class="imagem-frame text-center">
                <img src="{{ asset('storage/images/mariajose1.png') }}" class="img-fluid rounded-4 sombra-imagem img-galeria" alt="Maria José">
            </div>
        </div>
        <div class="col-lg-5 col-md-6">
            <div class="imagem-frame text-center">
                <img src="{{ asset('storage/images/mariajose2.png') }}" class="img-fluid rounded-4 sombra-imagem img-galeria" alt="Maria José com cães">
            </div>
        </div>
    </div>
</div>
@endsection
