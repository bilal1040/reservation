@extends('layouts.app')
@section('content')

@php

$cont=0;

@endphp

<div class="container">
	<div class="row">
		<div class="col-2">
			
		</div>
		<div class="col-8">
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
						
						<tr>
							<td> {{$show ->title}} </td>
							<td> {{$show ->price}} </td>
							<td>
								<input id="moins+{{$cont}} " type="button" value="-" />
								<input id ="result+{{$cont}}" type="texte" value="0" maxlength="2" />
								<input id="plus+{{$cont}}" type="button" value="+" />

							</td>
						</tr>
						@php 
						$cont++;
						echo $qt;
						@endphp
					@endforeach

				</tbody>
			</table>
		</div>
	</div>
</div>




@endsection
  
    

