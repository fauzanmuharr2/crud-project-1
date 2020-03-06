<?php

namespace App\Http\Controllers;
use App\Group;
use App\Akun;
use Illuminate\Http\Request;
use App\DB;

class GroupController extends Controller
{
    public function index()
    {
        $group = Group::with('akun')->get();
        return view('grup.index', compact('group'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $akun = Akun::all();
        return view('grup.create', compact('akun'));
    }

    public function store(Request $request)
    {
        $group = new Group;
        $group->akun_id = $request->akun_id;
        $group->nama_grup = $request->nama_grup;
        $group->save();
        return redirect()->route('group.index')->with(['message' => 'Data group Berhasil disimpan']);
    }


    public function show($id)
    {
        $group = Group::findOrFail($id);
        return view('grup.show', compact('group'));
    }

    public function edit($id)
    {
        $group = Group::findOrFail($id);
        $akun = Akun::all();
        return view('grup.edit', compact('group', 'akun'))->with(['message' => 'Data group Berhasil diedit']);
    }

    public function update(Request $request, $id)
    {
        $group = Group::findOrFail($id);
        $group->akun_id = $request->akun_id;
        $group->nama_grup = $request->nama_grup;
        $group->save();
        return redirect()->route('group.index')->with(['message' => 'Data group Berhasil disimpan']);
    }

    public function destroy($id)
        {
            $group = Group::findOrFail($id);
            $group->delete();
            return redirect()->route('grup.index')
                ->with(['message' => 'Data group Berhasil diHapus']);
    }
}
