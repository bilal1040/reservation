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
      <th scope="col">Places</th>
      <th scope="col">Users_id</th>
      <th scope="col">Representation_id</th>
      

    </tr>
  </thead>
  <tbody>

        @foreach($representationsusers as $representationuser)
            <tr>
                <td>{{ $representationuser->places }}</td>
                <td>{{ $representationuser->users_id }}</td>
                <td>{{ $representationuser->representation_id }}</td>
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