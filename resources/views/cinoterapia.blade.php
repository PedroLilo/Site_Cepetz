@extends('layout')

@section('content')
<div class="cino-hero">
    <div class="container">
        <div class="text-center">
            <h1 class="titulo-cino">Cinoterapia, patas que cuidam e transformam vidas!</h1>
        </div>
    </div>
</div>

<div class="container py-4">
    <div class="cino-section">
        <div class="row align-items-center">
            <div class="col-lg-7 mb-4 mb-lg-0">
                <p class="texto-cino">
                    A <strong>cinoterapia</strong>, também conhecida como <strong>terapia assistida por cães</strong>,
                    é uma prática terapêutica que utiliza cães especialmente treinados para auxiliar no tratamento
                    de pessoas com diversas necessidades físicas, emocionais, cognitivas e sociais.
                </p>
                <p class="texto-cino">
                    Essa abordagem integra o animal ao processo terapêutico, promovendo bem-estar, alívio de sintomas e
                    melhora na qualidade de vida.
                </p>
                
                <div class="lista-beneficios">
                    <h5 class="mb-3">Indicada para:</h5>
                    <ul>
                        <li></span> Autismo e transtornos do desenvolvimento;</li>
                        <li></span> Depressão e ansiedade;</li>
                        <li></span> Alzheimer e outras demências;</li>
                        <li></span> Deficiências físicas ou motoras;</li>
                        <li></span> Estresse e isolamento social.</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="imagem-cino">
                    <img src="{{ asset('storage/images/cinot.jpg') }}" alt="Cinoterapia">
                </div>
            </div>
        </div>
    </div>

    <div class="text-center">
        <h2 class="subtitulo-cino">Um toque de amor no cuidado com a saúde</h2>
    </div>

    <div class="cino-section">
        <div class="row align-items-center">
            <div class="col-lg-5 mb-4 mb-lg-0 order-lg-1 order-2">
                <div class="imagem-cino">
                    <img src="{{ asset('storage/images/cino2.jpg') }}" alt="Pata">
                </div>
            </div>
            <div class="col-lg-7 order-lg-2 order-1">
                <p class="texto-cino">
                    A presença de um cão em um ambiente terapêutico vai muito além do simples contato com um animal:
                    ela desperta sorrisos, quebra barreiras emocionais e cria conexões profundas que impulsionam o
                    processo de cura.
                </p>
                
                <div class="destaque-box">
                    <p class="texto-cino mb-0">
                        <strong>Transformando vidas com amor</strong><br>
                        Seja em hospitais, escolas, clínicas ou instituições de longa permanência, a cinoterapia é uma
                        forma carinhosa e eficaz de cuidar da mente e do corpo com o apoio dos nossos fiéis companheiros
                        de quatro patas.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection