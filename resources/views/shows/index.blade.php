@extends('layouts.app')
@section('content')


<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<h1 id="titreArtiste"> Liste des {{ $resource }}</h1>
<br />


<div class="container">
  <div class="row">
    <div class="col">
      
    </div>
   

    <div class="col-10">
    <form action="paiement" method="post">
      @csrf
          <table class="table">
            <thead class="thead-dark">
              <tr>
                <th></th>
                <th scope="col">Titre</th>
                <th scope="col">Price</th> 
              </tr>
            </thead>
            <tbody>
                  @foreach($shows as $show)
                      <tr> 
                          <td name="id"> {{$show->id}} </td>
                          <td><input type="checkbox" name="checkbox[]" value=" {{$show->id}} "></td>
                          <td class="col-">{{ $show->title }}</td>
                          <td>{{ $show->price}}</td>
                          
                      </tr>
                  @endforeach
                  </tbody>
          </table>
          <input type="submit" name="envoyer" value="confirmer">
    </form>

@endsection