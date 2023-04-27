@extends('layouts.master') <!---->

@section('content') <!--INCLUIR TODO LO QUE HAY EN section-->


    <div class="container mt-5">
    <h1>{{$superpowers->name}}</h1>
    <p>{{$superpowers->description}}</p>
    <a href="{{route ('superpowers.edit',$superpowers->id)}}" class="btn btn-primary mb-3">Edit Now!</a>

    <form action="{{route ('superpowers.destroy', $superpowers->id)}}" method="post">
        @method('delete')
        @csrf
        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete the data?!')">Delete!!?</button>
    </form>
</div>

<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>
@endsection
