@extends('layouts.app')

@section('jsStripe')
  <script src="https://js.stripe.com/v3/"></script>
@endsection


@section('content')
<div class="col-md-12">
	<div class="row my-4">
		<div class="col-md-4 "></div>
		<div class="col-md-4 border-10 border border primary">
			<form id="payment-form" class="my-4">
				@csrf
				  <div id="card-element">
				    <!-- Elements will create input elements here -->
				  </div>

				  <!-- We'll put the error messages in this element -->
				  <div id="card-errors" role="alert"></div>
				  	<input type="hidden" name="montant" value="{{$montant}}" id="montant">
					<input type="hidden" name="montant" value="{{$user_id}}" id="user_id"> 
					<input type="hidden" name="montant" value="{{$show_id}}" id="show_id">

				  <button id="submit" class="btn btn-success mt-2" >Procéder au paiement</button>
			</form>
		</div>
		
	
</div>
	

@endsection

@section('StripeContent')
	<script>

		$.ajaxSetup({
		  	headers: {
		    'X-CSRF-TOKEN': '<?php echo csrf_token(); ?>'
	          }
	        });
		

	// Set your publishable key: remember to change this to your live publishable key in production
	// See your keys here: https://dashboard.stripe.com/account/apikeys
	var stripe = Stripe('pk_test_5dVY8Tr7eVYyH37c3MPneZtc00U3Oj1r6H');
	var elements = stripe.elements();
	var url = "/merci";



	var style = {
    base: {
      color: "#32325d",
      fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
      fontSmoothing: "antialiased",
      fontSize: "16px",
      "::placeholder": {
        color: "#aab7c4"
      }
    },
    invalid: 
    {
      color: "#fa755a",
      iconColor: "#fa755a"
    }
  };

  	var card = elements.create("card", { style: style });
	card.mount("#card-element");
	card.addEventListener('change', ({error}) => 
	{
	  const displayError = document.getElementById('card-errors');
	  if (error) 
	  {
	    displayError.textContent = error.message;
	  } 
	  else 
	  {
	    displayError.textContent = '';
	  }
	});

	var form = document.getElementById('payment-form');

	form.addEventListener('submit', function(ev) 
	{
	  ev.preventDefault();
	  stripe.confirmCardPayment("{{ $client_secret }}", {
	    payment_method: {
	      card: card,
	      
	    }
	  }).then(function(result) {
	    if (result.error) {
	      // Show error to your customer (e.g., insufficient funds)
	      console.log(result.error.message);
	    } else {
	      // The payment has been processed!
	      if (result.paymentIntent.status === 'succeeded') 
	      {
	        $.post 
	        (
				'reservation',
				{
				montant: $("#montant").val(),
				user_id: $("#user_id").val(),
				show_id: $("#show_id").val()
				
				},
			);
			window.location = url;
	      }
	    }
	  });
	});
	</script>
@endsection
