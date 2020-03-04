<?php

namespace App\Http\Controllers;

use App\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    public function index()
    {
        $tag = Tag::all();
        return view('tag.index', compact('tag'));
    }

    public function create()
    {
        $tag = Tag::all();
        return view('tag.create' ,compact('tag'));
    }

    public function store(Request $request)
    {
        $tag = new Tag;
        $tag->tag = $request->tag;
        $tag->save();
        return redirect()->route('tag.index')->with(['message' => 'Data tag Berhasil disimpan']);
    }

    public function show($edit)
    {
        $tag = Tag::findOrFail($id);
        return view('tag.show', compact('tag'));
    }

    public function edit($edit)
    {
        $tag = Tag::findOrFail($id);
        return view('tag.edit', compact('tag'));
    }

    public function update(Request $request, $edit)
    {
        $tag = Tag::findOrFail($id);
        $tag->tag = $request->tag;
        $tag->save();
        return redirect()->route('tag.index')->with(['message' => 'Data tag Berhasil disimpan']);
    }

    public function destroy($edit)
    {

        $tag = Tag::findOrFail($id);
        $tag->delete();
        return redirect()->route('tag.index')->with(['message' => 'Data tag Berhasil dihapus']);
    }
}
