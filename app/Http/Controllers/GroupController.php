<?php

namespace App\Http\Controllers;

use App\Group;
use Illuminate\Http\Request;

class GroupController extends Controller
{
    public function index()
    {
        $group = Group::all();
        return view('group.index', compact('group'));
    }

    public function create()
    {
        $group = Group::all();
        return view('group.create' ,compact('group'));
    }

    public function store(Request $request)
    {
        $group = new Group;
        $group->nama_grup = $request->nama_grup;
        $group->anggota = $request->anggota;
        $group->save();
        return redirect()->route('group.index')->with(['message' => 'Data group Berhasil disimpan']);
    }

    public function show($edit)
    {
        $group = Group::findOrFail($id);
        return view('group.show', compact('group'));
    }

    public function edit($edit)
    {
        $group = Group::findOrFail($id);
        return view('group.edit', compact('group'));
    }

    public function update(Request $request, $edit)
    {
        $group = Group::findOrFail($id);
        $group->nama_grup = $request->nama_grup;
        $group->anggota = $request->kanggota;
        $group->save();
        return redirect()->route('group.index')->with(['message' => 'Data group Berhasil disimpan']);
    }

    public function destroy($edit)
    {

        $group = Group::findOrFail($id);
        $group->delete();
        return redirect()->route('group.index')->with(['message' => 'Data group Berhasil dihapus']);
    }
}
