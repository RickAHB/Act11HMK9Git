@extends('layouts.master') <!---->

@section('content') <!--INCLUIR TODO LO QUE HAY EN section-->
    

    <table class="table table-striped text-center">
    <thead>
        <tr>
            <th>ID</th>
            <th>NAME</th>
            <th>DESCRIPTION</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($superpowers as $superpower)
        <tr>
            <td>{{$superpower->id}}</td>
            <td>
                <a href="{{ route('superpowers.show', $superpower->id)}}">{{$superpower->name}}</a>
            </td>
            <td>{{$superpower->description}}</td>
        </tr>
        @empty
        <tr>
            <td colspan="3">There're no Superpowers</td>
        </tr>
        @endforelse
    </tbody>
</table>

<br>

<div class="row mb-4">
<div class="form-group text-center">
        <a href="{{ route('superpowers.create') }}" class="btn btn-success">Create Superpower</a>
    </div>
</div>

@endsection


