<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    public function index() {
        $items = Portfolio::latest()->get();
        return view('portfolio.index', compact('items'));
    }

    public function create() {
        return view('portfolio.create');
    }

    public function store(Request $request) {
        $request->validate([
            'title' => 'required',
            'description' => 'nullable',
            'image' => 'nullable|image|max:2048'
        ]);

        $imagePath = null;
        if($request->hasFile('image')){
            $imagePath = $request->file('image')->store('portfolio', 'public');
        }

        Portfolio::create([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $imagePath
        ]);

        return redirect()->route('portfolio.index')->with('success', 'Portfolio item created!');
    }

    public function edit(Portfolio $portfolio) {
        return view('portfolio.edit', compact('portfolio'));
    }

    public function update(Request $request, Portfolio $portfolio) {
        $request->validate([
            'title' => 'required',
            'description' => 'nullable',
            'image' => 'nullable|image|max:2048'
        ]);

        if($request->hasFile('image')){
            $portfolio->image = $request->file('image')->store('portfolio', 'public');
        }

        $portfolio->title = $request->title;
        $portfolio->description = $request->description;
        $portfolio->save();

        return redirect()->route('portfolio.index')->with('success', 'Portfolio item updated!');
    }

    public function destroy(Portfolio $portfolio) {
        $portfolio->delete();
        return redirect()->route('portfolio.index')->with('success', 'Portfolio item deleted!');
    }
}
