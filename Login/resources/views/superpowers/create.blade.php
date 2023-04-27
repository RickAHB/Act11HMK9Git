@extends('layouts.master') <!---->

@section('content') <!--INCLUIR TODO LO QUE HAY EN section-->

    <form action="{{ route('superpowers.store') }}" method="post">
        @csrf

        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control">
        </div>

        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" cols="50" rows="5" class="form-control"></textarea>
        </div>

        <div class="form-group text-center">
          <br>
            <button type="submit" class="btn btn-success btn-lg mx-auto d-block">Create!!</button>
        </div>
    </form>
</div>

<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>

</body>
</html>
@endsection
