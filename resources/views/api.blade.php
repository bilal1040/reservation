@extends('layouts.app')
@section('content')

	<table class="table table-dark">
		<thead>
			<tr>
				<th>Titre</th>
				<th>object</th>
				<th>Lien vers le site partenaire</th>
			</tr>
		</thead>
		<tbody>
			@while($cont<3)
				<tr>
					<td> {{$result[$cont]->title}}</td>
					<td> {{$result[$cont]->object}}</td>
					<td> <a href=" {{$result[$cont]->permanent_url}} ">{{$result[$cont]->permanent_url}}</a> </td>
				</tr>
				@php
				$cont++;
				@endphp
			@endwhile
		</tbody>
	</table>
	

@endsection