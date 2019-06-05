@extends('layouts.app')
@section('content')



<h1 id="titreArtiste"> Liste des {{ $resource }}</h1>



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
            @foreach($shows as $show)
            <tbody>
                  
                      <tr> 
                          
                          <td><input type="checkbox" name="checkbox[]" value=" {{$show->id}} "></td>
                          <td class="col-">{{ $show->title }}</td>
                          <td>{{ $show->price}}</td>
                          
                      </tr>
                  
                  </tbody>
                  @endforeach
          </table>
          <input type="submit" name="envoyer" value="confirmer">
    </form>

@endsection