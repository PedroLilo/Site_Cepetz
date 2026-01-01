<nav class="navbar fixed-top flex-md-nowrap p-0 shadow">
    <div class="logonav">
        <a href="/"><img class="Logo" src="{{ asset('storage/images/logo.png') }}"></a>
        <a>CEPETz Varginha</a>
    </div>
    <div class="nav-links">
        <a class="navA" href="/">Inicio</a>
        <a class="navA" href="/cepetz/cinoterapia">Cinoterapia</a>
        <div class="dropdown">
            <a class="navA dropbtn" href="/cepetz/sobre">Quem Somos</a>
            <div class="dropdown-content">
                <a href="/cepetz/equipe">Nossa Equipe</a>
                <a href="/cepetz/animais">Nossos Pets</a>
            </div>
        </div>
        <a class="navA" href="/cepetz/apoieSitio">Apoie o Sítio</a>
        
        @if(Auth::guard('admin')->check())
            <a class="navA" href="/cepetz/gerenciamento">Gerenciamento</a>
            <form action="{{ route('admin.logout') }}" method="POST" style="display: inline; margin: 0;">
                @csrf
                <button type="submit" class="btn-nav-logout">Sair</button>
            </form>
        @endif
    </div>
</nav>