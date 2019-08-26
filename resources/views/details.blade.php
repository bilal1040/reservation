@extends('layouts.app')
@section('content')



<div class="container">
	<div class="row">
		<div class="col-2">
			
		</div>
		<div class="col-8">


			<form  method="POST" action=" {{ route('PaiementController') }} ">
			 @csrf


			<table class="table">
				<thead class="thead-dark">
					<tr>
						<th>Titre</th>
						<th>Prix</th>
						<th>Nombre de place</th>
					</tr>
				</thead>
				<tbody>
					@foreach($shows as $show)

						<?php $total=0; ?>
						<tr>
							<input type="hidden" name="user_id" value="{{ Auth::user()->id}}">
							

							<input type="hidden" name="show_id" value="{{$show ->id}}">
							<td> {{$show ->title}} </td>
							<td id="prix" value="0"> {{$show ->price}}  </td>
							<td>
								<input id="moins" type="button" value="-" />
								<input id ="result" type="texte" value="0" maxlength="2" />
								<input id="plus" type="button" value="+" />

							</td>
						</tr>
								
					@endforeach
					  <div id="total"></div> 

					{{$total}}

				</tbody>
			</table>


			<input type="submit" name="envoyer"/>
		</div>
		
		
		</form>
	</div>
</div>
 
<script>
	var res = document.getElementById('result');
		result = parseInt(res.value,10);
		var plus = document.getElementById('plus');
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
</script>

@endsection
  
    

