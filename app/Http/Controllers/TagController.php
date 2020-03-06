<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tag;

class TagController extends Controller
{
    public function index()
    {
        $tag = Tag::all();
        return view('tag.index', compact('tag'));
    }

    public function create()
    {
        return view('tag.create');
    }

    public function store(Request $request)
    {
        $tag = new Tag;
        $tag->tag = $request->tag;
        $tag->save();
        return redirect()->route('tag.index')->with(['message' => 'Data tag Berhasil disimpan']);
    }

    public function show($id)
    {
        $tag = Tag::findOrFail($id);
        return view('tag.show', compact('tag'));
    }

    public function edit($id)
    {
        $tag = Tag::findOrFail($id);
        return view('tag.edit', compact('tag'));
    }

    public function update(Request $request, $id)
    {
        $tag = Tag::findOrFail($id);
        $tag->tag = $request->tag;
        $tag->save();
        return redirect()->route('tag.index')->with(['message' => 'Data tag Berhasil disimpan']);
    }

    public function destroy($id)
    {
        $tag = Tag::findOrFail($id);
        $tag->delete();
        return redirect()->route('tag.index')->with(['message' => 'Data tag Berhasil dihapus']);
    }
}
