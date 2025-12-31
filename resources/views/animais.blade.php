@extends('layout')
@section('content')
<div class="container py-5">
    <div class="pets-hero mb-5">
        <h1 class="titulo-pets text-center">Pets do CEFET Varginha</h1>
    </div>

    <div class="secao-pets-atuais mb-5">
        <div class="row g-4">
            <div class="col-lg-6">
                <div class="pet-card-simples">
                    <h3 class="pet-nome-simples">Nildo (Nirdo)</h3>
                    <div class="pet-conteudo-vertical">
                        <img src="{{ asset('storage/images/nirdo.png') }}" class="pet-imagem-simples" alt="Nildo">
                        <p class="pet-texto-simples">
                            Nirdo é um cachorro muito temperamental, sabe exatamente de quais pessoas gosta e 
                            às vezes pede um carinho quando está carente.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="pet-card-simples">
                    <h3 class="pet-nome-simples">Pandora (Preta)</h3>
                    <div class="pet-conteudo-vertical">
                        <img src="{{ asset('storage/images/pet1.jpg') }}" class="pet-imagem-simples" alt="Pandora">
                        <p class="pet-texto-simples">
                            Pandora é a queridinha dos alunos, sempre muito carinhosa e brincalhona, 
                            porém muito ciumenta também! Ama carinhos de todos!
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="secao-pets-saudade">
        <p class="texto-intro-saudade">
            Estes amigos fizeram parte da nossa história e deixaram saudades!
        </p>

        <div class="grid-saudades">
            <div class="card-saudade-mini">
                <img src="{{ asset('storage/images/amarelo.png') }}" class="img-saudade-mini" alt="amarelo">
                <h4 class="nome-saudade-mini">Amarelo (adotado)</h4>
            </div>

            <div class="card-saudade-mini">
                <img src="{{ asset('storage/images/biscoito.png') }}" class="img-saudade-mini" alt="biscoito">
                <h4 class="nome-saudade-mini">Biscoito</h4>
            </div>

            <div class="card-saudade-mini">
                <img src="{{ asset('storage/images/rajado.png') }}" class="img-saudade-mini" alt="rajado">
                <h4 class="nome-saudade-mini">Rajado</h4>
            </div>

            <div class="card-saudade-mini">
                <img src="{{ asset('storage/images/tigrado.png') }}" class="img-saudade-mini" alt="tigrão">
                <h4 class="nome-saudade-mini">Tigrão</h4>
            </div>

            <div class="card-saudade-mini">
                <img src="{{ asset('storage/images/madruga.png') }}" class="img-saudade-mini" alt="madruga">
                <h4 class="nome-saudade-mini">Madruga</h4>
            </div>
            </div>
    </div>
</div>
@endsection