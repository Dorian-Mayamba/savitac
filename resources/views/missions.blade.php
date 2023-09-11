@extends('layouts.app')

@section('content')
<section class="container carousel-block">
    <div class="jumbotron" id="mission-banner">

    </div>
	<div class="mx-3 row slick-slider">
		<div class="col-md-8">
			<h2 class="text-center text-green"><small>Qualité</small></h2>
			<p>
				Conception, mise en œuvre et suivi des outils de la Qualité.
				Réalisation des audits internes.
				Réorganisation des processus.
				Rédaction du Manuel Qualité.
				Rédaction des Procédures Rédaction des Documents Qualité

				Réalisation des Enquêtes satisfaction clients.
				Conception et mise en œuvre d’une démarche Qualité.
				Revues de Processus et de Direction.
				Formation aux outils de la Qualité.

				Démarche d’amélioration continue selon ISO 9001,  PDCA, AMDEC, 5M…
				Qualité ( ISO 9001 version 2015)
				Environnement (ISO 14001 version 2015)

				Santé et Sécurité au travail (OHSAS 18001 version 2007 et ISO 45001 version 2018

				Intégré Qualité, Sécurité, Environnement (QSE version 2015 et 2018)
			</p>
		</div>

		<div class="col-md-8">
			<h2 class="text-center text-green"><small>Sécurité</small></h2>
			<p>
				Document unique d’évaluation des risques professionnels(DUERP)

				Plan Particulier de Sécurité et de Protection de la Santé (PPSPS)

				Etudes de sûreté et de sécurité publique (ESSP)

				Spécifications et prescriptions techniques et fonctionnelles

				Plan de prévention et prescriptions HSE,
			</p>
		</div>

		<div class="col-md-8">
			<h2 class="text-center text-green"><small>Affaire</small></h2>
			<p class="text-center">
				Impacts & Dangers environnementaux

				Tests en situation d’urgence

				Gestion des déchets
			</p>
		</div>

		<div class="col-md-8">
			<h2 class="text-center text-green"><small>Incidents / Accidents environnementaux</small></h2>
			<p>
				Incidents / Accidents environnementaux

				Tests en situation d’urgence

				Visites de sécurité

				Plans de Prévention et d’évacuation

				Analyse du cycle de vie des produits

				Dossier ICPE

				Bilan carbone (émission de Gaz à Effet de Serre – GES)

				Demande d’Autorisation d’Exploiter (DAE)

				Procédure PEFC

				SME

				Etat des lieux réglementaires

				Veille réglementaire

				Accompagnement ISO 14001

				Plan d’action
			</p>
		</div>

	</div>
</section>

@endsection

@section('extra-js')
<script type="module">
	$(document).ready(function(){
        console.log('ready');
		$('.slick-slider').slick({
			slidesToShow:1,
			slidesToScroll:1,
			autoplay:true,
			autoplaySpeed:5000,
			infinite:true,
			dots:true,
		});
	})
</script>

@endsection

@section('extra-css')
    <link rel="stylesheet" href="{{ asset('css/missions.css') }}">
@endsection