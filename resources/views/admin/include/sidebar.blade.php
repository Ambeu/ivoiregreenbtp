<aside class="control-sidebar control-sidebar-dark">

    <div class="card-body box-profile">
        <div class="text-center">
            <img class="profile-user-img img-fluid img-circle" src="{{asset('images/user.png')}}" alt="User profile picture">
        </div>
            <h3 class="profile-username text-center ellipsis">{{auth()->user()->nom}} </h3>
            <p class="text-muted text-center">{{auth()->user()->role->nom}}</p>
        {{-- <ul class="list-group list-group-unbordered mb-3">
            <li class="list-group-item">
                 <a class="d-flex align-items-center"><i class="fa fa-lock pr-2"></i><b>Mot de passe</b></a>
            </li>
            <li class="list-group-item">
                <a class="d-flex align-items-center"><i class="fa fa-user pr-2"></i><b>Mon Profile</b></a>
            </li>
            <li class="list-group-item">
                <b>Friends</b> <a class="float-right">13,287</a>
            </li>
        </ul> --}}
        {{-- <a href="#" class="btn btn-primary btn-block"><b>Déconnexion</b></a> --}}
        <a class="btn btn-primary btn-block" href="#"
            onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">

            Déconnexion
        </a>

        <form id="logout-form" action="{{route('logout')}}" method="POST" class="d-none">
            @csrf
        </form>
    </div>
</aside>
