@extends('layouts.app')

@section('content')
    <!-- Début de la section Détails du poste -->
    <section class="job-details ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="job-details-text">
                                <div class="job-card">
                                    <div class="row align-items-center">
                                        <div class="col-md-2">
                                            <div class="company-logo">
                                                <img src={{ '/storage/' . $offre->entreprise->image }} alt="logo">
                                            </div>
                                        </div>
                                        <div class="col-md-10">
                                            <div class="job-info">
                                                <h3>{{ $offre->libelle }}</h3>
                                                <ul>
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

                                                <span>
                                                    <i class='bx bx-paper-plane'></i>
                                                    Postuler avant le : {{ $offre->date_cloture }}
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="details-text">
                                    <h3>Description</h3>
                                    <p> {!! $offre->description !!}</p>
                                </div>

                                <div class="details-text">
                                    <h3>Détails </h3>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <table class="table">
                                                <tbody>
                                                    <tr>
                                                        <td><span>Entreprise &nbsp;&nbsp; </span></td>
                                                        <td>{{ $offre->entreprise->libelle }}</td>
                                                    </tr>
                                                    {{-- <tr>
                                                        <td><span>Localisation&nbsp;&nbsp;</span></td>
                                                        <td>{{ $offre->adresse }}</td>
                                                    </tr> --}}
                                                    <tr>
                                                        <td><span>Type de poste &nbsp;&nbsp;</span></td>
                                                        <td>{{ $offre->type }}</td>
                                                    </tr>

                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="col-md-6">
                                            <table class="table">
                                                <tbody>
                                                    <tr>
                                                        <td><span>Salaire&nbsp;&nbsp;</span></td>
                                                        <td>{{$offre->salaire}} fcfa</td>
                                                    </tr>

                                                    <tr>
                                                        <td><span>Domaine&nbsp;&nbsp;</span></td>
                                                        <td>{{$offre->secteur->libelle}}</td>
                                                    </tr>


                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>

                                <div class="theme-btn">
                                    <a href={{route("candidaterEmploi",$offre->id)}} class="default-btn">
                                        POSTULER
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">


                    <div class="job-sidebar">
                        <h3>Location</h3>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d48871.6798477621!2d-4.02183905909418!3d5.365816100267131!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xfc1ea5311959121%3A0x3fe70ddce19221a6!2sAbidjan!5e0!3m2!1sfr!2sci!4v1710996010596!5m2!1sfr!2sci" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>

                    <div class="job-sidebar social-share">
                        <ul>
                            <h3>Partager l'offre </h3>

                            <li>
                                <a href="#" target="_blank">
                                    <i class="bx bxl-whatsapp"></i>
                                </a>
                            </li>
                            {{-- <li>
                                <a href="#" target="_blank">
                                    <i class="bx bxl-"></i>
                                </a>
                            </li> --}}
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Job Details Section End -->
@endsection
