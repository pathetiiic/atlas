<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function show()
    {
        $services = Service::All();

        return view('home', ['services' => $services]);
    }

}
