<?php

namespace App\Http\Controllers;

use Resources\Views\Comics\Index;
use App\Models\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller {

    public function index() {
        $comics = Comic::all();

        return view("comics.index", ["dati" => $comics]);
    }
}