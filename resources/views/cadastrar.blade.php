@extends('layout')

@section('content')
<div class="container d-flex justify-content-center align-items-center py-5">
    <div class="form-card p-5 shadow-lg">
        <h1 class="text-center mb-4 text-light">Cadastrar</h1>
        <form action="{{ route('animais') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="mb-3">
                <label for="tipocadastro" class="form-label  fw-semibold">O que deseja cadastrar?</label>
                <select class="form-select input-style" name="tipocadastro" id="tipocadastro">
                    <option value="tiponoticia">Notícia</option>
                    <option value="tipocinoterapia">Pesquisa Cinoterapia</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="titulocadastro" class="form-label  fw-semibold">Título</label>
                <input type="text" class="form-control input-style" id="titulocadastro" name="titulocadastro" placeholder="Digite o título">
            </div>

            <div class="mb-3">
                <label for="descricaocadastro" class="form-label  fw-semibold">Descrição</label>
                <input type="text" class="form-control input-style" id="descricaocadastro" name="descricaocadastro" placeholder="Digite a descrição">
            </div>

            <div class="mb-4">
                <label for="imagemcadastro" class="form-label  fw-semibold">Imagem</label>
                <input class="form-control input-style" type="file" id="imagemcadastro" name="imagemcadastro">
            </div>

            <div class="text-end">
                <button type="submit" class="btn btn-orange px-4 py-2 fw-bold rounded-pill">CADASTRAR</button>
            </div>
        </form>
    </div>
</div>
@endsection
