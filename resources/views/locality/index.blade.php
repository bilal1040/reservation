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
      <th scope="col">Postal_code</th>
      <th scope="col">Locality</th>
    </tr>
  </thead>
  <tbody>

   
        @foreach($localitys as $locality)
            <tr>
                <td>{{ $locality->postal_code}}</td>
                <td>{{ $locality->locality }}</td>
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
