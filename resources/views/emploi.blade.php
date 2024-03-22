@extends('layouts.app')

@section('content')

        <!-- Job Section End -->
        <section class="job-style-two job-list-section pt-100 pb-70">
            <div class="container">
                <div class="section-title text-center">
                    <h2>NOS OFFRES D'EMPLOIS</h2>
                <p>Nous sommes déterminés à vous offrir une expérience unique et sans tracas en vous aidant à trouver de
                    l'emploi.</p>
                </div>

                @if (count($offres)==0)
                <div class="row align-items-center">

<center><h2>
    Aucune Offre d'emploi trouvée
</h2></center>
                </div>
                @else
                <div class="row">

                    @foreach ($offres as $offre)
                    <div class="col-lg-12">
                        <div class="job-card-two">
                            <div class="row align-items-center">
                                <div class="col-md-1">
                                    <div class="cmpany-logo">
                                        {{-- <a href="job-details.html"></a> --}}
                                        <img  src={{asset('storage/'.$offre->entreprise->image)}}  alt="logo">
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="job-info">
                                        <h3>
                                            <a href={{route("detailEmploi",$offre->id)}}>{{$offre->libelle}}</a>
                                        </h3>
                                        <ul>
                                            <li>
                                                <i class='bx bx-briefcase' ></i>
                                                {{$offre->secteur->libelle}}
                                            </li>

                                            <li>
                                                <i class='bx bx-location-plus'></i>
                                                {{$offre->adresse}}
                                            </li>
                                            <li>
                                                <i class='bx bx-folder' ></i>
                                                {{$offre->type}}
                                            </li>
                                        </ul>

                                        <span> avant le {{$offre->date_cloture}}</span>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="theme-btn text-end">
                                        <a href={{route("detailEmploi",$offre->id)}} class="default-btn">
                                            voir l'emploi
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    @endforeach

                </div>
                {{$offres->links()}}
                @endif

            </div>
        </section>
        <!-- Job Section End -->



@endsection
