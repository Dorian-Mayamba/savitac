@extends('layouts.app')


@section('content')
    <div class="container">
        <h1 class="text-center">Nous contacter</h1>
        <h1 class="mb-4">SAVITAC</h1>
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <div class="row w-100">
            <div class="col-md-6 mb-5">
                <div class="form-content">
                    <form action="{{ route('contact') }}" method="POST">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <input class="form-control" type="text" name="name" id="name"
                                placeholder="entrez votre nom" required>
                        </div>
                        <div class="form-group">
                            <input class="form-control" type="email" name="email" id="email"
                                placeholder="entrez votre adresse mail" required>
                        </div>
                        <div class="form-group">
                            <input class="form-control" type="text" name="subject" id="subject"
                                placeholder="objet du commentaire" required>
                        </div>
                        <div class="form-group">
                            <textarea name="comment" id="comment" cols="30" rows="10" class="form-control" required></textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Envoyer" class="form-control btn btn-lg btn-success">
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-6 mb-3">
                <div class="contact-content">
                    <h2><small>Voici nos coordonnées.</small></h2>
                    <p><strong>Telephone: </strong> +33 7 66 50 95 57</p>
                    <div class="contact-image">
                        <img class="rounded w-100" src="{{ asset('images/700-contact-us.jpg') }}" alt="contact-image">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('extra-css')
    <link rel="stylesheet" href="{{ asset('css/contact.css') }}">
@endsection
