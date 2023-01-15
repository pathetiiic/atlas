@extends('layout.head')

@section ('card')
    <h1>Services</h1>


        <div class="d-flex flex-wrap">
            @foreach ($services as $service)
                <div class="card ms-3" style="width: 18rem;">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{ $service->title }}</h5>
                        <p class="card-text">{{ $service->description }}</p>
                        <p class="card-text">{{ $service->price }}$</p>
                        <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                            <a href="/admin/services/edit/{{ $service->id }}" class="btn btn-success">Edit</a>
                            <button type="button" class="btn btn-danger">Delete</button>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    <a href="/admin/services" class="btn btn-primary mt-3">Add</a>
@endsection


