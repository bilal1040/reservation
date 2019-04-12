<h1> Liste des {{ $resource }}</h1>

@extends('layouts.app')



@section('content')

    <table>
        <thead>
            <tr>
                <th>Login</th>
                <th>Password</th>
                <th>Firstname></th>
                <th>Lastname</th>
                <th>Email</th>
                <th>Langue</th>
                <th>Roles_id</th>
            </tr>
        </thead>
        <tbody>
        @foreach($users as $userss)
            <tr>
                <td>{{ $userss->login }}</td>
                <td>{{ $userss->password }}</td>
                <td>{{ $userss->firstname }}</td>
                <td>{{ $userss->lastname }}</td>
                <td>{{ $userss->email }}</td>
                <td>{{ $userss->langue }}</td>
                <td>{{ $userss->roles_id }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection