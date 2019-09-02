@extends('layouts.app')
@section('content')
	<h1>Vos réservation</h1>
	<table class="table">
		<thead>
			<tr>
				<th>Titre du spectacle</th>
				<th>Total payé</th>
			</tr>
			
		</thead>
	
	
		<tbody>
			
			@foreach($shows as $show)
			<tr>
				<td>{{$show->title}} </td>
			</tr>
				
			@endforeach
			
			
			
		</tbody>
	
	</table>

@endsection