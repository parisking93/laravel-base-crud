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
        $comic = Comic::paginate(2);
        return view('comics.index', compact('comic'));
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
        $data = $request->all();
        $newComic = new Comic();

        // aggiungo tutti i dati che ho insiserito sul form, usando fill... e grazie fillable (nel metod gli dico quali deve inserire)
        $newComic->fill($data);
        $newComic->save();

        return redirect()->route('comics.index')->with('nuovo', 'Hai aggiunto correttamente il nuovo record ');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $comicId = Comic::find($id);
        // dd($comicId);
        return view('comics.show', compact('comicId'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $comicId = Comic::find($id);
    
        
        return view('comics.edit', compact('comicId'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    //  uso le injection 
    public function update(Request $request, Comic $comic)
    {
        // vengo dal form di comic.edit e gli passo l'elemento da modificare
        $data = $request->all();
        // uso il metodo update per modificare il record 
        $comic->update($data);
        // ritorno alla index dove sono tutti i comic e uso redirect
        return redirect()->route('comics.index')->with('modificato', 'Hai modificato correttamente il record ' . $comic->id);
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
