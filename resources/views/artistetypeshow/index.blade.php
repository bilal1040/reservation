<h1> Liste des {{ $resource }}</h1>

@extends('layouts.app')



@section('content')

    <table>
        <thead>
            <tr>
                <th>Artistes_Type_id/th>
                <th>Shows_id</th>
            </tr>
        </thead>
        <tbody>
        @foreach($artistetypeshow as $artistetypeshow)
            <tr>
                <td>{{ $artistetypeshow->artiste_type_id}}</td>
                <td>{{ $artistetypeshow->shows_id }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection