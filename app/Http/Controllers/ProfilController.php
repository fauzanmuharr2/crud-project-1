<?php

namespace App\Http\Controllers;

use App\Profil;
use Illuminate\Http\Request;

class ProfilController extends Controller
{

    public function index()
    {
        $profil = Profil::all();
        return view('profil.index', compact('profil'));
    }

    public function create()
    {
        $profil = Profil::all();
        return view('profil.create' ,compact('profil'));
    }

    public function store(Request $request)
    {
        $profil = new Profil;
        $profil->nama = $request->nama;
        $profil->tgl_lahir = $request->tgl_lahir;
        $profil->alamat = $request->alamat;
        $profil->no_tlp = $request->no_tlp;
        $profil->save();
        return redirect()->route('profil.index')->with(['message' => 'Data profil Berhasil disimpan']);
    }

    public function show($edit)
    {
        $profil = Profil::findOrFail($id);
        return view('profil.show', compact('profil'));
    }

    public function edit($edit)
    {
        $profil = Profil::findOrFail($id);
        return view('profil.edit', compact('profil'));
    }

    public function update(Request $request, $edit)
    {
        $profil = Profil::findOrFail($id);
        $profil->nama = $request->nama;
        $profil->tgl_lahir = $request->tgl_lahir;
        $profil->alamat = $request->alamat;
        $profil->no_tlp = $request->no_tlp;
        $profil->save();
        return redirect()->route('profil.index')->with(['message' => 'Data profil Berhasil disimpan']);
    }

    public function destroy($edit)
    {

        $profil = Profil::findOrFail($id);
        $profil->delete();
        return redirect()->route('profil.index')->with(['message' => 'Data profil Berhasil dihapus']);
    }
}
