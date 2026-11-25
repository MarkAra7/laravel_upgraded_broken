<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TagController extends Controller
{
    public function index(){
        $tags = Tags::all();
        return view('tags.index', compact('tags'));
    }
}
