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
      <th scope="col">When</th>
      <th scope="col">Location_id</th>
      <th scope="col">Shows_id</th>

    </tr>
  </thead>
  <tbody>


        @foreach($representation as $representations)
            <tr>
                <td>{{ $representations->when }}</td>
                <td>{{ $representations->location_id }}</td>
                <td>{{ $representations->show_id }}</td>
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