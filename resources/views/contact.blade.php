@extends('layouts.app')
@section('content')
	<h1 class="titreArtiste">Reservation</h1>
	<div class="container contact">
		<div class="row">
		
			<div class="col-4">
				
			</div>
			<div class="col-6 col-sm-4">
            	<div class="card bg-light mb-3">
                   <div class="card-header bg-success text-white text-uppercase"><i class="fa fa-home"></i> Address</div>
	                <div class="card-body">
	                    <p>Rue Van Damme n°10</p>
	                    <p>1080 Molembeek-saint-jean</p>
	                    <p>Bruxelles</p>
	                    <p>Email : HB@icc.com</p>
	                    <p>Tel. +32 12 56 11 51 84</p>

	                </div>

            	</div>
            </div>
        </div>
    
	</div>

   @php 
   		$apiRequest = '/api/spectacles/all/search'; // Requête (OBJET = identifiant unique) 

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

   @endphp

@endsection