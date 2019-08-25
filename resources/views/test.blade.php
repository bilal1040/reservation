@extends('layouts.app')
@section('content')

	<form action="{{route('TestController')}}" method="POST">
		 @csrf
		<div name="user_id" value="{{ Auth::user()->id}}"></div>
		<div name="show_id" value="4"></div>
		<div name="total" value="10"></div>

		<input type="submit" name="envoyer">
	</form>

@endsection