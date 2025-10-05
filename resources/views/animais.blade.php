@extends('layout')
@section('content')
    <div class="container">
        <div class="container-fluid">
            <h1 class="mt-5 text-center textNoticia">Conheça os pets do CEFET Varginha</h1>
        </div>
        <div class="row">
            <div class="col-md-12 mb-4">
                <div class="card mb-4 shadow-sm petcard">
                    <div class="petheader">
                        <h4>Nildo (Nirdo)</h4>
                    </div>
                    <div class="card-body text-center petdesc">
                        <p class="petext">Nirdo é um cachorro muito temperamental, sabe exatamente de quais pessoas gosta e as vezes pede um carinho quando está carente. Parceirinho da Pandora.</p>
                        <img class="fotopets" src="{{ asset('storage/images/logo.png') }}">
                    </div>
                </div>
                <div class="card mb-4 shadow-sm petcard">
                    <div class="petheader">
                        <h4>Pandora (Preta)</h4>
                    </div>
                    <div class="card-body text-center petdesc">
                        <p class="petext">Pandora é a queridinha dos alunos, sempre muito carinhosa e brincalhona, porém muito ciumenta também! Ama carinhos de todos, e sempre está com seu companheiro Nirdo.</p>
                        <img class="fotopets" src="{{ asset('storage/images/pandora.png') }}">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
