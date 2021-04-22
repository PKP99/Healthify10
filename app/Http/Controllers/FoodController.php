<?php

namespace App\Http\Controllers;

use App\Models\food;
use Illuminate\Http\Request;

class FoodController extends Controller
{
    public function index()
    {
        $fooditems = food::all();
        return view('welcome')->with('fooditems', $fooditems);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(food $food)
    {
        //
    }

    public function edit(food $food)
    {
        //
    }

    public function update(Request $request, food $food)
    {
        //
    }

    public function destroy(food $food)
    {
        //
    }
}
