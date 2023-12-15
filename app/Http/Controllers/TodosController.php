<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Todo::all();
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
    public function store(Request $request)
    {
        $data = $request -> validate([
            'title' => 'required|string',
            'completed' => 'required|boolean'
        ]);
        
        $todo = Todo::create($data);
        return response($todo, 201);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Todo $todo)
    {
        $data = $request -> validate([
            'title' => 'required|string',
            'completed' => 'required|boolean'
        ]);
        
        $todo->update($data);
        return response($todo, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Todo $todo)
    {
        $todo -> delete();
        return response('deleted todo item', 200);
    }
}
