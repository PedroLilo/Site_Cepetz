@extends('layout')

@section('content')
<div class="container">
    <div class="card shadow-sm logarcard p-4" style="max-width: 500px; margin: auto; margin-top: 100px;">
        <h4 class="text-center mb-4"><b>Login de Administrador</b></h4>
        
        @if($errors->any())
            <div class="alert alert-danger mb-3">
                <ul class="mb-0" style="list-style: none; padding: 0;">
                    @foreach($errors->all() as $error)
                        <li style="font-size: 0.9rem;">{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @if(session('error'))
            <div class="alert alert-danger mb-3" style="font-size: 0.9rem;">
                {{ session('error') }}
            </div>
        @endif

        <form action="{{ route('admin.login.submit') }}" method="POST">
            @csrf
            
            <div class="form-group mb-3">
                <input type="email" class="form-control" name="email" placeholder="Digite seu e-mail..." value="{{ old('email') }}" required>
            </div>
            
            <div class="form-group mb-3">
                <input type="password" class="form-control" name="password" placeholder="Digite sua senha..." required>
            </div>
            
            <div class="form-check mb-4" style="text-align: left;">
                <input type="checkbox" class="form-check-input" id="remember" name="remember" style="background-color: #7fb7ff; border: 2px solid #042d5c;">
                <label class="form-check-label" for="remember" style="color: #7fb7ff; font-size: 0.9rem;">
                    Lembrar de mim
                </label>
            </div>
            
            <div class="EntrarBut">
                <button type="submit" class="btn btn-outline-primary btn-sm">Entrar</button>
            </div>
        </form>
    </div>
</div>
@endsection