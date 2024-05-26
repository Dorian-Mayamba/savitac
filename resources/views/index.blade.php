@extends('layouts.app')


@section('content')
    <div class="container">
        <div class="jumbotron mb-4">
            <div class="welcome-box">
                <h1><small>Savitac</small></h1>
                <p> Un cabinet spécialisé sur <br />le Conseil en management qualité,<br /> sécurité et affaires.</p>
            </div>
        </div>
        <p>
            Savitac est un cabinet spécialisé dans le conseil en management qualité, sécurité et affaires,
            Savitac aide aussi les entreprises et les collectivités locales dans La prise en compte de l’impact
            environnemental de leurs activités,
            l’évaluation de cet impact et sa réduction. Réduire vos coûts, accroître votre compétitivité,
            détecter de nouvelles opportunités, homogénéiser vos pratiques, réduire vos risques,
            valoriser vos produits … les avantages d’une politique qualité structurée sont aujourd’hui indéniables.
            Qualité de produit, de service,
            d’organisation… Les compétences de Savitac permettent d’intervenir sur l’ensemble des systèmes qui
            composent le Management de la Qualité,
            la Sécurité et des afffaires tout en prenant en considération les risques environmentaux.
        </p>
        <h2 class="text-center"><small>Nos Services</small></h2>

        <div class="row w-100 mb-3">
            <div class="col-md-3">
                {{-- Image --}}
                <div class="card">
                    <img src="{{ asset('images/audit.jpg') }}" alt="" class="card-img-top">
                    <div class="card-body">
                        <h4 class="card-title">Audit</h4>
                        <p class="card-text">
                            Nous faisons des diagnostics en audit interne et audit externe pour verifier si la démarche
                            adoptée et
                            l'échange des informations entre la société et le client/partenaire sont conformes à la
                            réglementation.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <img src="{{ asset('images/expertise.webp') }}" class="card-img-top">
                    <div class="card-body">
                        <h4 class="card-title">Expertise</h4>
                        <p class="card-text">
                            Pour chaque réclamation, nous relevons la description du défaut faite par le particulier.
                            Ensuite nous
                            faisons des analyses profondes du défaut et enfin nous faisons parvenir un compte-rendu
                            d'analyse en
                            guise de conclusion.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <img src="{{ asset('images/consulting.jpg') }}" class="card-img-top">
                    <div class="card-body">
                        <h4 class="card-title">Conseil</h4>
                        <p class="card-text">
                            Nous apporterons les informations necessaires afin que la démarche adoptée vous permette
                            d'atteindre les
                            objects fixés.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <img src="{{ asset('images/apporteur d\'affaires.jpg') }}" class="card-img-top">
                    <div class="card-body">
                        <h4 class="card-title">Apport d'Affaires</h4>
                        <p class="card-text">
                            Nos nous chargeons de mettre en relation nos clients avec les entreprises dont les produits
                            répondent à
                            leur besoins.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <h2 class="text-center"><small>Nos Partenaires:</small></h2>
        <p>
            Savitac est composé de partenaires ayant une expérience spécifique dans leur domaines
            respectifs.

            Pour en savoir plus
        <div class="partner-link text-center">
            <a href="{{ route('partner') }}" class="btn btn-lg btn-info text-light">Cliquez ici pour voir les
                partenaires</a>
        </div>
        </p>
    </div>
@endsection

@section('extra-css')
    <link rel="stylesheet" href={{ asset('css/index.css') }}>
@endsection
