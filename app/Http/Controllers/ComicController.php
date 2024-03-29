<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comic;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::all();
        // dd($comics);
        return view("comics.index", compact("comics"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("comics.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

        // $newComic = new Comic();
        // $newComic->title = $data["title"];
        // //    $newComic->description = $comic["description"];
        // $newComic->thumb = $data["thumb"];
        // $newComic->price = $data["price"];
        // //    $newComic->series = $comic["series"];
        // $newComic->date = $data["date"];
        // $newComic->type = $data["type"];
        // $newComic->save();


        // assegnazione massiva
        $newComic = Comic::create($data);
        
        return redirect()->route("comics.show", $newComic->id );
        // $newComic =  Comic::create($data);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     
     //N. B. HO USATO LA DEPENDENCY INJECTION IN ALTERNATIVA USO $id !!!
    public function show(Comic $comic)
    //N. B. HO USATO LA DEPENDENCY INJECTION IN ALTERNATIVA USO $id; vedi sotto find($id)!!!
    {
        // $comic = Comic::find($id);
        // dd($comic);
        return view("comics.show", compact("comic"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        return view("comics.edit", compact("comic"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic)
    {
        $data = $request->all();
        $comic->update($data);
        return redirect()->route("comics.show", $comic->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();
        return redirect()->route("comics.index");
    }
}
