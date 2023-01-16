@extends('layout.head')

@section ('services')
    <h1 class="">Services
        <span class="badge text-bg-success">{{ $services->count() }}</span>
    </h1>
    <div class="d-flex flex-wrap">
        @foreach ($services as $service)
            <div class="card ms-3" style="width: 18rem;">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{ $service->title }}</h5>
                    <p class="card-text">{{ $service->description }}</p>
                    <p class="card-text">{{ $service->price }}$</p>
                    <a href="/admin/services/edit/{{ $service->id }}" class="btn btn-success mb-2">Edit</a>
                    <form action="/admin/service/delete" method="post">
                        @csrf
                        <input type="hidden" name="id" value="{{ $service->id }}">
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </div>
            </div>
        @endforeach
    </div>
    <a href="/admin/services" class="btn btn-primary mt-3">Add</a>
@endsection

@section('portfolio')
    <h1>Porfolio
        <span class="badge text-bg-success">{{ $portfolios->count() }}</span>
    </h1>

    <div class="d-flex flex-wrap">
        @foreach ($portfolios as $portfolio)
            <div class="card ms-3" style="width: 18rem;">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{$portfolio->title}}</h5>
                    <a href="/admin/portfolio/edit/{{ $portfolio->id }}" class="btn btn-success mb-2">Edit</a>
                    <form action="/admin/portfolio/delete" method="post">
                        @csrf
                        <input type="hidden" name="id" value="{{ $portfolio->id }}">
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </div>
            </div>
        @endforeach
    </div>

    <a href="/admin/portfolio" class="btn btn-primary mt-3">Add</a>
@endsection


