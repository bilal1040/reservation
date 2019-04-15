<h1> Liste des {{ $resource }}</h1>

@extends('layouts.app')



@section('content')

    <table>
        <thead>
            <tr>
                <th>Places</th>
                <th>Userss_id</th>
                <th>Representation_id</th>
            </tr>
        </thead>
        <tbody>
        @foreach($representationsusers as $representationuser)
            <tr>
                <td>{{ $representationuser->places }}</td>
                <td>{{ $representationuser->userss_id }}</td>
                <td>{{ $representationuser->representation_id }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection