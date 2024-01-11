@extends('layouts.app')

@section('content')
    <div class="container">
       <div class="row" style="display: grid; place-items: center">
           <div class="col-md-8 mb-3">
               <div class="table-responsive">
                   <caption><strong>Administrateurs</strong></caption>
                   <table class="table-bordered">
                       <tr>
                           <th>Nom</th>
                           <th>email</th>
                           <th>Modifier</th>
                           <th>Supprimer</th>
                       </tr>
                       @foreach($admins as $admin)
                           <tr>
                               <td>{{ $admin->name }}</td>
                               <td>{{ $admin->email }}</td>
                               <td><a href="#" class="btn btn-lg btn-warning">Modifier</a></td>
                               <td><a href="#" class="btn btn-lg btn-danger">Supprimer</a></td>
                           </tr>
                       @endforeach
                   </table>
               </div>
           </div>
           <div class="col-md-8 mb-3">
               <div class="table-responsive">
                   <caption><strong>Partenaires</strong></caption>
                   <table class="table-bordered">
                       <tr>
                           <th>Nom du partenaire</th>
                           <th>Description du partenaire</th>
                           <th>Image du partenaire</th>
                           <th>Modifier Le partenaire</th>
                           <th>Supprimer Le partenaire</th>
                       </tr>
                       @foreach($partners as $partner)
                           <tr>
                               <td>{{ $partner->name }}</td>
                               <td>{{ $partner->description }}</td>
                               <td><img class="w-100" src="{{ asset($partner->image) }}" alt=""></td>
                               <td><button class="btn btn-warning btn-lg">Modifier</button></td>
                               <td><button class="btn btn-danger btn-lg">Supprimer</button></td>
                           </tr>
                       @endforeach
                   </table>
               </div>
           </div>
       </div>
    </div>
@endsection
