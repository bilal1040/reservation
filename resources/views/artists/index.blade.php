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
      <th scope="col">Firstname</th>
      <th scope="col">Lastname</th>
    
    </tr>
  </thead>
  <tbody>
    @foreach($artists as $artist)
            <tr>
                <td>{{ $artist->firstname }}</td>
                <td>{{ $artist->lastname }}</td>
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
