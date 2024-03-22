@extends('layouts.app')

@section('content')


<!-- Account Area Start -->
       <section class="account-section ptb-100">

            <div class="container">
                <div class="row">
                   @include("layouts.sidebar")

                    <div class="col-md-8">
                        <div class="account-details">
                            <h3>Information Personnel</h3>
                            <form class="basic-info">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Noms complet</label>
                                            <input readonly type="text" class="form-control" placeholder="" value={{$user->noms}}>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Profession</label>
                                            <input readonly type="text" class="form-control" placeholder="" value={{$user->profession}}>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input readonly type="text" class="form-control" placeholder="" value={{$user->email}}>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Contact</label>
                                            <input readonly type="text" class="form-control" placeholder="" value={{$user->contact}}>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Date de naissance</label>
                                            <input readonly type="text" class="form-control" placeholder="" value={{date_format(date_create($user->date_naissance),"d/m/Y")}}>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Lieu de naissance</label>
                                            <input readonly type="text" class="form-control" placeholder="" value={{$user->lieu_naissance}}>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Genre</label>
                                            <input readonly type="text" class="form-control" placeholder="" value={{$user->genre}}>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Situation Matrimoniale</label>
                                            <input readonly type="text" class="form-control" placeholder="" value={{$user->sm}}>
                                        </div>
                                    </div>
                                    {{-- <div class="col-md-12">
                                        <button type="submit" class="account-btn">Edit</button>
                                        <button type="submit" class="account-btn">Save</button>
                                    </div> --}}
                                </div>
                            </form>

                            <h3>Education</h3>
                            <form class="-candidate-address">
                                @foreach($user->educations as $edu)
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Diplome ou autre</label>
                                            <input type="text" class="form-control" readonly value={{$edu->diplome}}>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Année Scolaire</label>
                                            <input type="text" class="form-control" readonly value={{$edu->annee}}>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Etablissement</label>
                                            <input type="text" class="form-control" readonly value={{$edu->etablissement}}>
                                        </div>
                                    </div>


                                </div>
                                @endforeach
                            </form>

                            <h3>Experience</h3>
                            <form class="-candidate-address">
                                @foreach($user->experiences as $edu)
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Intitulé du poste</label>
                                            <input type="text" class="form-control" readonly value={{$edu->libelle}}>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Durée</label>
                                            <input type="text" class="form-control" readonly value={{$edu->duree}}>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Entreprise</label>
                                            <input type="text" class="form-control" readonly value={{$edu->entreprise}}>
                                        </div>
                                    </div>


                                </div>
                                @endforeach
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Account Area End -->


@endsection
