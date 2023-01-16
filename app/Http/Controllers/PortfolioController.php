<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function show()
    {
        return view('portfolio');
    }

    public function store(Request $request)
    {
        $portfolio = Portfolio::create([
            'title' => $request->title
        ]);
        return redirect()->back();
    }

    public function showEdit(int $id)
    {
        $portfolio = Portfolio::find($id);

        return view('portfolio_edit', ['id' => $id,
                                       'title' => $portfolio->title]);
    }

    public function edit(Portfolio $portfolio, Request $request)
    {
        $portfolio->update([
            'title' => $request->title
        ]);

        return redirect()->back();
    }

    public function destroy(Request $request)
    {
        $portfolio = Portfolio::find($request->id)->delete();

        return redirect()->back();
    }
}
