<h1> Liste des {{ $resource }}</h1>

@extends('layouts.app')



@section('content')

    <table>
        <thead>
            <tr>
                <th>Artists_id</th>
                <th>Types_id</th>
            </tr>
        </thead>
        <tbody>
        @foreach($artistetype as $artistetype)
            <tr>
                <td>{{ $artistetype->artists_id}}</td>
                <td>{{ $artistetype->types_id }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection