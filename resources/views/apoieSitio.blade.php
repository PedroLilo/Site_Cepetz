@extends('layout')
@section('content')
<div class="container py-5">
    <div class="mariajose-hero mb-5">
        <h1 class="titulo-mariajose text-center">Sítio Maria José Semionato</h1>
    </div>

    <div class="mariajose-card">
        <h2 class="secao-titulo-mariajose">Sobre o Sítio</h2>
        
        <p class="texto-mariajose">
            O <strong>Sítio Maria José Semionato</strong> é uma associação dedicada ao cuidado de 
            cães idosos e doentes, garantindo amor, acolhimento e dignidade para aqueles que mais precisam.
        </p>
        
        <p class="texto-mariajose">
            A instituição sobrevive de doações e está sempre precisando de ajuda para manter todos os animais
            abrigados com segurança e carinho.
        </p>

        <div class="citacao-box">
            <p class="citacao-texto">
                "Eles deram amor a vida toda. Agora é a nossa vez de retribuir."
            </p>
        </div>
    </div>

    <div class="card-missao-mariajose">
        <h2 class="titulo-missao-mariajose">Nossa Missão</h2>
        
        <div class="row g-4">
            <div class="col-md-4">
                <div class="box-objetivo-mariajose">
                    <h5>Acolhimento</h5>
                    <p>Proporcionar um lar seguro e confortável para cães idosos e doentes</p>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="box-objetivo-mariajose">
                    <h5>Cuidado</h5>
                    <p>Garantir tratamento veterinário e atenção especial para cada animal</p>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="box-objetivo-mariajose">
                    <h5>Dignidade</h5>
                    <p>Assegurar que todos vivam com respeito e amor em seus últimos dias</p>
                </div>
            </div>
        </div>
    </div>

    <div class="galeria-mariajose">
        <h2 class="subtitulo-galeria">Conheça Nossa Fundadora</h2>
        
        <div class="row g-4">
            <div class="col-lg-6 col-md-6">
                <div class="imagem-container">
                    <img src="{{ asset('storage/images/mariajosesim.png') }}" 
                         class="img-galeria-mariajose" 
                         alt="Maria José Semionato">
                    <div class="legenda-imagem">Maria José Semionato</div>
                </div>
            </div>
            
            <div class="col-lg-6 col-md-6">
                <div class="imagem-container">
                    <img src="{{ asset('storage/images/mariajose2.png') }}" 
                         class="img-galeria-mariajose" 
                         alt="Maria José com os cães">
                    <div class="legenda-imagem">Dedicação e amor aos animais</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection