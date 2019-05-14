@extends('layouts.app')
@section('content')

<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<h1 id="titreArtiste"> Liste des {{ $resource }}</h1>
<br />

<style>
  
</style>
<div class="container">
  <div class="row">
    <div class="col">
      
    </div>
    <div class="col-6">
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Slug</th>
      <th scope="col">Designation</th>
      <th scope="col">Address</th>
      <th scope="col">Website</th>
      <th scope="col">Phone</th>
      <th scope="col">Locality_id</th>

    </tr>
  </thead>
  <tbody>


        @foreach($locations as $location)
            <tr>
                <td>{{ $location->slug }}</td>
                <td>{{ $location->designation }}</td>
                <td >{{ $location->address }}</td>
                <td>{{ $location->website }}</td>
                <td>{{ $location->phone }}</td>
                <td>{{ $location->locality_id }}</td>
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