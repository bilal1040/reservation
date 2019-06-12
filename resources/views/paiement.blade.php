@extends('layouts.app')
@section('content')

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
							<td><input style="width: 60px;float: right;" type="number" name="qt" value="0" min="0"></td>
						</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
</div>




@endsection
