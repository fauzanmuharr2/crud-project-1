<?php

namespace App\Http\Controllers;
use App\Profil;
use App\Akun;
use Illuminate\Http\Request;
use App\DB;

class ProfilController extends Controller
{
    public function index()
    {
        $profil = Profil::with('akun')->get();
        return view('profil.index', compact('profil'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $akun = Akun::all();
        return view('profil.create', compact('akun'));
    }

    public function store(Request $request)
    {
        $profil = new Profil;
        $profil->akun_id = $request->akun_id;
        $profil->alamat = $request->alamat;
        $profil->save();
        return redirect()->route('profil.index')->with(['message' => 'Data profil Berhasil disimpan']);
    }


    public function show($id)
    {
        $profil = Profil::findOrFail($id);
        return view('profil.show', compact('profil'));
    }

    public function edit($id)
    {
        $profil = Profil::findOrFail($id);
        $akun = Akun::all();
        return view('profil.edit', compact('profil', 'akun'))->with(['message' => 'Data profil Berhasil diedit']);
    }

    public function update(Request $request, $id)
    {
        $profil = Profil::findOrFail($id);
        $profil->akun_id = $request->akun_id;
        $profil->alamat = $request->alamat;
        $profil->save();
        return redirect()->route('profil.index')->with(['message' => 'Data profil Berhasil disimpan']);
    }

    public function destroy($id)
        {
            $profil = Profil::findOrFail($id);
            $profil->delete();
            return redirect()->route('profil.index')
                ->with(['message' => 'Data profil Berhasil diHapus']);
    }
}
