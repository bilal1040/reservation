<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Login</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<form class="" action="index.php" method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">Login</label><br/>
    <input type="Login" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Entrer votre Login" size="60">
    <small id="emailHelp" class="form-text text-muted"></small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label><br/>
    <input type="password" " id="exampleInputPassword1" placeholder="Password" size="60">
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Retenir mon login</label>
  </div>
  <button type="submit" class="btn btn-primary">Connexion</button>
</form>
  <form class="" action="{{URL::to('/inscription')}}" method="get">
  <br> Pas de compte veuillez vous inscrire</br>
  <br />
  <button type="submit" class="btn btn-primary">Inscription</button>

</form>
</body>
</html>