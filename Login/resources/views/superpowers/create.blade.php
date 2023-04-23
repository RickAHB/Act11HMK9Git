<!DOCTYPE html>
<html>
<head>
  <title>Superheros Powers</title>
  <meta charset="UTF-8">
</head>
<body>
<h1>Create SuperPower</h1>

<form action="{{ route('superpowers.store') }}" method="post">

@csrf

<label for="name">Name</label><br><br>
<input type="text" name="name">
<br><br>

<label for="description">Desciption</label><br>
<textarea name="description" cols="50" rows="5"></textarea>
<br><br>

<button type="submit">Create!!</button>
</form>
</body>
</html>


