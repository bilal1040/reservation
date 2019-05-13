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
      <th scope="col"  >Slug</th>
      <th scope="col">Title</th>
      <th scope="col">Poster_url</th>
      <th scope="col">Bookable</th>
      <th scope="col">Price</th>
      <th scope="col">Location_id</th>
    </tr>
  </thead>
  <tbody>
        @foreach($shows as $show)
            <tr>
                <td>{{ $show->slug }}</td>
                <td class="col-3 lg">{{ $show->title }}</td>
                <td>{{ $show->poster_url }}</td>
                <td>{{ $show->bookable}}</td>
                <td>{{ $show->price}}</td>
                <td>{{ $show->location_id }}</td>
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