<h1> Liste des {{ $resource }}</h1>

@extends('layouts.app')



@section('content')

    <table>
        <thead>
            <tr>
                <th>When</th>
                <th>Locations_id</th>
                <th>Shows_id</th>
            </tr>
        </thead>
        <tbody>
        @foreach($representation as $representations)
            <tr>
                <td>{{ $representations->when }}</td>
                <td>{{ $representations->location_id }}</td>
                <td>{{ $representations->show_id }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection