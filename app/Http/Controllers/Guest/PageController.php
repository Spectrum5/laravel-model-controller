<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\models\Movie;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        $movies = Movie::all();

    return view('homepage', compact('movies'));
    }
}
