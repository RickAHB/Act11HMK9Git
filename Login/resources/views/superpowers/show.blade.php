<!DOCTYPE html>
<html>
<head>
  <title>{{$superpowers->name}}</title>
  <meta charset="UTF-8">
</head>
<body>
<h1>{{$superpowers->name}}</h1>
<p>{{$superpowers->description}}</p>
<a href ="{{route ('superpowers.edit',$superpowers->id) }}">Edit Now!</a>
<br><br>
<form actiion ="{{route ('superpowers.destroy', $superpowers->id) }}" method="post">
@method('delete')
@csrf
<button type="submit"
 onclick="return confirm('are you sure you want to delete the dates?!')">Delete!!?
</button>


</form>

</body>
</html>


