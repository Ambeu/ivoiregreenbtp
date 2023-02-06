@extends('base.app')


@section('content')
<div class="page-header" style="margin-top: 0px;">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>Qui sommes nous ?</h2>
            </div>
            <div class="col-12">
                <a href="{{ route('home') }}">Accueil</a>
                <a href="{{ route('about') }}">A Propos de nous </a>
            </div>
        </div>
    </div>
</div>

<div class="about wow fadeInUp" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-2 col-md-6">
                {{-- <div class="about-img">
                    <img src="img/about.jpg" alt="Image">
                </div> --}}
            </div>
            <div class="col-lg-7 col-md-6">
                <div class="section-header text-left">
                    <p> <b>BIENVENU CHEZ IVOIRE GREEN BTP</b></p>
                </div>
                <div class="about-text">
                    <p>
                       <b>IVOIRE GREEN BTP</b>  est une entreprise spécialisée dans le domaine du bâtiment, des travaux
                        publics (Conception, études et travaux), de l'immobilier, de lotissement et de ventes de terrains
                    </p>
                    <p>
                        D'ici 2030, la population ivoirienne sera estimée à environ
                        30 millions d'habitants. Elle aura besoin de logement et
                        d'infrastructures durable pour l'exercice des activités professionnelles. C'est un défis énorme qui reposent sur le
                        secteur du BTP.
                    </p>
                    <p>
                        La construction est un poids lourd dans le secteur secondaire, lequel représente plus de 23% du PIB. Le secteur du
                        BTP se démarque par sa capacité à créer des emplois.
                        Cependant plusieurs défis doivent être relevés. Ce sont
                        entre autres la qualité des ouvrages et la compétence
                        des acteurs du domaine.
                    </p>
                    {{-- <a class="btn" href="">Learn More</a> --}}
                </div>
                <hr>
                <div class="section-header text-left">
                    <p> <b>NOTRE VISION</b></p>
                </div>
                <div class="about-text">
                    <p>Chez IVOIRE GREEN BTP, la qualité de nos ouvrages est une source importante de fierté. Nous
                        travaillons durement pour l'extension de nos connaissances, moyen pour nous de conserver notre
                        statut d'expert dans le secteur du génie civil.</p>
                        <p>Nous travaillons également à la pérennisation de l'entreprise, par la production de documents
                            fiables et la bonne exécution des travaux de construction, toutefois en nous positionnant comme
                            leader dans le domaine du Bâtiment et des Travaux Publics</p>
                </div>

                <hr>
                <div class="section-header text-left">
                    <p> <b>NOTRE MISSION</b></p>
                </div>
                <div class="about-text">
                    <p>La mission de <b>IVOIRE GREEN BTP</b>  est de mener à terme des projets de construction et d'ouvrages
                        de toutes envergures. La profitabilité de l'entreprise ainsi que la pleine satisfaction des exigences
                        des clients découlent d'une organisation stratégique des équipes de travail selon leurs aptitudes et
                        expertises</p>
                </div>
            </div>
            <div class="col-lg-2 col-md-6">
                {{-- <div class="about-img">
                    <img src="img/about.jpg" alt="Image">
                </div> --}}
            </div>
        </div>
    </div>
</div>

<div class="team">
    <div class="container">
        <div class="section-header text-center">
            {{-- <p>Our Team</p> --}}
            <h2> NOTRE EQUIPE </h2>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                <div class="team-item">
                    <div class="team-img">
                        <img src="img/team-1.jpg" alt="Team Image">
                    </div>
                    <div class="team-text">
                        <h2>Adam Phillips</h2>
                        <p>CEO &amp; Founder</p>
                    </div>
                    <div class="team-social">
                        <a class="social-tw" href=""><i class="fab fa-twitter"></i></a>
                        <a class="social-fb" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="social-li" href=""><i class="fab fa-linkedin-in"></i></a>
                        <a class="social-in" href=""><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                <div class="team-item">
                    <div class="team-img">
                        <img src="img/team-2.jpg" alt="Team Image">
                    </div>
                    <div class="team-text">
                        <h2>Dylan Adams</h2>
                        <p>Civil Engineer</p>
                    </div>
                    <div class="team-social">
                        <a class="social-tw" href=""><i class="fab fa-twitter"></i></a>
                        <a class="social-fb" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="social-li" href=""><i class="fab fa-linkedin-in"></i></a>
                        <a class="social-in" href=""><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                <div class="team-item">
                    <div class="team-img">
                        <img src="img/team-3.jpg" alt="Team Image">
                    </div>
                    <div class="team-text">
                        <h2>Jhon Doe</h2>
                        <p>Interior Designer</p>
                    </div>
                    <div class="team-social">
                        <a class="social-tw" href=""><i class="fab fa-twitter"></i></a>
                        <a class="social-fb" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="social-li" href=""><i class="fab fa-linkedin-in"></i></a>
                        <a class="social-in" href=""><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
                <div class="team-item">
                    <div class="team-img">
                        <img src="img/team-4.jpg" alt="Team Image">
                    </div>
                    <div class="team-text">
                        <h2>Josh Dunn</h2>
                        <p>Painter</p>
                    </div>
                    <div class="team-social">
                        <a class="social-tw" href=""><i class="fab fa-twitter"></i></a>
                        <a class="social-fb" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="social-li" href=""><i class="fab fa-linkedin-in"></i></a>
                        <a class="social-in" href=""><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
