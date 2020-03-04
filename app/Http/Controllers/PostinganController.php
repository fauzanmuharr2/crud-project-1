<?php

namespace App\Http\Controllers;

use App\Postingan;
use Illuminate\Http\Request;

class PostinganController extends Controller
{
    public function index()
    {
        $postingan = Postingan::all();
        return view('postingan.index', compact('postingan'));
    }

    public function create()
    {
        $postingan = Postingan::all();
        return view('postingan.create' ,compact('postingan'));
    }

    public function store(Request $request)
    {
        $postingan = new Postingan;
        $postingan->deskripsi = $request->deskripsi;
        $postingan->kategori = $request->kategori;
        $postingan->save();
        return redirect()->route('postingan.index')->with(['message' => 'Data postingan Berhasil disimpan']);
    }

    public function show($edit)
    {
        $postingan = Postingan::findOrFail($id);
        return view('postingan.show', compact('postingan'));
    }

    public function edit($edit)
    {
        $postingan = Postingan::findOrFail($id);
        return view('postingan.edit', compact('postingan'));
    }

    public function update(Request $request, $edit)
    {
        $postingan = Postingan::findOrFail($id);
        $postingan->deskripsi = $request->deskripsi;
        $postingan->kategori = $request->kategori;
        $postingan->save();
        return redirect()->route('postingan.index')->with(['message' => 'Data postingan Berhasil disimpan']);
    }

    public function destroy($edit)
    {

        $postingan = Postingan::findOrFail($id);
        $postingan->delete();
        return redirect()->route('postingan.index')->with(['message' => 'Data postingan Berhasil dihapus']);
    }
}
