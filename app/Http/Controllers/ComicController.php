<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comic;
use Illuminate\Support\Facades\Validator;

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
        $this->validation($formComic);
        
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
        $formComic = $request->all();
        $this->validation($formComic);
        $comic = Comic::findOrFail($id);

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
        $comic = Comic::findOrFail($id);
        $comic->delete();

        return redirect()->route('comics.index');
    }

    private function validation($data) {
        $validator = Validator::make(
            $data,
            [
                'title' => 'required|min:6|max:150',
                'description' => 'required|min:50|max:5000',
                'thumb' => 'max:500',
                'price' => 'required|min:3|max:9',
                'series' => 'required|min:5|max:50',
                'sale_date' => 'required|min:10|max:10',
                'type' => 'required|max:20',
            ],
            [
                'title.required' => 'Il campo titolo è obbligatorio',
                'title.min' => 'Il campo titolo deve avere almeno 6 caratteri',
                'title.max' => 'Il campo titolo non può avere più di 150 caratteri',
                'description.required' => 'Il campo descrizione è obbligatorio',
                'description.min' => 'Il campo descrizione deve contenere più di 50 caratteri',
                'description.max' => 'Il campo descrizione deve contenere meno di 5000 caratteri',
                'thumb.max' => 'Il campo copertina deve contenere meno di 500 caratteri',
                'price.required' => 'Il campo prezzo è obbligatorio',
                'price.min' => 'Il campo prezzo deve avere più di 2 caratteri',
                'price.max' => 'Il campo prezzo deve avere meno 10 caratteri',
                'series.required' => 'Il campo serie è obbligatorio',
                'series.min' => 'Il campo serie deve contenere più di 5 caratteri',
                'series.max' => 'Il campo serie deve contenere meno di 50 caratteri',
                'sale_date.required' => 'Il campo data di uscita è obbligatorio',
                'sale_date.min' => 'Il campo data di uscita deve contenere più di 9 caratteri',
                'sale_date.max' => 'Il campo data di uscita deve contenere meno di 11 caratteri',
                'type.required' => 'Il campo tipo è obbligatorio',
                'type.max' => 'Il campo tipo deve contenere meno di 21 caratteri',                
            ]
        )->validate();

        return $validator;
    }

}
