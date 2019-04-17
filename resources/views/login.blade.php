<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Login</title>
</head>
<body>
<form class="" action="index.html" method="post">
	<input type="text" name="login" value="" placeholder="Entrer Votre login">
	<br />
	<input type="text" name="password" value="" placeholder="Entrer Votre password">
	<br />
	<br />
	<button type="submit" name="button">Valider</button>

</form>
<form class="" action="{{URL::to('/inscription')}}" method="get">
	<br>Pas de compte veuillez vous inscrire"</br>
	<button type="submit" name="button">Inscription</button>
</form>
</body>
</html>