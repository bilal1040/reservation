<h1> Liste des {{ $resource }}</h1>

@extends('layouts.app')



@section('content')

    <table>
        <thead>
            <tr>
                <th>Type</th>
            </tr>
        </thead>
        <tbody>
        @foreach($types as $type)
            <tr>
                <td>{{ $type->type }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
