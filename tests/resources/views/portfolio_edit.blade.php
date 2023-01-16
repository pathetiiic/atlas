@extends('layout.edit')

@section('edit')
    <form action="/admin/portfolio/edit/{{ $id }}" method="post">
        @method('put')
        @csrf

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Title</label>
            <input name="title" value="{{ $title }}" type="text" class="form-control" id="exampleInputEmail1">
        </div>

        <input type="text" hidden value="{{ $id }}">

        <button type="submit" class="btn btn-primary">Edit</button>
    </form>
@endsection
