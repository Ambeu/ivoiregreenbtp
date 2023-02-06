@extends('base.app')

@section('content')
<div class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>Projets Réaliser</h2>
            </div>
            <div class="col-12">
                <a href="{{route('home')}}">Accueil</a>
                <a href="{{route('projets')}}">Nos Projets</a>
            </div>
        </div>
    </div>
</div>

<div class="portfolio">
    <div class="container">
        <div class="section-header text-center">
            {{-- <p>Our Projects</p>
            <h2>Visit Our Projects</h2> --}}
        </div>
        <div class="row">
            <div class="col-12">
                <ul id="portfolio-flters">
                    <li data-filter="*" class="filter-active">Tous</li>
                    <li data-filter=".first">Terminer</li>
                    <li data-filter=".second">En cours</li>
                    {{-- <li data-filter=".third">Upcoming</li> --}}
                </ul>
            </div>
        </div>
        <div class="row portfolio-container" style="position: relative; height: 705px;">
            <div class="col-lg-4 col-md-6 col-sm-12 portfolio-item first wow fadeInUp" data-wow-delay="0.1s" style="position: absolute; left: 0px; top: 0px; visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                <div class="portfolio-warp">
                    <div class="portfolio-img">
                        <img src="img/portfolio-1.jpg" alt="Image">
                        {{-- <div class="portfolio-overlay">
                            <p>
                                Lorem ipsum dolor sit amet elit. Phasel nec pretium mi. Curabit facilis ornare velit non. Aliqu metus tortor, auctor id gravi condime, viverra quis sem.
                            </p>
                        </div> --}}
                    </div>
                    <div class="portfolio-text">
                        <h3>Project Name</h3>
                        <a class="btn" href="img/portfolio-1.jpg" data-lightbox="portfolio">+</a>
                        <a class="btn d-none" href="img/portfolio-2.jpg" data-lightbox="portfolio">+</a>
                        <a class="btn d-none" href="img/portfolio-2.jpg" data-lightbox="portfolio">+</a>
                        <a class="btn d-none" href="img/portfolio-2.jpg" data-lightbox="portfolio">+</a>
                        <a class="btn d-none" href="img/portfolio-2.jpg" data-lightbox="portfolio">+</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 portfolio-item second wow fadeInUp" data-wow-delay="0.2s" style="position: absolute; left: 380px; top: 0px; visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                <div class="portfolio-warp">
                    <div class="portfolio-img">
                        <img src="img/portfolio-2.jpg" alt="Image">
                        {{-- <div class="portfolio-overlay">
                            <p>
                                Lorem ipsum dolor sit amet elit. Phasel nec pretium mi. Curabit facilis ornare velit non. Aliqu metus tortor, auctor id gravi condime, viverra quis sem.
                            </p>
                        </div> --}}
                    </div>
                    <div class="portfolio-text">
                        <h3>Project Name</h3>
                        <a class="btn" href="img/portfolio-2.jpg" data-lightbox="portfolio">+</a>
                        <a class="btn d-none" href="img/portfolio-2.jpg" data-lightbox="portfolio">+</a>
                        <a class="btn d-none" href="img/portfolio-2.jpg" data-lightbox="portfolio">+</a>
                        <a class="btn d-none" href="img/portfolio-2.jpg" data-lightbox="portfolio">+</a>
                        <a class="btn d-none" href="img/portfolio-2.jpg" data-lightbox="portfolio">+</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 portfolio-item third wow fadeInUp" data-wow-delay="0.3s" style="position: absolute; left: 760px; top: 0px; visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                <div class="portfolio-warp">
                    <div class="portfolio-img">
                        <img src="img/portfolio-3.jpg" alt="Image">
                        {{-- <div class="portfolio-overlay">
                            <p>
                                Lorem ipsum dolor sit amet elit. Phasel nec pretium mi. Curabit facilis ornare velit non. Aliqu metus tortor, auctor id gravi condime, viverra quis sem.
                            </p>
                        </div> --}}
                    </div>
                    <div class="portfolio-text">
                        <h3>Project Name</h3>
                        <a class="btn" href="img/portfolio-3.jpg" data-lightbox="portfolio">+</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 portfolio-item first wow fadeInUp" data-wow-delay="0.4s" style="position: absolute; left: 0px; top: 352px; visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
                <div class="portfolio-warp">
                    <div class="portfolio-img">
                        <img src="img/portfolio-4.jpg" alt="Image">
                        {{-- <div class="portfolio-overlay">
                            <p>
                                Lorem ipsum dolor sit amet elit. Phasel nec pretium mi. Curabit facilis ornare velit non. Aliqu metus tortor, auctor id gravi condime, viverra quis sem.
                            </p>
                        </div> --}}
                    </div>
                    <div class="portfolio-text">
                        <h3>Project Name</h3>
                        <a class="btn" href="img/portfolio-4.jpg" data-lightbox="portfolio">+</a>
                        <a class="btn d-none" href="img/portfolio-2.jpg" data-lightbox="portfolio">+</a>
                        <a class="btn d-none" href="img/portfolio-2.jpg" data-lightbox="portfolio">+</a>
                        <a class="btn d-none" href="img/portfolio-2.jpg" data-lightbox="portfolio">+</a>
                        <a class="btn d-none" href="img/portfolio-2.jpg" data-lightbox="portfolio">+</a>
                    </div>
                </div>
            </div>
            {{-- <div class="col-lg-4 col-md-6 col-sm-12 portfolio-item second wow fadeInUp" data-wow-delay="0.5s" style="position: absolute; left: 380px; top: 352px; visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
                <div class="portfolio-warp">
                    <div class="portfolio-img">
                        <img src="img/portfolio-5.jpg" alt="Image">
                        <div class="portfolio-overlay">
                            <p>
                                Lorem ipsum dolor sit amet elit. Phasel nec pretium mi. Curabit facilis ornare velit non. Aliqu metus tortor, auctor id gravi condime, viverra quis sem.
                            </p>
                        </div>
                    </div>
                    <div class="portfolio-text">
                        <h3>Project Name</h3>
                        <a class="btn" href="img/portfolio-5.jpg" data-lightbox="portfolio">+</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 portfolio-item third wow fadeInUp" data-wow-delay="0.6s" style="position: absolute; left: 760px; top: 352px; visibility: visible; animation-delay: 0.6s; animation-name: fadeInUp;">
                <div class="portfolio-warp">
                    <div class="portfolio-img">
                        <img src="img/portfolio-6.jpg" alt="Image">
                        <div class="portfolio-overlay">
                            <p>
                                Lorem ipsum dolor sit amet elit. Phasel nec pretium mi. Curabit facilis ornare velit non. Aliqu metus tortor, auctor id gravi condime, viverra quis sem.
                            </p>
                        </div>
                    </div>
                    <div class="portfolio-text">
                        <h3>Project Name</h3>
                        <a class="btn" href="img/portfolio-6.jpg" data-lightbox="portfolio">+</a>
                        <a class="btn d-none" href="img/portfolio-2.jpg" data-lightbox="portfolio">+</a>
                        <a class="btn d-none" href="img/portfolio-2.jpg" data-lightbox="portfolio">+</a>
                        <a class="btn d-none" href="img/portfolio-2.jpg" data-lightbox="portfolio">+</a>
                        <a class="btn d-none" href="img/portfolio-2.jpg" data-lightbox="portfolio">+</a>
                    </div>
                </div>
            </div> --}}
        </div>
        {{-- <div class="row">
            <div class="col-12 load-more">
                <a class="btn" href="#">Load More</a>
            </div>
        </div> --}}
    </div>
</div>

@endsection
