<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comic;

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
        $footers = config('footerLinks');

        
        $data = [
            'comics'=> $comics,
            'footers'=> $footers
        ];

        return view('comics.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $footers = config('footerLinks');

        $data = [
            'footers'=> $footers            
        ];

        return view('comics.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $formComic = $request->all();
        
        $newComic = new Comic();
        // $newComic->title = $formComic['title'];
        // $newComic->description = $formComic['description'];
        // $newComic->thumb = $formComic['thumb'];
        // $newComic->price = $formComic['price'];
        // $newComic->series = $formComic['series'];
        // $newComic->sale_date = $formComic['sale_date'];
        // $newComic->type = $formComic['type'];
        $newComic-> fill($formComic);
        $newComic->save();

        return redirect()->route('comics.show', ['comic' => $newComic->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $comic = Comic::findOrFail($id);
        $footers = config('footerLinks');

        $data = [
            'comic' => $comic,
            'footers'=> $footers
        ];

        return view('comics.show', $data);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $comic = Comic::findOrFail($id);
        $footers = config('footerLinks');

        $data = [
            'comic' => $comic,
            'footers'=> $footers
        ];

        return view('comics.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $comic = Comic::findOrFail($id);
        $formComic = $request->all();

        // $comic->title = $formComic['title'];
        // $comic->description = $formComic['description'];
        // $comic->thumb = $formComic['thumb'];

        $comic->update($formComic);

        return redirect()-> route('comics.show', ['comic'=> $comic-> id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
