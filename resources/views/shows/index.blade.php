@extends('layouts.app')
@section('content')



<h1 class="titreArtiste"> Liste des {{ $resource }}</h1>



<div class="container">
  <div class="row">
    <div class="col">
      
    </div>
   

    <div class="col-10" style="margin-bottom: 20px;">
   
          <table id="maTable" class="table">
            <thead class="thead-dark">
              <tr>
               
                <th scope="col">Titre</th>
                <th scope="col" data-orderable="false">Description</th>
                <th scope="col">Price</th> 
              </tr>
            </thead>
            <tbody>
            @foreach($shows as $show)
            
                  
                      <tr> 
                          
                          @guest
                          <td class="col-">{{ $show->title }}</td>
                          <td class="col">{{$show->description}}</td>
                          <td>{{ $show->price}}</td>
                          @else
                          <td class="col-"><a href="details/{{$show->id}}">{{ $show->title }}</a></td>
                          <td class="col">{{$show->description}}</td>
                          <td>{{ $show->price}}</td>
                          @endguest
                      </tr>
                  
                  
            @endforeach
            </tbody>
          </table>
    </div >

    <script>
       $(document).ready(function (){
        $('#maTable').DataTable();
      });
    </script>

@endsection