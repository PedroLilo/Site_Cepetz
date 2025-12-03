@extends('layout')

@section('content')
<div class="sobre-section">
    <!-- Cabeçalho -->
    <div class="sobre-hero">
        <div class="container text-center">
            <h1 class="titulo-sobre">Sobre o CEPETz</h1>
            <p class="subtitulo-sobre">Conheça nossa história e missão</p>
        </div>
    </div>

    <div class="container py-5">
        <!-- Introdução -->
        <div class="sobre-card mb-5">
            <div class="row align-items-center">
                <div class="col-md-4 text-center mb-4 mb-md-0">
                <div class="col-md-8">
                    <h2 class="secao-titulo">Nossa Origem</h2>
                    <p class="texto-sobre">
                        O projeto CEPETz nasceu em <strong>2022</strong> a partir de uma iniciativa do Programa de fluxo contínuo CEPETz multicampi (Varginha e Curvelo), com o intuito de promover ações extensivas que dessem um maior apoio para a divulgação dos enormes desafios que a sociedade ainda encontra para minimizar o abandono e os maus-tratos de animais em situação de vulnerabilidade (cães e gatos).
                    </p>
                </div>
            </div>
        </div>

        <!-- 2022 - Primeira Edição -->
        <div class="timeline-item">
            <div class="timeline-badge ano-2022">2022</div>
            <div class="sobre-card">
                <h3 class="ano-titulo">Primeira Edição - O Começo</h3>
                <div class="row">
                    <div class="col-md-6">
                        <h4 class="subtitulo-card"><i class="bi bi-house-heart-fill"></i> Parceria com o Sítio São José</h4>
                        <p class="texto-sobre">
                            Estabelecemos parceria com o sítio São José, de propriedade da Sra. Maria José Semionato, que abriga mais de <strong>200 cães e 30 gatos</strong> com faixas etárias que vão dos primeiros meses de vida até idade avançada.
                        </p>
                    </div>
                    <div class="col-md-6">
                        <h4 class="subtitulo-card"><i class="bi bi-gear-fill"></i> Primeiras Ações</h4>
                        <ul class="lista-acoes">
                            <li>Organização de três bazares beneficentes</li>
                            <li>Reforma dos canis em situação precária</li>
                            <li>Desenvolvimento do portal web CEPETz</li>
                            <li>Parceria com alunos de Informática e Mecatrônica</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- 2023 - Segunda Edição -->
        <div class="timeline-item">
            <div class="timeline-badge ano-2023">2023</div>
            <div class="sobre-card">
                <h3 class="ano-titulo">Segunda Edição - AdotaCEPETz</h3>
                <div class="row">
                    <div class="col-md-6">
                        <h4 class="subtitulo-card"><i class="bi bi-people-fill"></i> Foco na Adoção</h4>
                        <p class="texto-sobre">
                            Nasceu o projeto <strong>AdotaCEPETz</strong> com o objetivo de promover a adoção de animais abandonados, organizando feirinhas de adoção em parceria com o comércio local e ONGs de Varginha.
                        </p>
                    </div>
                    <div class="col-md-6">
                        <h4 class="subtitulo-card"><i class="bi bi-phone-fill"></i> Sistema JAMB</h4>
                        <p class="texto-sobre">
                            Desenvolvemos o sistema web JAMB, um aplicativo de interface amigável e custo zero para exposição de animais para adoção e cadastro de tutores. O projeto foi premiado na <strong>32ª META</strong>.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- 2024 - Terceira Edição -->
        <div class="timeline-item">
            <div class="timeline-badge ano-2024">2024</div>
            <div class="sobre-card">
                <h3 class="ano-titulo">Terceira Edição - Expansão Digital</h3>
                <div class="row">
                    <div class="col-md-6">
                        <h4 class="subtitulo-card"><i class="bi bi-instagram"></i> Presença nas Redes</h4>
                        <p class="texto-sobre">
                            Criamos o perfil no Instagram <strong>@cepetzvarginha</strong> com publicações temáticas mensais, alcançando mais de <strong>1.140 seguidores</strong> e promovendo a conscientização sobre a causa animal.
                        </p>
                    </div>
                    <div class="col-md-6">
                        <h4 class="subtitulo-card"><i class="bi bi-book-fill"></i> Materiais Educativos</h4>
                        <ul class="lista-acoes">
                            <li>Cartilha sobre prevenção a maus-tratos</li>
                            <li>Jogo da memória "O Jogo do Vira-Lata"</li>
                            <li>Validação do sistema JAMB com ONGs</li>
                            <li>Apresentações em escolas municipais</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- 2025 - Futuro -->
        <div class="timeline-item">
            <div class="timeline-badge ano-2025">2025</div>
            <div class="sobre-card destaque-2025">
                <h3 class="ano-titulo">2025 - Cinoterapia</h3>
                <div class="row align-items-center mb-4">
                    <div class="col-md-12">
                        <h4 class="subtitulo-card-principal">
                            <i class="bi bi-heart-pulse-fill"></i> 
                            CEPETz Varginha: Cinoterapia, patas que cuidam e transformam vidas
                        </h4>
                        <p class="texto-sobre-destaque">
                            Uma proposta inovadora e inclusiva que explora os benefícios da interação humano-animal para promoção da saúde física, emocional e social.
                        </p>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-md-6">
                        <h5 class="mini-titulo"><i class="bi bi-check-circle-fill"></i> O que é Cinoterapia?</h5>
                        <p class="texto-sobre">
                            Também conhecida como Intervenção Assistida por Animais (IAA), utiliza cães treinados para promover benefícios físicos, emocionais e sociais, sendo eficaz em casos de reabilitação, autismo, ansiedade e depressão.
                        </p>
                    </div>
                    <div class="col-md-6">
                        <h5 class="mini-titulo"><i class="bi bi-calendar-check-fill"></i> Nossas Ações</h5>
                        <ul class="lista-acoes">
                            <li>Oficinas educativas com profissionais especializados</li>
                            <li>Rodas de conversa (veterinários, ONGs, psicólogos)</li>
                            <li>Sessões de IAA para reduzir estresse e ansiedade</li>
                            <li>Ambiente acolhedor e produtivo para a comunidade</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Missão e Impacto -->
        <div class="sobre-card mt-5 missao-card">
            <div class="text-center mb-4">
                <div class="icone-missao">
                    <i class="bi bi-star-fill"></i>
                </div>
                <h2 class="secao-titulo-principal">Nossa Missão</h2>
            </div>
            <div class="row">
                <div class="col-md-4 text-center mb-4">
                    <div class="objetivo-box">
                        <i class="bi bi-shield-fill-check"></i>
                        <h5>Proteção Animal</h5>
                        <p>Garantir o bem-estar e preservação dos direitos de animais em vulnerabilidade</p>
                    </div>
                </div>
                <div class="col-md-4 text-center mb-4">
                    <div class="objetivo-box">
                        <i class="bi bi-lightbulb-fill"></i>
                        <h5>Conscientização</h5>
                        <p>Educar a sociedade sobre prevenção a maus-tratos e abandono animal</p>
                    </div>
                </div>
                <div class="col-md-4 text-center mb-4">
                    <div class="objetivo-box">
                        <i class="bi bi-people-fill"></i>
                        <h5>Impacto Social</h5>
                        <p>Integrar animais ao bem-estar da comunidade e promover transformação social</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Call to Action -->
        <div class="cta-section text-center mt-5">
            <h3 class="cta-titulo">Faça Parte Dessa História</h3>
            <p class="cta-texto">Juntos podemos fazer a diferença na vida de muitos animais</p>
            <div class="cta-buttons">
                <a href="#" class="btn btn-cepetz btn-lg me-3">
                    <i class="bi bi-heart-fill"></i> Quero Ajudar
                </a>
                <a href="#" class="btn btn-cepetz-outline btn-lg">
                    <i class="bi bi-instagram"></i> Siga-nos
                </a>
            </div>
        </div>
    </div>
</div>
@endsection