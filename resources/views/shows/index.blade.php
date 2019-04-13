<h1> Liste des {{ $resource }}</h1>

@extends('layouts.app')



@section('content')

    <table>
        <thead>
            <tr>
                <th>Slug</th>
                <th>Title</th>
                <th>Poster_url</th>
                <th>Bookable</th>
                <th>Price</th>
                <th>Location_id</th>
            </tr>
        </thead>
        <tbody>
        @foreach($shows as $show)
            <tr>
                <td>{{ $show->slug }}</td>
                <td>{{ $show->title }}</td>
                <td>{{ $show->poster_url }}</td>
                <td>{{ $show->bookable}}</td>
                <td>{{ $show->price}}</td>
                <td>{{ $show->location_id }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection