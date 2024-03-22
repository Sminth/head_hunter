@extends('layouts.app')

@section('content')
<section class="page-title title-bg8">
    <div class="d-table">
        <div class="d-table-cell">
            <h2>{{$offre->libelle}}</h2>
            <h3 style="color: white">ci dessous la liste des candidatures pour cette offre</h3>
            {{-- <ul>
                <li>
                    <a href="index.html">Home</a>
                </li>
                <li>Candidates Details</li>
            </ul> --}}
        </div>
    </div>
    <div class="lines">
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
    </div>
</section>
</section>
        <!-- Candidates Section Start -->
        <section class="candidate-style-two pt-100 pb-70">
            <div class="container">
                <div class="row">
                  @foreach ($cand as $candidature)
                  <div class="col-lg-3 col-sm-6">
                    <div class="candidate-card">
                        <div class="candidate-img">
                            <img src="{{asset('assets/img/candidate/1.jpg')}}" alt="candidate image">
                        </div>
                        <div class="candidate-text">
                            <h3>
                                <a href="candidate-details.html">{{$candidature->candidat->noms}}</a>
                            </h3>
                            <ul>
                                <li>
                                    {{$candidature->candidat->profession}}
                                </li>
                            </ul>
                        </div>

                        <div class="candidate-social">
                            @if ($candidature->status=="test")
                            <p style="color: blue">resultat test : </p>
                            @endif
                            <div class="theme-btn">
                                @if ($candidature->status=="analyse")
                                <a href="/accepter/{{$candidature->id}}" class="default-btn">Accepter</a>
                                @elseif ($candidature->status=="test")
                                <a href="ff" class="default-btn">Recruiter</a>

                                @endif
                            </div>
                        </div>
                    </div>
                </div>

                  @endforeach
                </div>
            </div>
        </section>
        <!-- Candidates Section End -->
@endsection
