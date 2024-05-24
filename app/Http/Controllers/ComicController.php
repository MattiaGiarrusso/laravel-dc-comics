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
        $newComic->title = $formComic['title'];
        $newComic->description = $formComic['description'];
        $newComic->thumb = $formComic['thumb'];
        $newComic->price = $formComic['price'];
        $newComic->series = $formComic['series'];
        $newComic->sale_date = $formComic['sale_date'];
        $newComic->type = $formComic['type'];
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
        $comic = Comic::find($id);
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
        //
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
        //
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
