<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Portfolio;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function show()
    {
        $services = Service::All();
        $portfolios = Portfolio::All();
        return view('home', ['services' => $services,
                             'portfolios' => $portfolios]);
    }

}
