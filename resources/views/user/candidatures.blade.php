@extends('layouts.app')

@section('content')


<!-- Account Area Start -->
       <section class="account-section ptb-100">

            <div class="container">
                <div class="row">
                   @include("layouts.sidebar")

                    <div class="col-md-8">
                        <div class="account-details">
                            <h3>Candidatures</h3>
                            <p>Liste des offres d'emplois pour lesquelles vous avez candidater</p>
                            <br>
                          <div>
                            @foreach($user->candidatures as $cand)


                            <div class="col-sm-12">
                                <div class="job-card">
                                    <div class="row align-items-center">
                                        <div class="col-lg-3">
                                            <div class="thumb-ig">
                                                {{-- <a href="job-details.html"> --}}
                                                <img src={{ 'storage/' . $cand->offre->entreprise->image }} alt="logo">
                                                {{-- </a> --}}
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="job-info">
                                                <h3>
                                                    <a href={{ route('detailEmploi', $cand->offre->id) }}>{{ $cand->offre->libelle }}</a>
                                                </h3>
                                                <ul>
                                                    @if ($cand->offre->salaire)
                                                        <li>Salaire <a href="#"> <ins>{{ $cand->offre->salaire }} fcfa/
                                                                    mois</ins></a></li>
                                                    @endif
                                                    <li>
                                                        <i class='bx bx-location-plus'></i>
                                                        {{ $cand->offre->adresse }}
                                                    </li>
                                                    <li>
                                                        <i class='bx bx-filter-alt'></i>
                                                        {{ $cand->offre->secteur->libelle }}
                                                    </li>
                                                    <li>
                                                        <i class='bx bx-briefcase'></i>
                                                        {{ $cand->offre->type }}
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>

                                        <div class="col-lg-3">
                                            <div class="job-save">
                                                {{-- <a href={{ route('detailEmploi', $cand->offre->id) }}> <span>Voir</span></a> --}}
                                                {{-- <a href="#">
                                                <i class='bx bx-heart'></i>
                                            </a>--}}
                                            {{-- @dd($cand) --}}
                                            @if ($cand->status=="test")
                                            <a href={{ route('user.test', $cand->id) }}> <span>Passer le test</span></a>
                            <p style="color: blue">reserver 10 minutes pour ce test </p>

                                            @elseif ($cand->status=="analyse")
                                            <p class="" style="color:red;font-size:15px">
                                                <i  class=' bx bx-stopwatch'></i>
                                                votre dossier est en cours d'analyse
                                            </p>
                                            @endif

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                          @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Account Area End -->


@endsection
