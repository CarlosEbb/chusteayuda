<!-- header section strats -->
<header class="header_section">
    <div class="container">
    
    <nav class="navbar navbar-expand-lg custom_nav-container">
        <a class="" href="/">
            <img src="/images/logo.jpg" class="rounded-circle" alt="" height="60">    
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <div class="d-flex ml-auto flex-column flex-lg-row align-items-center">
            <ul class="navbar-nav  ">

            @if (Auth::check())
                <li class="nav-item active">
                    <a class="nav-link" href="/home"> Home</a>
                </li>
            @endif

            <li class="nav-item active">
                <a class="nav-link" href="/"> Inicio</a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="/about"> Sobre mi </a>
            </li>

            <li class="nav-item ">
                <a class="nav-link" href="/material"> Material </a>
            </li>
            {{--
                <li class="nav-item">
                    <a class="nav-link" href="/tienda"> Tienda </a>
                </li>
            --}}
            <li class="nav-item">
                <a class="nav-link" href="/contacto">Contactame</a>
            </li>

            </ul>
            {{--
                <form class="form-inline my-2 my-lg-0 ml-0 ml-lg-4 mb-3 mb-lg-0">
                <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit"></button>
                </form>
            --}}
        </div>
    </nav>
    </div>
</header>