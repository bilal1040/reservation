@extends('layouts.app')
@section('content')

      <div class="content">
            <h1 style="text-align: center;">Reservation</h1>
      </div>
<div class="container">
    <div class="row">
        <div class="col-sm-4"></div>
        <div class="col-4">
            <div id="carouselExampleControls" class="carousel slide " data-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img class="d-block w-100 img1" src="images/ceci.jpg" alt="First slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100 img1" src="images/cible.jpg" alt="Second slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100 img1" src="images/ayiti.jpg" alt="Third slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100 img1" src="images/scene.jpg" alt="Third slide">
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
       
|@endsection