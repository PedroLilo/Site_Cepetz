@extends('layout')

@section('content')

<div class="sobre-hero">
    <div class="container text-center">
        <h1 class="titulo-sobre">Sobre nós</h1>
    </div>
</div>

<div class="container py-5">
    <div class="sobre-card">
        <h2 class="secao-titulo">Nossa Origem</h2>
        <p class="texto-sobre">
            O projeto CEPETz nasceu em <strong>2022</strong> a partir de uma iniciativa do CEPETz multicampi (Varginha e Curvelo), com o intuito de promover ações extensivas que dessem um maior apoio para a divulgação dos enormes desafios que a sociedade ainda encontra para minimizar o abandono e os maus-tratos de animais em situação de vulnerabilidade.
        </p>
    </div>

    <div class="sobre-card">
        <span class="ano-badge">2022</span>
        <h3 class="secao-titulo">Primeira Edição</h3>
        
        <h4 class="subtitulo-item">Parceria com o Sítio Maria José</h4>
        <p class="texto-sobre">
            Estabelecemos parceria com o Sítio Maria José Semionato, de propriedade da Sra. Maria José Semionato, que abriga cerca de 250 cães e gatos com faixas etárias que vão dos primeiros meses de vida até idade avançada.
        </p>
        
        <h4 class="subtitulo-item">Primeiras Ações</h4>
        <ul class="lista-simples">
            <li>Organização de três bazares beneficentes</li>
            <li>Reforma dos canis em situação precária</li>
            <li>Desenvolvimento de um portal web para o CEPETz</li>
            <li>Parceria com alunos de Informática e Mecatrônica</li>
        </ul>
    </div>

    <div class="sobre-card">
        <span class="ano-badge">2023</span>
        <h3 class="secao-titulo">Segunda Edição</h3>
        
        <h4 class="subtitulo-item">Foco na Adoção</h4>
        <p class="texto-sobre">
            Nasceu o projeto <strong>AdotaCEPETz</strong> com o objetivo de promover a adoção de animais abandonados, organizando feirinhas de adoção em parceria com o comércio local e ONGs de Varginha.
        </p>
        
        <h4 class="subtitulo-item">Sistema JAMB</h4>
        <p class="texto-sobre">
            Desenvolvemos o sistema web JAMB, um aplicativo de interface amigável e custo zero para exposição de animais para adoção e cadastro de tutores. O projeto foi premiado na <strong>32ª META</strong>.
        </p>
    </div>

    <div class="sobre-card">
        <span class="ano-badge">2024</span>
        <h3 class="secao-titulo">Terceira Edição</h3>
        
        <h4 class="subtitulo-item">Presença nas Redes</h4>
        <p class="texto-sobre">
            Nasce o perfil do Instagram <strong>(@cepetzvarginha)</strong> com publicações temáticas mensais, alcançando mais de <strong>1.140 seguidores</strong> e promovendo a conscientização sobre a causa animal.
        </p>
        
        <h4 class="subtitulo-item">Materiais Educativos</h4>
        <ul class="lista-simples">
            <li>Jogo da memória "O Jogo do Vira-Lata"</li>
            <li>Apresentações em escolas municipais</li>
        </ul>
    </div>

    <div class="sobre-card">
        <span class="ano-badge" style="background: #3b82f6;">2025</span>
        <h3 class="secao-titulo">Quarta Edição</h3>
        
        <h4 class="subtitulo-item">Cinoterapia: patas que cuidam e transformam vidas</h4>
        <p class="texto-sobre">
            Uma proposta inovadora e inclusiva que explora os benefícios da interação humano-animal para promoção da saúde física, emocional e social.
        </p>
        <h4 class="subtitulo-item">Presença nas Redes</h4>
        <p class="texto-sobre">
            Repaginamos perfil do instagram, com com um visual mais atrativo e mudança no estilo das publicações, alcançando então cerca de <strong>1.500 seguidores</strong> nesse ano.
        </p>
        
        <div class="row mt-4">
            <div class="col-md-6">
                <h5 class="subtitulo-item" style="color: #fc9a45ff;">O que é Cinoterapia?</h5>
                <p class="texto-sobre">
                    Também conhecida como Terapia Assistida por Animais (TAA), utiliza cães treinados para promover benefícios físicos, emocionais e sociais, sendo eficaz em casos de reabilitação, autismo, ansiedade e depressão.
                </p>
            </div>
            <div class="col-md-6">
                <h5 class="subtitulo-item" style="color: #fc9a45ff;">Nossas Ações</h5>
                <ul class="lista-simples">
                    <li>Rodas de conversa (veterinários, ONGs, psicólogos)</li>
                    <li>Sessões de TAA para reduzir estresse e ansiedade</li>
                    <li>Ambiente acolhedor e produtivo para a comunidade</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="card-missao">
        <h2 class="titulo-missao">Nossa Missão</h2>
        <div class="row">
            <div class="col-md-4 mb-3">
                <div class="box-objetivo">
                    <h5>Proteção Animal</h5>
                    <p>Garantir o bem-estar e preservação dos direitos de animais em vulnerabilidade</p>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="box-objetivo">
                    <h5>Conscientização</h5>
                    <p>Educar a sociedade sobre prevenção a maus-tratos e abandono animal</p>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="box-objetivo">
                    <h5>Impacto Social</h5>
                    <p>Integrar animais ao bem-estar da comunidade e promover transformação social</p>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection