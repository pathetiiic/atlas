@extends('layout.edit')

@section("edit")
    <form action="/admin/services/edit/{{ $id }}" method="post">
        @csrf

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Title</label>
            <input name="title" value="{{ $title }}" type="text" class="form-control" id="exampleInputEmail1">
        </div>

        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Description</label>
            <textarea name="description" class="form-control" id="exampleFormControlTextarea1" rows="3">{{ $description }}</textarea>
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Price</label>
            <input name="price" type="number" min="1" value="{{ $price }}" class="form-control" id="exampleInputEmail1">
        </div>

        <input type="text" hidden value="{{ $id }}">

        <button type="submit" class="btn btn-primary">Edit</button>
    </form>
@endsection
