<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movies;
class HomeController extends Controller
{
    public function index() {
        $movies = Movies::all();
        return view('home', compact('movies'));
    }
}
