@extends('layout')

@section('content')
<div class="container-fluid py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h1 class="fw-bold text-primary titulo-cino">Cinoterapia, patas que cuidam e transformam vidas!</h1>
        </div>

        <div class="row align-items-center mb-5">
            <div class="col-lg-7">
                <p class="texto-cino">
                    A <strong>cinoterapia</strong>, também conhecida como <strong>terapia assistida por cães</strong>,
                    é uma prática terapêutica que utiliza cães especialmente treinados para auxiliar no tratamento
                    de pessoas com diversas necessidades físicas, emocionais, cognitivas e sociais.
                </p>
                <p class="texto-cino">
                    Essa abordagem integra o animal ao processo terapêutico, promovendo bem-estar, alívio de sintomas e
                    melhora na qualidade de vida. É indicada para crianças, adultos e idosos com condições como:
                    <br>• Autismo e transtornos do desenvolvimento;
                    <br>• Depressão e ansiedade;
                    <br>• Alzheimer e outras demências;
                    <br>• Deficiências físicas ou motoras;
                    <br>• Estresse e isolamento social.
                </p>
            </div>
            <div class="col-lg-5 text-center">
                <div class="imagem-cino sombra-cino">
                    <img src="{{ asset('storage/images/cino1.jpg') }}" alt="Cachorro deitado" class="img-fluid rounded-4">
                </div>
            </div>
        </div>
        <div class="text-center mb-4">
            <h2 class="fw-bold text-primary subtitulo-cino">Um toque de amor no cuidado com a saúde</h2>
        </div>

        <div class="row align-items-center flex-lg-row-reverse">
            <div class="col-lg-7">
                <p class="texto-cino">
                    A presença de um cão em um ambiente terapêutico vai muito além do simples contato com um animal:
                    ela desperta sorrisos, quebra barreiras emocionais e cria conexões profundas que impulsionam o
                    processo de cura.
                </p>
                <p class="texto-cino">
                    Seja em hospitais, escolas, clínicas ou instituições de longa permanência, a cinoterapia é uma
                    forma carinhosa e eficaz de cuidar da mente e do corpo com o apoio dos nossos fiéis companheiros
                    de quatro patas.
                </p>
            </div>

            <div class="col-lg-5 text-center">
                <div class="imagem-cino sombra-cino">
                    <img src="{{ asset('storage/images/cino2.jpg') }}" alt="Cão em campo florido" class="img-fluid rounded-4">
                </div>
            </div>
        </div>

        
    </div>
</div>
@endsection
