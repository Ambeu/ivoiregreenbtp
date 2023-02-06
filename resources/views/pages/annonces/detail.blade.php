@extends('base.app')

@section('content')
<div class="single">
    <div class="container">
        <div class="row">

            <div class="col-lg-8">
                <div class="single-content wow fadeInUp">
                    <img src="{{url('storage/photos_annonce/'.$annonce->image)}}" />
                    <h2>{{$annonce->titre}}</h2>
                    <br>
                    <div class="sidebar-widget" >
                        <h5 class="widget-title">Coordonnées</h5>
                        <div class="category-widget">
                            <ul>
                                <li>Adresse :   <span>{{$annonce->lieu}}</span></li>
                                <li>Ville :   <span>{{$annonce->ville}}</span></li>
                                <li>Contact :   <span>{{$annonce->contact2}}</span></li>
                                {{-- <li>Politics :   <span>(65)</span></li>
                                <li>Lifestyle :   <span>(54)</span></li>
                                <li>Technology :   <span>(43)</span></li>
                                <li>Trades :   <span>(32)</span></li> --}}
                            </ul>
                        </div>
                    </div>
                    <hr>
                    <p>
                        {{$annonce->description}}
                    </p>

                    @if (!empty($galleries))


                    <div class="team card">
                        <div class="container">
                            <div class="row">
                                @foreach ($galleries as $gallerie)
                                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                                    <div class="team-item">
                                        <div class="team-img">
                                            <img src="{{url('storage/additional_photos/'.$gallerie->filename)}}" alt="Team Image" width="500px" height="300px">
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>


                    @endif

                </div>
            </div>
            <div class="col-lg-4">
                <div class="sidebar">
                    <div class="sidebar-widget wow fadeInUp">
                        <h2 class="widget-title">Plus d'Annonces</h2>
                        <div class="recent-post">
                            @foreach ($annonces as $annonce)
                            <div class="post-item">
                                <div class="post-img">
                                    <img src="{{url('storage/photos_annonce/'.$annonce->image)}}" />
                                </div>
                                <div class="post-text">
                                    <a href="{{route('annonce.detail', $annonce->id)}}">{{$annonce->titre}}</a>
                                    <div class="post-meta">
                                        <p><a href="">{{\Carbon\Carbon::parse($annonce->created_at)->translatedFormat('d F Y')}}</a></p>
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
</div>
@endsection
