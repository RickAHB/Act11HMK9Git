@extends('layouts.master') <!---->
@section('content') <!--INCLUIR TODO LO QUE HAY EN section-->

    <div class="container mt-5">
    <h1>Edit SuperPower</h1>

    <form action="{{ route('superpowers.update', $superpowers->id) }}" method="post">
        @method('put')
        @csrf

        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" value="{{$superpowers->name}}" class="form-control">
        </div>

        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" cols="50" rows="5" class="form-control">{{$superpowers->description}}</textarea>
        </div>

        <div class="form-group text-center">
          <br>
            <button type="submit" class="btn btn-primary btn-lg mx-auto d-block">Edit Superpower!!</button>
        </div>
    </form>
</div>

<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>

</body>
</html>

@endsection
