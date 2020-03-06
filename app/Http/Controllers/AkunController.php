<?php

namespace App\Http\Controllers;

use App\Akun;
use Illuminate\Http\Request;

class AkunController extends Controller
{
    public function index()
    {
        $akun = Akun::all();
        return view('akun.index', compact('akun'));
    }

    public function create()
    {
        $akun = Akun::all();
        return view('akun.create' ,compact('akun'));
    }

    public function store(Request $request)
    {
        $akun = new Akun;
        $akun->nama = $request->nama;
        $akun->tlpn = $request->tlpn;
        $akun->email = $request->email;
        $akun->save();
        return redirect()->route('akun.index')->with(['message' => 'Data akun Berhasil disimpan']);
    }

    public function show($id)
    {
        $akun = Akun::findOrFail($id);
        return view('akun.show', compact('akun'));
    }

    public function edit($id)
    {
        $akun = Akun::findOrFail($id);
        return view('akun.edit', compact('akun'));
    }

    public function update(Request $request, $id)
    {
        $akun = Akun::findOrFail($id);
        $akun->nama = $request->nama;
        $akun->tlpn = $request->tlpn;
        $akun->email = $request->email;
        $akun->save();
        return redirect()->route('akun.index')->with(['message' => 'Data akun Berhasil disimpan']);
    }

    public function destroy($id)
    {
        $akun = Akun::findOrFail($id);
        $akun->delete();
        return redirect()->route('akun.index')->with(['message' => 'Data akun Berhasil dihapus']);
    }
}
