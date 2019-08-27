@extends('layouts.app')
@section('content')



<h1 class="titreArtiste"> Liste des {{ $resource }}</h1>



<div class="container">
  <div class="row">
    <div class="col">
      
    </div>
   

    <div class="col-10">
   
          <table class="table">
            <thead class="thead-dark">
              <tr>
               
                <th scope="col">Titre</th>
                <th scope="col">Price</th> 
              </tr>
            </thead>
            @foreach($shows as $show)
            <tbody>
                  
                      <tr> 
                          
                          @guest
                          <td class="col-">{{ $show->title }}</td>
                          <td>{{ $show->price}}</td>
                          @else
                          <td class="col-"><a href="details/{{$show->id}}">{{ $show->title }}</a></td>
                          <td>{{ $show->price}}</td>
                          @endguest
                      </tr>
                  
                  </tbody>
                  @endforeach
          </table>
    </div>

@endsection