@extends('base.app')

@section('content')

@include('include.carouselStart')
            <!-- Feature Start-->
            <style>
                .owl-item{
                    width: 100px;
                }
            </style>
            <div class="feature wow fadeInUp" data-wow-delay="0.1s">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-lg-4 col-md-12">
                            <div class="feature-item">
                                <div class="feature-icon">
                                    <i class="flaticon-worker"></i>
                                </div>
                                <div class="feature-text">
                                    <h3>Travailleur Expérimenté</h3>
                                    {{-- <p>Lorem ipsum dolor sit amet elit. Phasus nec pretim ornare velit non</p> --}}
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12">
                            <div class="feature-item">
                                <div class="feature-icon">
                                    <i class="flaticon-building"></i>
                                </div>
                                <div class="feature-text">
                                    <h3>Des Projets De Qualité</h3>
                                    {{-- <p>Lorem ipsum dolor sit amet elit. Phasus nec pretim ornare velit non</p> --}}
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12">
                            <div class="feature-item">
                                <div class="feature-icon">
                                    <i class="flaticon-call"></i>
                                </div>
                                <div class="feature-text">
                                    <h3>24/7 Dispnibilité</h3>
                                    {{-- <p>Lorem ipsum dolor sit amet elit. Phasus nec pretim ornare velit non</p> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Feature End-->


            <!-- About Start -->
            <div class="about wow fadeInUp" data-wow-delay="0.1s">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-5 col-md-6">
                            <div class="about-img">
                                <img src="img/about.jpg" alt="Image">
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-6">
                            <div class="section-header text-left">
                                <p>Bienvenu Chez Ivoire Green Btp</p>
                            </div>
                            <div class="about-text">
                                <p>D’ici 2030, la population ivoirienne sera estimée à environ
                                    30 millions d’habitants. Elle aura besoin de logement et
                                    d’infrastructures durable pour l’exercice des activités professionnelles. C’est un défis énorme qui reposent sur le
                                    secteur du BTP.
                                    La construction est un poids lourd dans le secteur secondaire, lequel représente plus de 23% du PIB. Le secteur du
                                    BTP se démarque par sa capacité à créer des emplois.
                                    Cependant plusieurs défis doivent être relevés.</p>
                                <a class="btn" href="{{ route('about') }}">Lire Plus</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- About End -->


            <!-- Fact Start -->
            <div class="fact">
                <div class="container-fluid">
                    <div class="row counters">
                        <div class="col-md-6 fact-left wow slideInLeft">
                            <div class="row">
                                <div class="col-6">
                                    <div class="fact-icon">
                                        <i class="flaticon-worker"></i>
                                    </div>
                                    <div class="fact-text">
                                        <h2 data-toggle="counter-up">109</h2>
                                        <p>Expert</p>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="fact-icon">
                                        <i class="flaticon-building"></i>
                                    </div>
                                    <div class="fact-text">
                                        <h2 data-toggle="counter-up">485</h2>
                                        <p>Clients Heureux</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 fact-right wow slideInRight">
                            <div class="row">
                                <div class="col-6">
                                    <div class="fact-icon">
                                        <i class="flaticon-address"></i>
                                    </div>
                                    <div class="fact-text">
                                        <h2 data-toggle="counter-up">789</h2>
                                        <p>Projets Terminé</p>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="fact-icon">
                                        <i class="flaticon-crane"></i>
                                    </div>
                                    <div class="fact-text">
                                        <h2 data-toggle="counter-up">890</h2>
                                        <p>Projets En Cours</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Fact End -->


            <!-- Service Start -->
                        <!-- Blog Start -->
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
                                                <a class="btn" href="{{ route('services') }}">+</a>
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
                                                <a class="btn" href="{{ route('services') }}">+</a>
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
                                                <a class="btn" href="{{ route('services') }}">+</a>
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
                                                <a class="btn" href="{{ route('services') }}">+</a>
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
                        <!-- Blog End -->



            <!-- Video Start -->
            <div class="video wow fadeIn" data-wow-delay="0.1s">
                <div class="container">
                    <button type="button" class="btn-play" data-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-target="#videoModal">
                        <span></span>
                    </button>
                </div>
            </div>

            <div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-body">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <!-- 16:9 aspect ratio -->
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe class="embed-responsive-item" src="" id="video"  allowscriptaccess="always" allow="autoplay"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Video End -->


            <!-- Team Start -->
            <div class="team">
                <div class="container">
                    <div class="section-header text-center">
                        <p>Notre Equipe</p>
                        <h2>Rencontrer Nos Experts</h2>
                    </div>
                    <div class="row">
                        <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="team-item">
                                <div class="team-img">
                                    <img src="img/team-1.jpg" alt="Team Image">
                                </div>
                                <div class="team-text">
                                    <h2>Adam Phillips</h2>
                                    <p>CEO & Founder</p>
                                </div>
                                <div class="team-social">
                                    <a class="social-tw" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="social-fb" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="social-li" href=""><i class="fab fa-linkedin-in"></i></a>
                                    <a class="social-in" href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
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
                        <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
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
                        <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
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
            <!-- Team End -->


            <!-- FAQs Start -->
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
            <!-- FAQs End -->


            <!-- Testimonial Start -->
            <div class="testimonial wow fadeIn" data-wow-delay="0.1s">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="testimonial-slider-nav">
                                <div class="slider-nav"><img src="img/testimonial-1.jpg" alt="Testimonial"></div>
                                <div class="slider-nav"><img src="img/testimonial-2.jpg" alt="Testimonial"></div>
                                <div class="slider-nav"><img src="img/testimonial-3.jpg" alt="Testimonial"></div>
                                <div class="slider-nav"><img src="img/testimonial-4.jpg" alt="Testimonial"></div>
                                <div class="slider-nav"><img src="img/testimonial-1.jpg" alt="Testimonial"></div>
                                <div class="slider-nav"><img src="img/testimonial-2.jpg" alt="Testimonial"></div>
                                <div class="slider-nav"><img src="img/testimonial-3.jpg" alt="Testimonial"></div>
                                <div class="slider-nav"><img src="img/testimonial-4.jpg" alt="Testimonial"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="testimonial-slider">
                                <div class="slider-item">
                                    <h3>Customer Name</h3>
                                    <h4>profession</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, viverra quis sem. Curabitur non nisl nec nisi scelerisque maximus.</p>
                                </div>
                                <div class="slider-item">
                                    <h3>Customer Name</h3>
                                    <h4>profession</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, viverra quis sem. Curabitur non nisl nec nisi scelerisque maximus.</p>
                                </div>
                                <div class="slider-item">
                                    <h3>Customer Name</h3>
                                    <h4>profession</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, viverra quis sem. Curabitur non nisl nec nisi scelerisque maximus.</p>
                                </div>
                                <div class="slider-item">
                                    <h3>Customer Name</h3>
                                    <h4>profession</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, viverra quis sem. Curabitur non nisl nec nisi scelerisque maximus.</p>
                                </div>
                                <div class="slider-item">
                                    <h3>Customer Name</h3>
                                    <h4>profession</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, viverra quis sem. Curabitur non nisl nec nisi scelerisque maximus.</p>
                                </div>
                                <div class="slider-item">
                                    <h3>Customer Name</h3>
                                    <h4>profession</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, viverra quis sem. Curabitur non nisl nec nisi scelerisque maximus.</p>
                                </div>
                                <div class="slider-item">
                                    <h3>Customer Name</h3>
                                    <h4>profession</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, viverra quis sem. Curabitur non nisl nec nisi scelerisque maximus.</p>
                                </div>
                                <div class="slider-item">
                                    <h3>Customer Name</h3>
                                    <h4>profession</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, viverra quis sem. Curabitur non nisl nec nisi scelerisque maximus.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Testimonial End -->

            <div class="service">
                <div class="container">
                    <div class="section-header text-center">
                        <p>Projets</p>
                        <h2>GALLERIES</h2>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="service-item">
                                <div class="service-img">
                                    <img src="{{asset('images/projetImage/1.jpeg')}}" alt="Image">
                                    {{-- <div class="service-overlay">
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, viverra quis sem.
                                        </p>
                                    </div> --}}
                                </div>
                                {{-- <div class="service-text">
                                    <h3>Building Construction</h3>
                                    <a class="btn" href="img/service-1.jpg" data-lightbox="service">+</a>
                                </div> --}}
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="service-item">
                                <div class="service-img">
                                    <img src="{{asset('images/projetImage/2.jpeg')}}" alt="Image">
                                    {{-- <div class="service-overlay">
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, viverra quis sem.
                                        </p>
                                    </div> --}}
                                </div>
                                {{-- <div class="service-text">
                                    <h3>Building Construction</h3>
                                    <a class="btn" href="img/service-1.jpg" data-lightbox="service">+</a>
                                </div> --}}
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="service-item">
                                <div class="service-img">
                                    <img src="{{asset('images/projetImage/3.jpeg')}}" alt="Image">
                                    {{-- <div class="service-overlay">
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, viverra quis sem.
                                        </p>
                                    </div> --}}
                                </div>
                                {{-- <div class="service-text">
                                    <h3>Building Construction</h3>
                                    <a class="btn" href="img/service-1.jpg" data-lightbox="service">+</a>
                                </div> --}}
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="service-item">
                                <div class="service-img">
                                    <img src="{{asset('images/projetImage/4.jpeg')}}" alt="Image">
                                    {{-- <div class="service-overlay">
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, viverra quis sem.
                                        </p>
                                    </div> --}}
                                </div>
                                {{-- <div class="service-text">
                                    <h3>Building Construction</h3>
                                    <a class="btn" href="img/service-1.jpg" data-lightbox="service">+</a>
                                </div> --}}
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="service-item">
                                <div class="service-img">
                                    <img src="{{asset('images/projetImage/5.jpeg')}}" alt="Image">
                                    {{-- <div class="service-overlay">
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, viverra quis sem.
                                        </p>
                                    </div> --}}
                                </div>
                                {{-- <div class="service-text">
                                    <h3>Building Construction</h3>
                                    <a class="btn" href="img/service-1.jpg" data-lightbox="service">+</a>
                                </div> --}}
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="service-item">
                                <div class="service-img">
                                    <img src="{{asset('images/projetImage/6.jpeg')}}" alt="Image">
                                    {{-- <div class="service-overlay">
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, viverra quis sem.
                                        </p>
                                    </div> --}}
                                </div>
                                {{-- <div class="service-text">
                                    <h3>Building Construction</h3>
                                    <a class="btn" href="img/service-1.jpg" data-lightbox="service">+</a>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @if (!empty($annonces))
            <div class="single">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="single-related wow fadeInUp">
                                <h2>Annonces Recentes</h2>
                                <div class="owl-carousel related-slider">
                                    @foreach ($annonces as $item)
                                    <div class="post-item">
                                        <div class="post-img">
                                            <img src="{{url('storage/photos_annonce/'.$item->image)}}" />
                                        </div>
                                        <div class="post-text">
                                            <a href="{{route('annonce.detail', $item->id)}}">{{$item->titre}}</a>
                                            <div class="post-meta">
                                                <p><a href="">{{\Carbon\Carbon::parse($item->created_at)->translatedFormat('d F Y')}}</a></p>
                                                {{-- <p>In<a href="">Design</a></p> --}}
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach


                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            @endif

            <!-- Service End -->
            <!-- Blog Start -->
           <!-- <div class="blog">
                <div class="container">
                    <div class="section-header text-center">
                        <p>Latest Blog</p>
                        <h2>Latest From Our Blog</h2>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                            <div class="blog-item">
                                <div class="blog-img">
                                    <img src="img/blog-1.jpg" alt="Image">
                                </div>
                                <div class="blog-title">
                                    <h3>Lorem ipsum dolor sit</h3>
                                    <a class="btn" href="">+</a>
                                </div>
                                <div class="blog-meta">
                                    <p>By<a href="">Admin</a></p>
                                    <p>In<a href="">Construction</a></p>
                                </div>
                                <div class="blog-text">
                                    <p>
                                        Lorem ipsum dolor sit amet elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 wow fadeInUp">
                            <div class="blog-item">
                                <div class="blog-img">
                                    <img src="img/blog-2.jpg" alt="Image">
                                </div>
                                <div class="blog-title">
                                    <h3>Lorem ipsum dolor sit</h3>
                                    <a class="btn" href="">+</a>
                                </div>
                                <div class="blog-meta">
                                    <p>By<a href="">Admin</a></p>
                                    <p>In<a href="">Construction</a></p>
                                </div>
                                <div class="blog-text">
                                    <p>
                                        Lorem ipsum dolor sit amet elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                            <div class="blog-item">
                                <div class="blog-img">
                                    <img src="img/blog-3.jpg" alt="Image">
                                </div>
                                <div class="blog-title">
                                    <h3>Lorem ipsum dolor sit</h3>
                                    <a class="btn" href="">+</a>
                                </div>
                                <div class="blog-meta">
                                    <p>By<a href="">Admin</a></p>
                                    <p>In<a href="">Construction</a></p>
                                </div>
                                <div class="blog-text">
                                    <p>
                                        Lorem ipsum dolor sit amet elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>-->
            <!-- Blog End -->


@endsection
