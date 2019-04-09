<h1> Liste des {{ $resource }}</h1>

@extends('layouts.app')



@section('content')

    <table>
        <thead>
            <tr>
                <th>Slug</th>
                <th>Designation</th>
                <th>Address</th>
                <th>Website</th>
                <th>Phone</th>
                <th>Locality_id</th>
            </tr>
        </thead>
        <tbody>
        @foreach($locations as $location)
            <tr>
                <td>{{ $location->slug }}</td>
                <td>{{ $location->designation }}</td>
                <td>{{ $location->address }}</td>
                <td>{{ $location->website }}</td>
                <td>{{ $location->phone }}</td>
                <td>{{ $location->locality_id }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection