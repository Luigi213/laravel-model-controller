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

    public function detail($id){
        $single = Comic::find($id + 1);

        return view('detail_comic', compact('single'));
    }
}