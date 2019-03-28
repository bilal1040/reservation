
<h1> Liste des {{ $resource }}</h1>

@extends('layouts.app')



@section('content')

    <table>
        <thead>
            <tr>
                <th>Firstname</th>
                <th>Lastname</th>
            </tr>
        </thead>
        <tbody>
        @foreach($artists as $artist)
            <tr>
                <td>{{ $artist->firstname }}</td>
                <td>{{ $artist->lastname }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
