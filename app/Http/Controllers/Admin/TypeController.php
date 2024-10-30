<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

// Models
use App\Models\Type;

class TypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $types = Type::get();

        return view('admin.types.index', compact('types'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.types.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|min:3|max:255'
        ], [
            'name.required' => 'Il nome del tipo è obbligatorio',
        ]);

        $data['slug'] = str()->slug($data['name']);

        $type = Type::create($data);

        return redirect()->route('admin.types.show', ['Type' => $type->id]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Type $type)
    {
        return view('admin.types.show', compact('type'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Type $type)
    {
        return view('admin.types.edit', compact('Type'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Type $type)
    {
        $data = $request->validate([
            'name' => 'required|min:3|max:255'
        ], [
            'name.required' => 'Il nome del tipo è obbligatorio',
        ]);

        $data['slug'] = str()->slug($data['name']);

        $type->update($data);

        return redirect()->route('admin.types.show', ['Type' =>$type->id]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Type $type)
    {
        $type->delete();

        return redirect()->route('admin.types.index');
    }
}