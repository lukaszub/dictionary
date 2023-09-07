<?php

namespace App\Http\Controllers;

use App\Models\Definition;
use App\Models\Word;
use Illuminate\Http\Request;

class WordController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $test = Word::find(1)->definition;
        // dd($test->definition);

       return view('pages.word.index',[
        'words' => Word::all()
        
       ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.word.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $form = $request->validate([
            'word' => 'required',
            'definition' => 'required'
        ]);
         $word = Word::create($form);
         (new DefinitionController)->store($word->id, $request->definition);
        
        return redirect('/')->with('message', "Słowo zostało zapisane!");
    }

    /**
     * Display the specified resource.
     */
    public function show(Word $word)
    {
        return view('pages.word.show',[
            'word' => $word
        ]);
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Word $word)
    {
        //dd($word->definition->id);
        return view('pages.word.edit',[
            'word' => $word,
            'definition' => $word->definition
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Word $word, Definition $definition)
    {
        //dd($definition);
        $form = $request->validate([
            'word' => 'required',
            'definition' => 'nullable'
        ]);

        $word->update($form);
       // dd($request);
        (new DefinitionController)->update($definition, $request->definition);

        return redirect('/')->with('message', "Słowo zostało zapisane!");;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
