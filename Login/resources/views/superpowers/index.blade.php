<!DOCTYPE html>
<html>
<head>
  <title>Superheros Powers</title>
  <meta charset="UTF-8">
</head>
<body>
<table>
<thead>

<tr>
    <td>ID</td>
    <td>NAME</td>
    <td>DESCRIPTION</td>
<td></td>


</tr>
</thead>

<tbody>
   @forelse($superpowers as $superpower)
    <tr>
        <td>{{$superpower->id}}</td>
        <td>
         <a href="{{route('superpowers.show', $superpower->id) }}">{{$superpower->name}}</a> 
        </td>
        <td>{{$superpower->description}}</td>

    </tr>

    @empty

    @endforelse
</tbody>

</table>
<br>
<br>
<a href="{{ route('superpowers.create') }}">Create Superpower</a>



</body>
</html>


