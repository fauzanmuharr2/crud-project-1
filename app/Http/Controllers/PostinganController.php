<?php

namespace App\Http\Controllers;
use App\Postingan;
use App\Akun;
use Illuminate\Http\Request;
use App\DB;

class PostinganController extends Controller
{
    public function index()
    {
        $postingan = Postingan::with('akun')->get();
        return view('postingan.index', compact('postingan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $akun = Akun::all();
        return view('postingan.create', compact('akun'));
    }

    public function store(Request $request)
    {
        $postingan = new Postingan;
        $postingan->akun_id = $request->akun_id;
        $postingan->deskripsi = $request->deskripsi;
        $postingan->kategori = $request->kategori;
        $postingan->save();
        return redirect()->route('postingan.index')->with(['message' => 'Data postingan Berhasil disimpan']);
    }


    public function show($id)
    {
        $postingan = Postingan::findOrFail($id);
        return view('postingan.show', compact('postingan'));
    }

    public function edit($id)
    {
        $postingan = Postingan::findOrFail($id);
        $akun = Akun::all();
        return view('postingan.edit', compact('postingan', 'akun'))->with(['message' => 'Data postingan Berhasil diedit']);
    }

    public function update(Request $request, $id)
    {
        $postingan = Postingan::findOrFail($id);
        $postingan->akun_id = $request->akun_id;
        $postingan->deskripsi = $request->deskripsi;
        $postingan->kategori = $request->kategori;
        $postingan->save();
        return redirect()->route('postingan.index')->with(['message' => 'Data postingan Berhasil disimpan']);
    }

    public function destroy($id)
        {
            $postingan = Postingan::findOrFail($id);
            $postingan->delete();
            return redirect()->route('postingan.index')
                ->with(['message' => 'Data postingan Berhasil diHapus']);
    }
}
