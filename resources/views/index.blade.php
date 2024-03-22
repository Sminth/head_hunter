@extends('layouts.app')


@section('content')
    <!-- Banner Section Start -->
    <div class="banner-style-two">
        <div class="banner-section">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container">
                        <div class="banner-text">

                            <span>HEAD_HUNTER..</span>
                            <h1>HEAD_HUNTER FOR COMPANY</h1>
                            <p>Head Hunder, votre partenaire de confiance dans le monde professionnel.</p>

                            <div class="theme-btn">
                                <a href="/emplois" class="default-btn">Voir les offres d'emplois</a>
                                <a href="/contact" class="default-btn">Nous Contacter</a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="banner-img">
                <img src="assets/img/banner/samtof.png" alt="banner image">
            </div>
        </div>
    </div>
    <!-- Banner Section End -->


    <!-- Category Section Start -->
    <section class="categories-section pt-100 pb-70">
        <div class="container">
            <div class="section-title text-center">
                <h2>Nos Secteurs d'activités</h2>
                <p>Qu'est-ce que tu cherches?</p>
            </div>
            <div class="row">
                @foreach ($secteurs as $secteur)
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <a href={{"/emplois/?idsecteur=".$secteur->id}} >
                            <div class="category-card">
                                <i class='flaticon-computer'></i>
                                <h3>{{ $secteur->libelle }}</h3>
                                <p>{{count($secteur->offres)}} postes ouverts</p>
                            </div>
                        </a>
                    </div>
                @endforeach

            </div>
        </div>
    </section>
    <!-- Fin de la section Catégorie -->

    <!-- Jobs Section Start -->
    <section class="job-section pb-70">
        <div class="container">
            <div class="section-title text-center">
                <h2>NOS OFFRES D'EMPLOIS</h2>
                <p>Nous sommes déterminés à vous offrir une expérience unique et sans tracas en vous aidant à trouver de
                    l'emploi.</p>
            </div>

            <div class="row">
                @foreach ($offres as $offre)
                    <div class="col-sm-6">
                        <div class="job-card">
                            <div class="row align-items-center">
                                <div class="col-lg-3">
                                    <div class="thumb-ig">
                                        {{-- <a href="job-details.html"> --}}
                                        <img src={{ 'storage/' . $offre->entreprise->image }} alt="logo">
                                        {{-- </a> --}}
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="job-info">
                                        <h3>
                                            <a href={{ route('detailEmploi', $offre->id) }}>{{ $offre->libelle }}</a>
                                        </h3>
                                        <ul>
                                            @if ($offre->salaire)
                                                <li>Salaire <a href="#"> <ins>{{ $offre->salaire }} fcfa/
                                                            mois</ins></a></li>
                                            @endif
                                            <li>
                                                <i class='bx bx-location-plus'></i>
                                                {{ $offre->adresse }}
                                            </li>
                                            <li>
                                                <i class='bx bx-filter-alt'></i>
                                                {{ $offre->secteur->libelle }}
                                            </li>
                                            <li>
                                                <i class='bx bx-briefcase'></i>
                                                {{ $offre->type }}
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="col-lg-3">
                                    <div class="job-save">
                                        <a href={{ route('detailEmploi', $offre->id) }}> <span>Voir</span></a>
                                        {{-- <a href="#">
                                        <i class='bx bx-heart'></i>
                                    </a>
                                    <p>
                                        <i class='bx bx-stopwatch'></i>
                                        1h/jour
                                    </p> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <center>
                <div class="theme-btn">
                    <a href="/emplois" class="default-btn">Voir toutes les offres d'emplois</a>
                </div>
            </center>

    </section>
    <!-- Jobs Section End -->


    <!-- Companies Section Start -->
    <section class="company-section pt-100 pb-70">
        <div class="container">
            <div class="section-title text-center">
                <h2>Ils nous font confiances </h2>
                <p> Nous sommes déterminés à vous offrir une expérience unique et sans tracas en vous aidant à trouver des
                    candidats competents pour vos entreprises.</p>
            </div>

            <div class="row">
                @foreach ($entreprises as $entreprise)
                    <div class="col-lg-3 col-sm-6">
                        <div class="company-card">
                            <div class="company-logo">
                                <a href={{"/emplois/?identreprise=".$entreprise->id}} >
                                    <img src={{ 'storage/' . $entreprise->image }} alt="company logo">
                                </a>
                            </div>
                            <div class="company-text">
                                <h3>{{ $entreprise->libelle }}</h3>
                                <p>
                                    <i class='bx bx-location-plus'></i>
                                    {{ $entreprise->adresse }}
                                </p>
                                <a href={{"/emplois/?identreprise=".$entreprise->id}} class="company-btn">
                                    {{count($entreprise->offres)}} Offres validées
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- Companies Section End -->


    <!-- Pricing Section Start -->
    {{-- <section class="pricing-section pb-70">
        <div class="container">
            <div class="section-title text-center">
                <h2>Abonnement Client</h2>
                <p>Nous sommes déterminés à vous offrir une expérience unique et sans tracas en vous aidant à trouver un emploi dans une bonne entreprise.</p>
            </div>

            <div class="row">
                <div class="col-lg-4 col-sm-6">
                    <div class="price-card">
                        <div class="price-top">
                            <h3>Standard</h3>
                            <i class='bx bx-user'></i>
                            <h2>2<sub>/semaine </sub></h2>
                        </div>

                        <div class="price-feature">
                            <ul><ul>
                                <li>
                                    <i class='bx bx-check'></i>
                                    Recherche
                                </li>
                                <li>
                                    <i class='bx bx-check'></i>
                                    <strong>Evaluation</strong>
                                </li>
                                <li>
                                    <i class='bx bx-check'></i>
                                    placement
                                </li>
                                <li>
                                    <i class='bx bx-check'></i>
                                    Integration
                                </li>
                            </ul>
                        </div>
                        <div class="price-btn">
                            <a href="contact.html">Contacter</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6">
                    <div class="price-card mt-12">
                        <div class="price-top">
                            <h3>Premium</h3>
                            <i class='bx bx-user'></i>
                            <h2>5<sub>/mois</sub></h2>
                        </div><div class="price-feature">
                            <ul><ul>
                                <li>
                                    <i class='bx bx-check'></i>
                                    Recherche
                                </li>
                                <li>
                                    <i class='bx bx-check'></i>
                                    <strong>Evaluation</strong>
                                </li>
                                <li>
                                    <i class='bx bx-check'></i>
                                    placement
                                </li>
                                <li>
                                    <i class='bx bx-check'></i>
                                    Integration
                                </li>
                            </ul>
                        </div>
                        <div class="price-btn">
                            <a href="contact.html">Contacter</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6 offset-sm-3 offset-lg-0">
                    <div class="price-card">
                        <div class="price-top">
                            <h3>Ultra</h3>
                            <i class='bx bx-user'></i>
                            <h2>3<sub>/Mois</sub></h2>
                        </div><div class="price-feature">
                            <ul><ul>
                                <li>
                                    <i class='bx bx-check'></i>
                                    Recherche
                                </li>
                                <li>
                                    <i class='bx bx-check'></i>
                                    <strong>Evaluation</strong>
                                </li>
                                <li>
                                    <i class='bx bx-check'></i>
                                    placement
                                </li>
                                <li>
                                    <i class='bx bx-check'></i>
                                    Integration
                                </li>
                            </ul>
                        </div>
                        <div class="price-btn">
                            <a href="contact.html">Contacter</a>
                        </div>
                    </div>
                </div>
    </section> --}}
    <!-- Pricing Section End -->
@endsection
