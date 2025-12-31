@extends('layout')

@section('content')
<div class="container d-flex justify-content-center align-items-center py-5">
    <div class="form-card p-5 shadow-lg">
        <h1 class="text-center mb-4 text-light">Editar Notícia</h1>
        <form action="{{ route('atualizarnoticia', $noticia->id) }}" method="POST" enctype="multipart/form-data" id="formCadastro">
            @csrf

            <div class="mb-3">
                <label for="titulo" class="form-label fw-semibold">Título</label>
                    <input 
                        type="text" 
                        class="form-control input-style" 
                        id="titulo" 
                        name="titulo" 
                        value="{{ old('titulo', $noticia->titulo ?? $noticia->titulo ?? '') }}"
                        placeholder="Digite o título"
                        required
                    ></div>

            <div class="mb-3">
                                <div class="form-group-cadastro">
                    <label for="descricao" class="label-cadastro">
                        Descrição
                    </label>
                    <div class="editor-wrapper">
                        <div 
                            class="editor-content" 
                            id="editor" 
                        >{!! old('descricao', $noticia->descricao ?? $noticia->descricao ?? '') !!}</div>
                        <textarea 
                            name="descricao" 
                            id="descricao" 
                            style="display: none;" 
                            required
                        >{{ old('descricao', $noticia->descricao ?? $noticia->descricao ?? '') }}</textarea>
                    </div>
                </div>
            </div>

            <div class="mb-3">
                <label for="autor" class="form-label fw-semibold">Autor</label>
                <input type="text" class="form-control input-style" id="autor" name="autor" value="{{ $noticia->autor }}" placeholder="Digite o autor" required>
            </div>

            <div class="mb-4">
                <label for="imagem" class="form-label fw-semibold">Imagem</label>
                @if(isset($noticia->imagem) || isset($noticia->imagem))
                        <div class="imagem-atual">
                            <img src="{{ asset('storage/' . ($noticia->imagem ?? $noticia->imagem)) }}" 
                                 alt="Imagem atual" 
                                 class="mt-2">
                            <p class="texto-substituir">Selecione uma nova imagem para substituir</p>
                        </div>
                    @endif
                    
                    <input 
                        type="file" 
                        class="form-control input-style" 
                        id="imagem" 
                        name="imagem" 
                        accept="image/*"
                    >
            </div>

            <div class="text-end">
                <button type="submit" class="btn btn-orange px-4 py-2 fw-bold rounded-pill">ATUALIZAR</button>
            </div>
        </form>
    </div>
</div>

<!-- quill editor css e js -->
<link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">

<script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>

<script>
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

    var descricao = document.getElementById('descricao').value;
    quill.root.innerHTML = descricao;

    document.getElementById('formCadastro').onsubmit = function() {
        var html = quill.root.innerHTML;
        document.getElementById('descricao').value = html;
    };
</script>
@endsection
