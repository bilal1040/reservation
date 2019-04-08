<h1> Liste des {{ $resource }}</h1>

@extends('layouts.app')



@section('content')

    <table>
        <thead>
            <tr>
                <th>Role</th>
            </tr>
        </thead>
        <tbody>
        @foreach($roles as $role)
            <tr>
                <td>{{ $role->role }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
