@extends('layouts.app')


@section('content')
    <div class="container">
        <h1 class="text-center">Nous contacter</h1>
        <h1 class="mb-4">SAVITAC</h1>
        <div class="row w-100">
            <div class="col-md-6">
                <form action="#" method="POST">
                    <div class="form-group">
                        <input class="form-control" type="text" name="name" id="name" placeholder="entrez votre nom" required>
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="email" name="email" id="email" placeholder="entrez votre adresse mail" required>
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="text" name="subject" id="subject" placeholder="objet du commentaire" required>
                    </div>
                    <div class="form-group">
                        <textarea name="comment" id="comment" cols="30" rows="10" class="form-control" required></textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Envoyer" class="form-control btn btn-lg btn-success">
                    </div>
                </form>
            </div>
            <div class="col-md-6">
                <h2><small>Voici nos coordonnées.</small></h2>
                <p><strong>Telephone: J.Mayamba</strong> +33 7 66 50 95 57</p>
            </div>
        </div>
    </div>
@endsection

@section('extra-css')
    <link rel="stylesheet" href="{{ asset('css/contact.css') }}">
@endsection