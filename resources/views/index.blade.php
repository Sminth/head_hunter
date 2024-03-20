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
                                <a href="#" class="default-btn">Voir offres d'emplois CV</a>
                                <a href="contact.html" class="default-btn">Nous Contacter</a>
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
<div class="col-lg-3 col-md-4 col-sm-6">
<a href="job-list.html">
<div class="category-card">
<i class='flaticon-accounting'></i>
<h3>Comptabilité</h3>
<p>3 postes ouverts</p>
</div>
</a>
</div>
<div class="col-lg-3 col-md-4 col-sm-6">
<a href="job-list.html">
<div class="category-card">
<i class='flaticon-graduation-cap'></i>
<h3>Éducation</h3>
<p>2 postes ouverts</p>
</div>
</a>
</div>
<div class="col-lg-3 col-md-4 col-sm-6">
<a href="job-list.html">
<div class="category-card">
<i class='flaticon-wrench-and-screwdriver-in-cross'></i>
<h3>Emplois dans l'automobile</h3>
<p>2 postes ouverts</p>
</div>
</a>
</div>
<div class="col-lg-3 col-md-4 col-sm-6">
<a href="job-list.html">
<div class="category-card">
<i class='flaticon-consultation'></i>
<h3>Affaires</h3>
<p>12 postes ouverts</p>
</div>
</a>
</div>
<div class="col-lg-3 col-md-4 col-sm-6">
<a href="job-list.html">
<div class="category-card">
<i class='flaticon-heart'></i>
<h3>Soins de santé</h3>
<p>3 postes ouverts</p>
</div>
</a>
</div>
<div class="col-lg-3 col-md-4 col-sm-6">
<a href="job-list.html">
<div class="category-card">
<i class='flaticon-computer'></i>
<h3>IT & Agence</h3>
<p>40 postes ouverts</p>
</div>
</a>
</div>
<div class="col-lg-3 col-md-4 col-sm-6 offset-md-2 offset-lg-0">
<a href="job-list.html">
<div class="category-card">
<i class='flaticon-worker'></i>
<h3>Ingénierie</h3>
<p>100 postes ouverts</p>
</div>
</a>
</div>
<div class="col-lg-3 col-md-4 col-sm-6">
<a href="job-list.html">
<div class="category-card">
<i class='flaticon-auction'></i>
<h3>Juridique</h3>
<p>201 postes ouverts</p>
</div>
</a>
</div>
</div>
</div>
</section>
<!-- Fin de la section Catégorie -->

<!-- Jobs Section Start -->
<section class="job-section pb-70">
<div class="container">
<div class="section-title text-center">
<h2>LES OFFRES</h2>
<p>Nous sommes déterminés à vous offrir une expérience unique et sans tracas en vous aidant à trouver de l'emploi.</p>
</div>

<div class="row">
<div class="col-sm-6">
<div class="job-card">
<div class="row align-items-center">
<div class="col-lg-3">
<div class="thumb-img">
<a href="job-details.html">
<img src="data:image/jpeg;base64,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" alt="company logo">
</a>
</div>
</div>

<div class="col-lg-6">
<div class="job-info">
<h3>
<a href="job-details.html">Administrateur Système</a>
</h3>
<ul>
<li>Salaire <a href="#"> <ins>$300 / mois</ins></a></li>
<li>
<i class='bx bx-location-plus'></i>
    Abidjan, Cocody
</li>
<li>
<i class='bx bx-filter-alt' ></i>
    Informatique
</li>
<li>
<i class='bx bx-briefcase' ></i>
Freelance
</li>
</ul>
</div>
</div>

<div class="col-lg-3">
<div class="job-save">
<span>Temps de travail</span>
<a href="#">
<i class='bx bx-heart'></i>
</a>
<p>
<i class='bx bx-stopwatch' ></i>
1h/jour
</p>
</div>
</div>
</div>
</div>
</div>
<div class="col-sm-6">
                    <div class="job-card">
                        <div class="row align-items-center">
                            <div class="col-lg-3">
                                <div class="thumb-img">
                                    <a href="job-details.html">
                                        <img src="assets/img/company-logo/Stitre.jpeg" alt="company logo">
                                    </a>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="job-info">
                                    <h3>
                                        <a href="job-details.html">dentiste</a>
                                    </h3>
                                    <ul>
                                        <li>Salaire <a href="#"> <ins>$100/mois</ins></a></li>
                                        <li>
                                            <i class='bx bx-location-plus'></i>
                                            Abidjan, Cocody
                                        </li>
                                        <li>
                                            <i class='bx bx-filter-alt' ></i>
                                            Santé
                                        </li>
                                        <li>
                                            <i class='bx bx-briefcase' ></i>
                                            Presentiel
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-lg-3">
                                <div class="job-save">
                                <span>Temps de travail</span>
                                <a href="#">
                                <i class='bx bx-heart'></i>
                                </a>
                                <p>
                                <i class='bx bx-stopwatch' ></i>
                                5h/jour
                                </p>
                                </div>
                                </div>
                                </div>
                                </div>
                                </div>

                <div class="col-sm-6">
                    <div class="job-card">
                        <div class="row align-items-center">
                            <div class="col-lg-3">
                                <div class="thumb-img">
                                    <a href="job-details.html">
                                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT-E4ims6cHjT7XzUqoKVPnBiRcNm8s1i_O5A&usqp=CAU" alt="company logo">
                                    </a>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="job-info">
                                    <h3>
                                        <a href="job-details.html">Graphiste Designer</a>
                                    </h3>
                                    <ul>
                                        <li>Salaire <a href="#"> <ins>$200/mois</ins></a></li>
                                        <li>
                                            <i class='bx bx-location-plus'></i>
                                            Abidjan, Cocody
                                        </li>
                                        <li>
                                            <i class='bx bx-filter-alt' ></i>
                                            Informatique
                                        </li>
                                        <li>
                                            <i class='bx bx-briefcase' ></i>
                                            Presentiel
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-3">
                            <div class="job-save">
                            <span>Temps de travail</span>
                            <a href="#">
                            <i class='bx bx-heart'></i>
                            </a>
                            <p>
                            <i class='bx bx-stopwatch' ></i>
                            4h/jour
                            </p>
                            </div>
                            </div>
                            </div>
                            </div>
                            </div>

                <div class="col-sm-6">
                    <div class="job-card">
                        <div class="row align-items-center">
                            <div class="col-lg-3">
                                <div class="thumb-img">
                                    <a href="job-details.html">
                                        <img src="data:image/jpeg;base64,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" alt="company logo">
                                    </a>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="job-info">
                                    <h3>
                                        <a href="job-details.html">Logisticien</a>
                                    </h3>
                                    <ul>
                                        <li>Salaire <a href="#"> <ins>$90/mois</ins></a></li>
                                        <li>
                                            <i class='bx bx-location-plus'></i>
                                            Abidjan, BIngerville
                                        </li>
                                        <li>
                                            <i class='bx bx-filter-alt' ></i>
                                            Transport
                                        </li>
                                        <li>
                                            <i class='bx bx-briefcase' ></i>
                                            Presentiel
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-3">
                            <div class="job-save">
                            <span>Temps de travail</span>
                            <a href="#">
                            <i class='bx bx-heart'></i>
                            </a>
                            <p>
                            <i class='bx bx-stopwatch' ></i>
                            2h/jour
                            </p>
                            </div>
                            </div>
                            </div>
                            </div>
                            </div>


                <div class="col-sm-6">
                    <div class="job-card">
                        <div class="row align-items-center">
                            <div class="col-lg-3">
                                <div class="thumb-img">
                                    <a href="job-details.html">
                                        <img src="data:image/jpeg;base64,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" alt="company logo">
                                    </a>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="job-info">
                                    <h3>
                                        <a href="job-details.html">Généraliste</a>
                                    </h3>
                                    <ul>
                                        <li>Salaire <a href="#"> <ins>$200/mois</ins></a></li>
                                        <li>
                                            <i class='bx bx-location-plus'></i>
                                            Abidjan, Marcory
                                        </li>
                                        <li>
                                            <i class='bx bx-filter-alt' ></i>
                                            Santé
                                        </li>
                                        <li>
                                            <i class='bx bx-briefcase' ></i>
                                            Presentiel
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-lg-3">
                                <div class="job-save">
                                <span>Temps de travail</span>
                                <a href="#">
                                <i class='bx bx-heart'></i>
                                </a>
                                <p>
                                <i class='bx bx-stopwatch' ></i>
                                1h/jour
                                </p>
                                </div>
                                </div>
                                </div>
                                </div>
                                </div>

                <div class="col-sm-6">
                    <div class="job-card">
                        <div class="row align-items-center">
                            <div class="col-lg-3">
                                <div class="thumb-img">
                                    <a href="job-details.html">
                                        <img src="data:image/jpeg;base64,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" alt="company logo">
                                    </a>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="job-info">
                                    <h3>
                                        <a href="job-details.html">Electromécanicien</a>
                                    </h3>
                                    <ul>
                                        <li>Salaire <a href="#"> <ins>$200/mois</ins></a></li>
                                        <li>
                                            <i class='bx bx-location-plus'></i>
                                            Abidjan, Treichville
                                        </li>
                                        <li>
                                            <i class='bx bx-filter-alt' ></i>
                                            Mecanique
                                        </li>
                                        <li>
                                            <i class='bx bx-briefcase' ></i>
                                            Presentiel
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-3">
                            <div class="job-save">
                            <span>Temps de travail</span>
                            <a href="#">
                            <i class='bx bx-heart'></i>
                            </a>
                            <p>
                            <i class='bx bx-stopwatch' ></i>
                            1h/jour
                            </p>
                            </div>
                            </div>
                            </div>
                            </div>
                            </div>
    </section>
    <!-- Jobs Section End -->


    <!-- Companies Section Start -->
    <section class="company-section pt-100 pb-70">
        <div class="container">
            <div class="section-title text-center">
                <h2>Entreprises Fares</h2>
                <p> Nous sommes déterminés à vous offrir une expérience unique et sans tracas en vous aidant à trouver des candidats competents pour vos entreprises.</p>
            </div>

            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="company-card">
                        <div class="company-logo">
                            <a href="job-grid.html">
                                <img src="data:image/png;base64,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" alt="company logo">
                            </a>
                        </div>
                        <div class="company-text">
                            <h3>MOOV AFrica</h3>
                            <p>
                                <i class='bx bx-location-plus'></i>
                                Abidjan, Cote d'ivoire
                            </p>
                            <a href="job-grid.html" class="company-btn">
                                25 Offres validées
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="company-card">
                        <div class="company-logo">
                            <a href="job-grid.html">
                                <img src="data:image/png;base64,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" alt="company logo">
                            </a>
                        </div>
                        <div class="company-text">
                            <h3>Orange CI</h3>
                                <p>
                                    <i class='bx bx-location-plus'></i>
                                    Abidjan, Cote d'ivoire
                                </p>
                                <a href="job-grid.html" class="company-btn">
                                    25 Offres validées
                                </a>
                            </div>
                        </div>
                    </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="company-card">
                        <div class="company-logo">
                            <a href="job-grid.html">
                                <img src="data:image/png;base64,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" alt="company logo">
                            </a>
                        </div>
                        <div class="company-text">
                            <h3>CEPICI</h3>
                            <p>
                                <i class='bx bx-location-plus'></i>
                                Abidjan, Treichville
                            </p>
                            <a href="job-grid.html" class="company-btn">
                                20 Offres valisées
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="company-card">
                        <div class="company-logo">
                            <a href="job-grid.html">
                                <img src="data:image/jpeg;base64,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" alt="company logo">
                            </a>
                        </div>
                        <div class="company-text">
                            <h3>BCAO bank</h3>
                            <p>
                                <i class='bx bx-location-plus'></i>
                                Abidjan, Cocody
                            </p>
                            <a href="job-grid.html" class="company-btn">
                                45 Offres valisées
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Companies Section End -->


    <!-- Pricing Section Start -->
    <section class="pricing-section pb-70">
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
    </section>
    <!-- Pricing Section End -->

@endsection
