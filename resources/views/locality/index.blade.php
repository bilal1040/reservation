<h1> Liste des {{ $resource }}</h1>

@extends('layouts.app')



@section('content')

    <table>
        <thead>
            <tr>
                <th>Postal_code</th>
                <th>Locality</th>
            </tr>
        </thead>
        <tbody>
        @foreach($localitys as $locality)
            <tr>
                <td>{{ $locality->postal_code}}</td>
                <td>{{ $locality->locality }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
