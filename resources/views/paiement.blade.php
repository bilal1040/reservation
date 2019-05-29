@extends('layouts.app')
@section('content')

@foreach($shows as $show)
<table>
	<td> {{$show ->id}} </td>
	<td> {{$show ->title}} </td>
	<td> {{$show ->price}} </td>
</table>
@endforeach


@endsection
  
    

