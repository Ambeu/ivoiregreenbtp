@extends('base.app')

@section('content')
<div class="page-header" style="margin-top: 0px;">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>Nos Services</h2>
            </div>
            <div class="col-12">
                <a href=" {{ route('home')}} ">Accueil</a>
                <a href="{{ route('about')}} ">Page Service</a>
            </div>
        </div>
    </div>
</div>
<div class="blog">
    <div class="container">
        <div class="section-header text-center">
            <p>Services</p>
            <h2>Nos Prestations</h2>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                <div class="blog-item">
                    <div class="blog-img">
                        <img src="{{asset('images/newimg/2.jpg')}}" alt="Image">
                    </div>
                    <div class="blog-title">
                        <h3>CONCEPTION ET ETUDES</h3>
                        {{-- <a class="btn" href="">+</a> --}}
                    </div>
                    <div class="blog-meta">
                        {{-- <p>By<a href="">Admin</a></p>
                        <p>In<a href="">Construction</a></p> --}}
                    </div>
                    <div class="blog-text">
                        <p>Nous disposons d’une équipe dynamique qui assure la conception et
                            l’étude de tous nos projets.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp">
                <div class="blog-item">
                    <div class="blog-img">
                        <img src="{{asset('images/newimg/1.jpg')}}" alt="Image">
                    </div>
                    <div class="blog-title">
                        <h3>IMMOBILIER</h3>
                        {{-- <a class="btn" href="">+</a> --}}
                    </div>
                    <div class="blog-meta">
                        {{-- <p>By<a href="">Admin</a></p>
                        <p>In<a href="">Construction</a></p> --}}
                    </div>
                    <div class="blog-text">
                        <p>- Construction et vente
                            - Location
                            - Rénovation et réhabilitation
                            - Gestion de biens Immobiliers </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                <div class="blog-item">
                    <div class="blog-img">
                        <img src="{{asset('images/newimg/4.jpg')}}" alt="Image">
                    </div>
                    <div class="blog-title">
                        <h3>TRAVAUX PUBLICS</h3>
                        {{-- <a class="btn" href="">+</a> --}}
                    </div>
                    <div class="blog-meta">
                        {{-- <p>By<a href="">Admin</a></p>
                        <p>In<a href="">Construction</a></p> --}}
                    </div>
                    <div class="blog-text">
                        <p>-Les routes
                            -HVA (Hydraulique Villageoise Améliorée)
                            -Les ponts,les dalots et les buses </p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                <div class="blog-item">
                    <div class="blog-img">
                        <img src="{{asset('images/newimg/3.jpeg')}}" alt="Image">
                    </div>
                    <div class="blog-title">
                        <h3>LOTISSEMENT ET LA VENTE <br>
                            DE TERRAINS</h3>
                        {{-- <a class="btn" href="">+</a> --}}
                    </div>
                    <div class="blog-meta">
                        {{-- <p>By<a href="">Admin</a></p>
                        <p>In<a href="">Construction</a></p> --}}
                    </div>
                    <div class="blog-text">
                        <p>Nous mettons à disposition des
                            terrains viabilisés</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="faqs">
    <div class="container">
        <div class="section-header text-center">
            <p>Notre Fonctionnement</p>
            <h2>Nos Valeurs</h2>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div id="accordion-1">
                    <div class="card wow fadeInLeft" data-wow-delay="0.1s">
                        <div class="card-header">
                            <a class="card-link collapsed" data-toggle="collapse" href="#collapseOne">
                                Nos Fournisseurs
                            </a>
                        </div>
                        <div id="collapseOne" class="collapse" data-parent="#accordion-1">
                            <div class="card-body">
                               <ul>
                                <li>Nous considérons nos fournisseurs comme des partenaires</li>
                                <li>Nous exigeons des matériaux qui respectent les normes en vigueur ainsi que les de livraison</li>
                               </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card wow fadeInLeft" data-wow-delay="0.2s">
                        <div class="card-header">
                            <a class="card-link collapsed" data-toggle="collapse" href="#collapseTwo">
                                Notre Clientèle
                            </a>
                        </div>
                        <div id="collapseTwo" class="collapse" data-parent="#accordion-1">
                            <div class="card-body">
                                <ul>
                                    <li>Nos clients sont au centre de notre réflexion et de notre action</li>
                                    <li>Nous nous engageons à collaborer avec notre
                                        clientèle dans un esprit de partenariat, en vue
                                        d’une amélioration permanente de la qualité
                                        des produits et des prestations de l’entreprise,
                                        tout en augmentant le capital confiance de nos
                                        clients</li>
                                    <li>Nous sommes attentifs à l’évolution du marché
                                        afin que nos réalisations correspondent au
                                        développement des nouvelles technologies
                                        Nos fournisseurs</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card wow fadeInLeft" data-wow-delay="0.3s">
                        <div class="card-header">
                            <a class="card-link collapsed" data-toggle="collapse" href="#collapseThree">
                                Notre Organisation
                            </a>
                        </div>
                        <div id="collapseThree" class="collapse" data-parent="#accordion-1">
                            <div class="card-body">
                                <ul>
                                    <li>Notre souhait est de devenir un des leaders
                                        incontournables dans le milieu du Bâtiment et
                                        des Travaux Publics</li>
                                    <li>Nous entendons assurer le développement
                                        harmonieux de notre entreprise en utilisant de
                                        manière optimale, durable et efficace les ressources matérielles, humaines et financières</li>
                                    <li>Nous disposons d’un système d’information
                                        performant et des bases de données nécessaires au bon fonctionnement de l’entreprise</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-md-6">
                <div id="accordion-2">
                    <div class="card wow fadeInRight" data-wow-delay="0.1s">
                        <div class="card-header">
                            <a class="card-link collapsed" data-toggle="collapse" href="#collapseSix">
                                Nos Collaborateurs
                            </a>
                        </div>
                        <div id="collapseSix" class="collapse" data-parent="#accordion-2">
                            <div class="card-body">
                                <ul>
                                    <li>Nous nous engageons à mettre à la disposition
                                        de nos collaborateurs un environnement de
                                        travail sain et sûr, favorisant la réalisation optimale des tâches qui leur sont confiées</li>

                                    <li>Nous voulons des collaborateurs enthousiastes
                                        et motivés qui mobilisent leurs compétences
                                        afin de contribuer à l’amélioration de nos processus de mise en œuvre des projets afin d’assurer la pérennité de l’entreprise</li>
                                    <li>Notre culture d’entreprise encourage le respect de la personne et la valorisation du travail
                                        de chacun</li>
                                </ul>
                             </div>
                        </div>
                    </div>
                    <div class="card wow fadeInRight" data-wow-delay="0.2s">
                        <div class="card-header">
                            <a class="card-link collapsed" data-toggle="collapse" href="#collapseSeven">
                                Sécurité
                            </a>
                        </div>
                        <div id="collapseSeven" class="collapse" data-parent="#accordion-2">
                            <div class="card-body">
                               <ul>
                                <li>Nous instruisons nos collaborateurs selon les
                                    normes de sécurité en vigueur et selon le règlement de sécurité interne</li>
                                <li>Nous engageons les moyens de protection collectifs et individuels ainsi que la sécurité des installations, afin de protéger la santé de nos collaborateurs et de nos clients</li>
                                <li>Notre société exige l’exécution des travaux
                                    dans le respect de toutes les normes de sécurité
                                    en vigueur.</li>
                               </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
