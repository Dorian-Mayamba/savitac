@extends('layouts.app')

@section('content')
    <div class="mines-content container">
        <h1><small>Restauration des sites miniers</small></h1>
        <div class="background"></div>
        <h2>1. Le contexte environnemental des mines</h2>
        <div class="content">
            <p>L’évolution des pratiques minières et les impacts résultants de l’exploitation minière.</p>
            <p>La remédiation du passif minier.</p>
        </div>


        <h2>2. La restauration des sites après exploitation</h2>
        <div class="content">
            <p>Mise en sécurité et réaménagement durable des sites.</p>
        </div>

        <h2>3. Le choix de la restauration écologique</h2>
        <ul>
            <li>3.1 La production du matériel végétal</li>
            <li>3.2 La végétalisation</li>
            <li>3.3 La plantation manuelle</li>
            <li>3.4 Les deux types de semis</li>
            <li>3.5 Les progrès à réaliser</li>
        </ul>



        <h3>Objectifs de la restauration</h3>
        <ul>
            <li>Éliminer les risques inacceptables pour la santé et assurer la sécurité des personnes.</li>
            <li>Limiter la production et la propagation de contaminants.</li>
            <li>Remettre le site dans un état visuellement acceptable et compatible avec l’usage futur.</li>
        </ul>

        <p>Une expertise de pointe dans la restauration des sites miniers a permis d’acquérir une expertise reconnue dans la
            caractérisation des sites miniers et l’élaboration de solutions pour la restauration de sites miniers avec des
            problématiques d’envergure.</p>
    </div>
@endsection

@section('extra-css')
    <link rel="stylesheet" href="{{ asset('css/mines.css') }}">
@endsection
