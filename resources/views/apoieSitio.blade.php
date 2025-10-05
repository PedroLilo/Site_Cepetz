@extends('layout')
@section('content')
    <div class="container">
        <div class="container-fluid">
            <h1 class="mt-5 text-center textNoticia">Sítio Maria José Semionato</h1>
        </div>
        <div class="row align-items-center justify-content-center">
            <div class="col-lg-6 col-md-10 mb-4">
                <div class="p-4 texto-sobre rounded-4 shadow-sm">
                    <p>
                        O <strong>Sítio Maria José Semionato</strong> é uma associação dedicada ao cuidado de 
                        cães idosos e doentes, garantindo amor, acolhimento e dignidade para aqueles que mais precisam.
                        A instituição sobrevive de doações e está sempre precisando de ajuda para manter todos os animais
                        abrigados com segurança e carinho.
                    </p>
                    <p class="mt-3 fw-semibold text-center text-secondary">
                        “Eles deram amor a vida toda. Agora é a nossa vez de retribuir.”
                    </p>
                </div>
            </div>

            <div class="col-lg-6 col-md-10 text-center">
                <div class="galeria">
                    <div class="imagem-frame mb-4">
                        <img src="{{ asset('storage/images/mariajose1.png') }}" class="img-fluid rounded-4 sombra-imagem" alt="Maria José">
                    </div>
                    <div class="imagem-frame">
                        <img src="{{ asset('storage/images/mariajose2.png') }}" class="img-fluid rounded-4 sombra-imagem" alt="Maria José com cães">
                    </div>
                </div>
            </div>
        </div>

        
    </div>
</div>
            
    </div>
@endsection
