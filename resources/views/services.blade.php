@extends('layout.create')

@section('create')
    <form action="/admin/services/create" method="post" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Title</label>
            <input name="title" type="text" class="form-control" id="exampleInputEmail1">
        </div>

        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Description</label>
            <textarea name="description" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Price</label>
            <input name="price" type="number" min="1" value="1" class="form-control" id="exampleInputEmail1">
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Price</label>
            <input name="image" type="file" min="1" value="1" class="form-control" id="exampleInputEmail1">
        </div>

        <button type="submit" class="btn btn-primary">Add</button>
    </form>
@endsection
