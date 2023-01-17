<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class ServicesController extends Controller
{
    public function show()
    {
        return view('services');
    }

    public function show_edit(int $id)
    {
        $service = Service::find($id);

        return view('services_edit', [
            'id' => $id,
            'title' => $service->title,
            'description' => $service->description,
            'price' => $service->price
        ]);
    }

    public function store(Request $request)
    {
        $data = $request->only('title', 'description', 'price', 'image');

        $image = Storage::put('/images', $data['image']);

        $services = Service::create([
            'title' => $data['title'],
            'description' => $data['description'],
            'price' => $data['price'],
            'image' => $image
        ]);

        return redirect()->back();
    }

    public function edit(Service $service, Request $request)
    {
        $service->update([
            'title' => $request->title,
            'description' => $request->description,
            'price' => $request->price
        ]);

        return redirect()->back();
    }

    public function destroy(Request $request)
    {
        $service = Service::find($request->id);

        if(!$service) {
            return abort(404);
        }

        $service->delete();

        return redirect()->back();
    }
}
