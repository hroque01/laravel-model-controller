<?php

namespace App\Http\Controllers;

use App\Models\Movies;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function home()
    {
        $movies = Movies::all();

        $data = [
            'movies' => $movies
        ];
        return view('pages.home', $data);
    }
}