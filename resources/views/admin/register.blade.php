@extends('layout')

@section('content')
<div class="container">
    <div class="card shadow-sm logarcard p-4" style="max-width: 500px; margin: auto; margin-top: 100px;">
        <h4 class="text-center mb-4"><b>Cadastro de Administrador</b></h4>
        
        @if($errors->any())
            <div class="alert alert-danger mb-3">
                <ul class="mb-0" style="list-style: none; padding: 0;">
                    @foreach($errors->all() as $error)
                        <li style="font-size: 0.9rem;">{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('admin.register.submit') }}" method="POST">
            @csrf
            
            <div class="form-group mb-3">
                <input type="text" class="form-control" name="name" placeholder="Nome completo..." value="{{ old('name') }}" required>
            </div>
            
            <div class="form-group mb-3">
                <input type="email" class="form-control" name="email" placeholder="E-mail..." value="{{ old('email') }}" required>
            </div>
            
            <div class="form-group mb-3">
                <input type="password" class="form-control" name="password" placeholder="Senha (mínimo 8 caracteres)..." required>
            </div>
            
            <div class="form-group mb-4">
                <input type="password" class="form-control" name="password_confirmation" placeholder="Confirmar senha..." required>
            </div>
            
            <div class="EntrarBut">
                <button type="submit" class="btn btn-outline-primary btn-sm">Cadastrar</button>
            </div>
            
            <div class="text-center mt-3">
                <a href="{{ route('admin.login') }}" style="color: #7fb7ff; text-decoration: none; font-size: 0.9rem;">
                    Já tem conta? Faça login
                </a>
            </div>
        </form>
    </div>
</div>
@endsection