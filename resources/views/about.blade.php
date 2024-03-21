@extends('layouts.app')

@section("content")
        <!-- About Section Start -->
        <section class="about-section ptb-100">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="about-text">
                            <div class="section-title">
                                <h2>NOTRE MISSION</h2>
                            </div>

                            <p>Notre plateforme est un pont entre les talents et les opportunités.</span> <br>
                                Elle est conçue pour faciliter la recherche de compétences spécifiques et pour mettre en relation
                                les candidats avec les entreprises qui ont besoin de ces compétences.</p>

                            <p>orrespondent
                                à leurs compétences et à leurs aspirations. De leur côté, les entreprises peuvent
                                nous contacter pour que nous les aidions à trouver le candidat idéal pour un poste
                                spécifique. Notre objectif est de simplifier le processus de recrutement et de garantir
                                que chaque poste soit pourvu par le candidat le plus compétent. Avec notre logiciel,
                                trouver le bon talent pour le bon poste n'a jamais été aussi facile.</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-img">
                            <img src="assets/img/logo.jpeg" alt="about image">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About Section End -->


		<!-- Début de la section Utilisation -->
		<section class="use-section pt-100 pb-70">
			<div class="container">
				<div class="section-title text-center">
					<h2>La manière la plus simple d'utiliser</h2>
				</div>

				<div class="row">
					<div class="col-lg-4 col-sm-6">
						<div class="use-text">
							<span>1</span>
							<i class='flaticon-website'></i>
							<h3>Parcourir les offres</h3>
							<p>Parcourez les différentes offres d'emploi disponibles sur notre plateforme.</p>
						</div>
					</div>

					<div class="col-lg-4 col-sm-6">
						<div class="use-text">
							<span>2</span>
							<i class='flaticon-recruitment'></i>
							<h3>Trouver votre poste vacant</h3>
							<p>Identifiez le poste qui correspond le mieux à vos compétences et aspirations.</p>
						</div>
					</div>

					<div class="col-lg-4 col-sm-6 offset-sm-3 offset-lg-0">
						<div class="use-text">
							<span>3</span>
							<i class='flaticon-login'></i>
							<h3>Soumettre votre CV</h3>
							<p>Envoyez-nous votre CV pour postuler à l'offre d'emploi choisie.</p>
						</div>
					</div>
				</div>
			</div>
		</section>
        <!-- Fin de la section Utilisation -->

@endsection
