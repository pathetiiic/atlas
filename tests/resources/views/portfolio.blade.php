@extends('layout.create')

@section('create')
    <form action="/admin/portfolio/create" method="post">
        @csrf

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Title</label>
            <input name="title" type="text" class="form-control" id="exampleInputEmail1">
        </div>

        <button type="submit" class="btn btn-primary">Add</button>
    </form>
@endsection
