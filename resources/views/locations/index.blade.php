@extends('layouts.app')
@section('title','Liste des artistes')

@section('content')

<h1>Liste des {{$resource}}</h1>

<table>
	<thead>
		<tr>
			<th>slug</th>
			<th>designation</th>
		</tr>

	</thead>

	<tbody>
	@foreach($locations as $key)

		<tr>
			<td> {{$key->slug}} </td>
			<td> {{$key->designation}} </td>
		</tr>
	@endforeach
	</tbody>

</table>

@endsection