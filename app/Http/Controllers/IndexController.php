<?php

namespace App\Http\Controllers;

use App\Models\CarPlate;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $carplates = CarPlate::orderBy('id', 'desc')->take(4)->get();
        return view('index', compact('carplates'));
    }
}

