@extends('layouts.app')
@section('content')

      

            <h1 class="titreArtiste">Reservation</h1>
      </div>
<div class="container">
    <div class="row">
        <div class="col-sm-4">
          
        </div>
        <div class="col-4">
            <div id="carouselExampleControls" class="carousel slide " data-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img class="d-block w-100 img1" src="image/ceci.jpg" alt="First slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100 img1" src="image/cible.jpg" alt="Second slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100 img1" src="image/ayiti.jpg" alt="Third slide">
                </div>
               
              </div>
              <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
        </div>
    </div>
</div>

<div class="container" style="padding-top: 50px;">
    <div class="row">
        <div class="col-4">
          
        </div>
        <div class="col-4">
          <h2 class="texteVideo">Les inconnus sketch de la révolution: Un pur régale</h2>
          <iframe class="w-100 img1"  src="https://www.youtube.com/embed/pibSbfAPE-g" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
             
          </iframe>

        </div>
      
    </div>


<!-- suggestion: faut-il garder cela?
      <div class="container">
      	<div class="text-center">
      		<div class="col">
      		<img src="images/cible.jpg" class="img1">
                  <img src="images/ayiti.jpg" class="img1">
      		</div>
      	</div>
      </div>
 END suggestion -->
</div>
       
@endsection