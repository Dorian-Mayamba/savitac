@extends('layouts.app')


@section('content')
    <div class="jumbotron mb-4">
        <div class="welcome-box">
            <h1> Savitac</h1>
            <p> Un cabinet spécialisé sur <br/>le Conseil en management qualité,<br/> sécurité et affaires.</p>
        </div>
    </div>
    <div class="container">
                <p>
                    Savitac est un cabinet spécialisé dans le conseil en management qualité, sécurité et affaires, 
                    Savitac aide aussi les entreprises et les collectivités locales dans La prise en compte de l’impact environnemental de leurs activités, 
                    l’évaluation de cet impact et sa réduction. Réduire vos coûts, accroître votre compétitivité, 
                    détecter de nouvelles opportunités, homogénéiser vos pratiques, réduire vos risques, 
                    valoriser vos produits … les avantages d’une politique qualité structurée sont aujourd’hui indéniables. 
                    Qualité de produit, de service, 
                    d’organisation… Les compétences de Savitac permettent d’intervenir sur l’ensemble des systèmes qui composent le Management de la Qualité, 
                    la Sécurité et des afffaires tout en prenant en considération les risques environmentaux.
                </p>
                <h1 class="text-center text-green"><small>Nos partenaires:</small></h1>
                <p>
                    Savitac est composé de partenaires ayant une expérience spécifique dans leur domaines 
                    respectifs.

                    Pour en savoir plus
                    <div class="partner-link text-center">
                        <a href="{{ route('partner') }}" class="btn btn-lg btn-info text-light">Cliquez ici pour voir les partenaires</a>
                    </div>
                </p>
    </div>
@endsection

@section('extra-css')
    <link rel="stylesheet" href={{ asset('css/index.css') }}>
@endsection
