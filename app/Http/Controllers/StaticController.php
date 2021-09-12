<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comic;

class StaticController extends Controller
{
    public function home(){

        $comics = Comic::all();
        return view('home', compact('comics'));
    }
    
}
