@extends('layouts.app')
@section('title','Liste des artistes')

@section('content')

<h1>Liste des {{$resource}}</h1>

<table>
	<thead>
		<tr>
			<th>Code postal</th>
			<th>localité</th>
		</tr>

	</thead>

	<tbody>
	@foreach($localites as $key)

		<tr>
			<td> {{$key->postal_code}} </td>
			<td> {{$key->localities}} </td>
		</tr>
	@endforeach
	</tbody>

</table>

@endsection