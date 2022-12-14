<?php

namespace App\Http\Controllers;
use App\Comic;

use Illuminate\Http\Request;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $comics = Comic::all();
        $page_data = $request->all();
        $deleted = isset($page_data['deleted']) ? $page_data['deleted'] : null;
        $data = [
            'comics' => $comics,
            'deleted' => $deleted
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
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Richiedo tutti i dati 
        $form_data = $request->all();

        // Validazione dei dati
        $request->validate($this->getValidationRules());

        // Salvo nel db i dati e creo una nuova riga
        $new_comic = new Comic();
        $new_comic->fill($form_data);
        $new_comic->save();
        return redirect()->route('comics.show', ['comic' => $new_comic->id]);

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

        $data = [
            'comic' => $comic
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

        $data = [
            'comic' => $comic
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
        // Validazione dei dati
        $request->validate($this->getValidationRules());

        $form_data = $request->all();

        $comic_to_update = Comic::findOrFail($id);
        $comic_to_update->update($form_data);

        // dd($form_data);

        return redirect()->route('comics.show', ['comic'=> $comic_to_update->id]);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $comic_to_delete = Comic::findOrFail($id);
        $comic_to_delete->delete();

        return redirect()->route('comics.index', ['deleted' => 'yes']);
    }

    protected function getValidationRules() {
        return [
            'title' => 'required|max:60',
            'series' => 'required|max:60',
            'type' => 'required|max:30',
            'description' => 'max:70000',
            'price' => 'required|max:6',
            'sale_date' => 'required',
            'thumb' => 'required|max:70000',
            
        ];
    }
}
