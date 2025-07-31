@extends('layout')
@section('content')
    <div class="card shadow-sm logarcard p-4" style="max-width: 400px; margin: auto; margin-top: 0px;">
        <h4 class="text-center mb-4"><b>Login</b></h4>
        <form action="{{ route('logarUsuario') }}" method="POST">
            @csrf
            <div class="form-group mb-3">
                <input type="email" class="form-control" name="email" placeholder="Digite seu e-mail..." required>
            </div>
            <div class="form-group mb-4">
                <input type="password" class="form-control" name="password" placeholder="Digite sua senha..." required>
            </div>
            <div class="EntrarBut">
                <button type="submit" class="btn btn-outline-primary btn-sm">Entrar</button>
            </div>
        </form>
    </div>

@endsection
