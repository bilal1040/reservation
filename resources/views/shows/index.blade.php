@extends('layouts.app')
@section('content')

<table>
  <thead>
    <tr>
      <th>Titre</th>
      <th>Prix</th>
    </tr>
  </thead>
  <tbody>
    @foreach($shows as $show)
      <tr>
        <td> {{ $show->title}} </td>
        <td> {{ $show->price }} </td>
      </tr>
    @endforeach

  </tbody>
</table>

@endsection