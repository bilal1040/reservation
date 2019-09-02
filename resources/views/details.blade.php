@extends('layouts.app')
@section('content')



<div class="container">
	<div class="row">
		<div class="col-2">
			
		</div>
		<div class="col-8">


			
			 

			<form id="test"  > 
			@csrf
			<table class="table">
				<thead class="thead-dark">
					<tr>
						<th>Titre</th>
						<th>Prix</th>
						<th>Nombre de place</th>
						<th>Total</th>
					</tr>
				</thead>
				<tbody>
					@foreach($shows as $show)

						
						<tr>
							<input type="hidden" id="user_id" name="user_id" value="{{ Auth::user()->id}}">
							

							<input  type="hidden" id="show_id" name="show_id" value="{{$show ->id}}">
							<td> {{$show ->title}} </td>
							<td id="prix" value="0"> {{$show ->price}}  </td>
							<td>
								<input id="moins" type="button" value="-" />
								<input id ="result" type="texte" value="0" maxlength="2" />
								<input id="plus" type="button" value="+" />

							</td>
							<td><div id="total"></div> </td>
						</tr>
								
					@endforeach
					  

					

				</tbody>
			</table>

			<input type="submit" value="confirmer">
			</form>
		</div>
		
		
		
	</div>
</div>
 
<script>


	$.ajaxSetup({
		  	headers: {
		    'X-CSRF-TOKEN': '<?php echo csrf_token(); ?>'
	          }
	        });


		var res = document.getElementById('result');
		result = parseInt(res.value,10);
		var plus = document.getElementById('plus');
		var show = document.getElementById('show_id').value;
		var user = document.getElementById('user_id').value;
		var submit = document.getElementById('submit');
		var moins = document.getElementById('moins');
		var prix = document.getElementById('prix').innerHTML;
		var total = document.getElementById('total').innerHTML;

    // prendre en compte la modification du nombre au clavier
    res.addEventListener('blur', function() {
       result = document.getElementById('result');
			 result = parseInt(result.value,10);
			 total=result*prix;
			 document.getElementById('total').innerHTML=total;

			 total=result*prix;
			 document.getElementById('total').innerHTML=total;


    });
    
    // boutton +
    plus.addEventListener('click', function() {
      if(result >= 0 && result < 99){
       result++;
       total=result*prix;
       document.getElementById('result').value= result;
       document.getElementById('total').innerHTML=total;

       document.getElementById('result').value= result;


       }
    });
    
     // boutton -
      moins.addEventListener('click', function() {
      if(result > 0 && result <= 99){
       result--;

       total=result*prix;

       document.getElementById('result').value= result;
       document.getElementById('total').innerHTML=total;


       document.getElementById('result').value= result;

        
       
       }
    });

    $('#test').submit(function(e){
    	e.preventDefault();
    	$.ajax({
    		method:'POST',
    		url:'/blabla',
    		data:{total:total,show_id:show,user_id:user},
    		datatype:'json'


    	})
    	.done(function(data){
    		alert('votre réservation  est confirmer');
    		document.location.href="/";
    	})
    	.fail(function(data){
    		console.log(prix);
    	})
    	;
    	});
    
    	
    	 
 
 

</script>

@endsection
  
    

