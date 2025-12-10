@extends('layout')

@section('content')
<div class="container d-flex justify-content-center align-items-center py-5">
    <div class="form-card p-5 shadow-lg">
        <h1 class="text-center mb-4 text-light">Editar Notícia</h1>
        <form action="{{ route('atualizarnoticia', $noticia->id) }}" method="POST" enctype="multipart/form-data" id="formCadastro">
            @csrf
            @method('POST')  <!-- Caso precise utilizar PUT ou PATCH -->

            <div class="mb-3">
                <label for="tipocadastro" class="form-label fw-semibold">O que deseja cadastrar?</label>
                <select class="form-select input-style" name="tipocadastro" id="tipocadastro">
                    <option value="tiponoticia" {{ $noticia->tipocadastro == 'tiponoticia' ? 'selected' : '' }}>Notícia</option>
                    <option value="tipocinoterapia" {{ $noticia->tipocadastro == 'tipocinoterapia' ? 'selected' : '' }}>Pesquisa Cinoterapia</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="titulocadastro" class="form-label fw-semibold">Título</label>
                <input type="text" class="form-control input-style" value="{{ $noticia->titulocadastro }}" id="titulocadastro" name="titulocadastro" placeholder="Digite o título" required>
            </div>

            <div class="mb-3">
                <label for="descricaocadastro" class="form-label fw-semibold">Descrição</label>
                <div id="editor" style="height: 300px; background: white; border-radius: 0px;"></div>
                <input type="hidden" name="descricaocadastro" id="descricaocadastro" value="{{ $noticia->descricaocadastro }}">
            </div>

            <div class="mb-3">
                <label for="autor" class="form-label fw-semibold">Autor</label>
                <input type="text" class="form-control input-style" id="autor" name="autor" value="{{ $noticia->autor }}" placeholder="Digite o autor" required>
            </div>

            <div class="mb-4">
                <label for="imagemcadastro" class="form-label fw-semibold">Imagem</label>
                <input class="form-control input-style" type="file" id="imagemcadastro" name="imagemcadastro" accept="image/*">
                @if($noticia->imagemcadastro)
                    <img src="{{ asset('storage/'.$noticia->imagemcadastro) }}" alt="Imagem cadastrada" class="mt-2" width="150px">
                @endif
            </div>

            <div class="text-end">
                <button type="submit" class="btn btn-orange px-4 py-2 fw-bold rounded-pill">ATUALIZAR</button>
            </div>
        </form>
    </div>
</div>

<!-- Quill Editor CSS -->
<link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">

<!-- Quill Editor JS -->
<script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>

<script>
    // Inicializar o editor Quill
    var quill = new Quill('#editor', {
        theme: 'snow',
        placeholder: 'Digite a descrição da notícia...',
        modules: {
            toolbar: [
                [{ 'header': [1, 2, 3, false] }],
                ['bold', 'italic', 'underline'],
                [{ 'color': [] }, { 'background': [] }],
                [{ 'align': [] }],
                [{ 'list': 'ordered'}, { 'list': 'bullet' }],
                ['link'],
                ['clean']
            ]
        }
    });

    // Carregar o conteúdo da descrição no editor
    var descricao = document.getElementById('descricaocadastro').value;
    quill.root.innerHTML = descricao;

    // Salvar o conteúdo do editor no campo hidden antes de enviar
    document.getElementById('formCadastro').onsubmit = function() {
        var html = quill.root.innerHTML;
        document.getElementById('descricaocadastro').value = html;
    };
</script>
@endsection
