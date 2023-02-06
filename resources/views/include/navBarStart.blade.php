            <!-- Nav Bar Start -->
            <div class="nav-bar">
                <div class="container-fluid">
                    <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
                        <a href="#" class="navbar-brand">MENU</a>
                        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                            <div class="navbar-nav mr-auto">
                                <a href="{{ route('home') }}" class="nav-item nav-link {{ setMenuActive('home') }}">Accueil</a>
                                <a href="{{ route('about') }}" class="nav-item nav-link {{ setMenuActive('about') }}">Qui Sommes Nous ?</a>
                                <a href="{{ route('services') }}" class="nav-item nav-link {{ setMenuActive('services') }}">Nos Services</a>
                                <a href="{{ route('projets') }}" class="nav-item nav-link {{ setMenuActive('projets') }}">Projets Réalisé</a>
                                {{-- <div class="nav-item dropdown">
                                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Pages</a>
                                    <div class="dropdown-menu">
                                        <a href="blog.html" class="dropdown-item">Blog Page</a>
                                        <a href="single.html" class="dropdown-item">Single Page</a>
                                    </div>
                                </div> --}}
                                <a href="{{ route('contact') }}" class="nav-item nav-link {{ setMenuActive('contact') }}">Contact</a>
                            </div>
                            <div class="ml-auto">
                                <a class="btn" href="{{ route('contact') }}">Nous Contacter</a>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
            <!-- Nav Bar End -->
