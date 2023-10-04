<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $comics = Comic::limit(6)->get();

        return view("home", compact("comics"));
    }
}
