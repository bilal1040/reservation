@extends('layouts.app')
@section('content')

<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<h1 id="titreArtiste"> Liste des {{ $resource }}</h1>
<br />


<div class="container">
  <div class="row">
    <div class="col">
      
    </div>
    <div class="col-6">
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Login</th>
      <th scope="col">Password</th>
      <th scope="col">Firstname</th>
      <th scope="col">Lastname</th>
      <th scope="col">Email</th>
      <th scope="col">Langue</th>
      <th scope="col">Roles_id</th>
    </tr>
  </thead>
  <tbody>
   
        @foreach($users as $users)
            <tr>
                <td>{{ $users->login }}</td>
                <td>{{ $users->password }}</td>
                <td>{{ $users->firstname }}</td>
                <td>{{ $users->lastname }}</td>
                <td>{{ $users->email }}</td>
                <td>{{ $users->langue }}</td>
                <td>{{ $users->roles_id }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>

         </div>
    <div class="col">
    
    </div>
    </div>
</div>
@endsection