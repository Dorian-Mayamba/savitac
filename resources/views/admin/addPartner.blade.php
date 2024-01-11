@extends('layouts.app')

@section('content')
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $message)
                    <li>{{ $message }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="container">
        <form action="{{ route('partner-create') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group mb-4">
                <input type="text" name="name" class="form-control" placeholder="nom du partenaire">
            </div>
            <div class="form-group mb-4">
                <textarea name="description" id="description" cols="30" rows="10" class="form-control"></textarea>
            </div>
            <div class="form-group mb-4">
                <input type="file" name="image" class="form-control" placeholder="image">
            </div>
            <div class="form-group mb-4">
                <input type="text" name="link" class="form-control" placeholder="Lien du partenaire">
            </div>
            <div class="form-group mb-4">
                <input type="submit" value="Ajouter" class="form-control btn btn-success btn-lg">
            </div>
        </form>
    </div>
@endsection
