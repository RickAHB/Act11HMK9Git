<!DOCTYPE html>
<html>
<head>
  <title>Superheros Powers</title>
  <meta charset="UTF-8">
</head>
<body>
<h1>Edit SuperPower</h1>

<form action="{{ route('superpowers.update', $superpowers->id) }}" method="post">
@method('put')
@csrf

<label for="name">Name</label><br><br>
<input type="text" name="name" value="{{$superpowers->name}}">
<br><br>

<label for="description">Desciption</label><br>
<textarea name="description" cols="50" rows="5">{{$superpowers->description}}</textarea>
<br><br>

<button type="submit">Edit Superpower!!</button>

</form>
</body>
</html>


