<aside class="main-sidebar sidebar-dark-primary elevation-4">

    <a href="{{route('admin.home')}}" class="brand-link">
    <img src="{{asset('images/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">AdminLTE </span>
    </a>

    <div class="sidebar">

        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{asset('images/user1-128x128.jpg')}}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">{{auth()->user()->nom}}</a>
            </div>
        </div>

        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="{{route('admin.home')}}" class="nav-link {{setMenuActive('admin.home')}}">
                      <i class="nav-icon fas fa-home"></i>
                      <p>
                        Accueil
                      </p>
                    </a>
                  </li>


                <li class="nav-header">GESTION</li>
                <li class="nav-item">
                    <a href="{{route('admin.annonces')}}" class="nav-link {{ setMenuActive('admin.annonces') }}">
                        <i class="nav-icon fas fa-bullhorn"></i>
                        <p>
                        Gestion des annonces
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('admin.message')}}" class="nav-link {{ setMenuActive('admin.message') }}">
                        <i class="nav-icon fas fa-comment-alt"></i>
                        <p>
                        Gestion des messages
                        </p>
                    </a>
                </li>
                {{-- <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-exchange-alt"></i>
                        <p>
                        NewsLetters
                        </p>
                    </a>
                </li> --}}


            </ul>
        </nav>

    </div>

</aside>
