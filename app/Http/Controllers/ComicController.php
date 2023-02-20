<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Comic;

class ComicController extends Controller
{
    public function index(){
        $comics = Comic::all();

        return view('home', compact('comics'));
    }

    public function detail($slug){
        $comics = Comic::where('slug', '=', $slug)->get();

        $single = $comics[0];

        return view('detail_comic', compact('single'));
    }
}