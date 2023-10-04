<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ComicController extends Controller
{
    public function index()
    {
        $comics = Comic::all();

        /* foreach ($comics as $key => $comics) {
            $comics[$key]["short_description"] = $this->truncate($comics["description"], 100);
        } */

        return view("comics.index", ["comics" => $comics]);
    }

    // TRASH FUNCTION (crea una pagina index con i prodotti cancellati in soft-delete, tramite un button li potrò ripristinare o eliminare definitivamente)

    public function trash() {
        $comics = Comic::onlyTrashed();

        /* foreach ($comics as $key => $comics) {
            $comics[$key]["short_description"] = $this->truncate($comics["description"], 100);
        } */

        return view("comics.trash", ["comics" => $comics]);
    }

    // SHOW FUNCTION

    public function show($id)
    {
        $comics = Comic::findOrFail($id);

        /* if (!comics) {
            abort(404);
        } */

        return view("comics.show", ["comics" => $comics]);

        // return redirect()->route("comics.show", $comics->id);
    }

    // CREATE FUNCTION

    public function create()
    {
        // return redirect()->route("comics.create");

        return view("comics.create");
    }

    // STORE FUNCTION

    public function store(Request $request)
    {

        $comics = $request->all();

        $newComic = new Comic();

        $newComic->image = $comics["image"];
        $newComic->title = $comics["title"];
        $newComic->description = $comics["description"];
        $newComic->price = intval(str_replace(" $", "", $comics["price"]));
        $newComic->series = $comics["series"];
        $newComic->sale_date = $comics["sale_date"];
        $newComic->type = $comics["type"];

        $newComic->save();

        return redirect()->route("comics.index", $newComic->id);
    }

    // EDIT FUNCTION

    public function edit($id)
    {
        $comics = Comic::findOrFail($id);

        return view("comics.edit", ["comics" => $comics]);
    }

    // UPDATE FUNCTION

    public function update(Request $request, $id) {
        $comics = Comic::findOrFail($id);
        
        $comics = $request->all();

        $comic = new Comic();

        $comic->image = $comics["image"];
        $comic->title = $comics["title"];
        $comic->description = $comics["description"];
        $comic->price = intval(str_replace(" $", "", $comics["price"]));
        $comic->series = $comics["series"];
        $comic->sale_date = $comics["sale_date"];
        $comic->type = $comics["type"];

        $comic->update($comics);
    }

    // DELETE FUNCTION

    public function destroy($id) {
        $comics = Comic::findOrFail($id);

        $comics->delete();

        return redirect()->route("comics.index");
    }

    /* TRUNCATE


    private function truncate($text, $chars = 25)
    {
        if (strlen($text) <= $chars) {
            return $text;
        }
        $text = $text . " ";
        $text = substr($text, 0, $chars);
        $text = substr($text, 0, strrpos($text, ' '));
        $text = $text . "...";
        return $text;
    }
    */
}
