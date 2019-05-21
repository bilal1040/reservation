@extends('layouts.app')
@section('content')

<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<h1 id="titreArtiste"> Liste des {{ $resource }}</h1>
<br />


<div class="container">
  <div class="row">
    <div class="col">      
  </div>
  <div class="col-10">
    <form method="GET" action="paiement">
      <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">Choix</th>
            <th scope="col">Slug</th>
            <th scope="col">Title</th>
            <th scope="col">Poster_url</th>
            <th scope="col">Bookable</th>
            <th scope="col">Price</th>
            <th scope="col">Location_id</th>
          </tr>
        </thead>
        <tbody>
          <!--  @foreach($shows as $show)
                <tr>
                    <td><input type="checkbox" name='list' value="<?php echo $show['id']; ?>"></td>
                    <td>{{ $show->slug }}</td>
                    <td>{{ $show->title }}</td>
                    <td>{{ $show->poster_url }}</td>
                    <td>{{ $show->bookable}}</td>
                    <td>{{ $show->price}}</td>
                    <td>{{ $show->location_id }}</td>
                </tr>
            @endforeach-->		
            <?php
              $conn = mysqli_connect("localhost","root","","reservations");
              // Check connection
              if (mysqli_connect_errno()){
                echo "Failed to connect to MySQL: " . mysqli_connect_error();
              }
              $query=mysqli_query($conn,"select * from `shows`");
              while($row=mysqli_fetch_array($query)){
            ?>
            <tr>
              <td><input type="checkbox" value="<?php echo $row['id']; ?>" name="id[]"></td>
              <td><?php echo $row['slug']; ?></td>
              <td><?php echo $row['title']; ?></td>
              <td><?php echo $row['poster_url']; ?></td>
              <td><?php echo $row['bookable']?></td>
              <td><?php echo $row['price']?></td>
              <td><?php echo $row['location_id']?></td>
            </tr>
            <?php
              }
            ?>
        </tbody>
      </table>
      <input type="submit" name="submit" value="Submit">
    </form>

    </div>
      <div class="col">
    </div>
  </div>
</div>
@endsection