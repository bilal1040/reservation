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
                  <img class="d-block w-100 img1" src="images/ceci.jpg" alt="First slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100 img1" src="images/cible.jpg" alt="Second slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100 img1" src="images/ayiti.jpg" alt="Third slide">
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

<div class="container" style="padding-top: 40px;padding-bottom: 50px;">
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
<?php
$apiRequest = 'https://www.theatre-contemporain.net/api/spectacles/OBJET/schedules'; // Requête (OBJET = identifiant unique) 

$start = '0'; // Debut de l'offset 

$end = '5'; // Fin de l'offset 

$apiKey = '2208389d4c7bcbc49af23b6c6867e348bde7e8d1'; // Clé API 

$entryPoint = 'https://www.theatre-contemporain.net'; // Point d'entrée 
         
// initialiser CURL et définir les options
$apiCall = curl_init($entryPoint.$apiRequest.'?k='.$apiKey);
$apiCallOptions = array(
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_HTTPHEADER => array('Content-type: application/json'),
);
curl_setopt_array($apiCall, $apiCallOptions);
 
// récupèrer les résultats
$result =  json_decode(curl_exec($apiCall));

// faire un print des résultats
echo '<pre>'.print_r($result,true).'</pre>';
?>      
@endsection
