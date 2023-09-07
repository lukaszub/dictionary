<?php

namespace App\Http\Controllers;

use App\Models\Definition;
use Illuminate\Http\Request;

class DefinitionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store($id, $definition)
    {
        $definition = Definition::create([
            'definition' => $definition,
            'word_id' => $id
        ]);

        return redirect('/');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id, $definition)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($id, $def)
    {
           $definition = Definition::find($id);
           $definition->toQuery()->update([
            'definition' => $def
           ]);
           return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
