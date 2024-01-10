<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request; 
use App\Models\dosen;

class dosenController extends Controller
{
    public function index()
    {
        $dosen = dosen::all();
        return response()->json($dosen);
    }


    public function show($id)
    {
        $dosen = dosen::find($id);
        return response()->json($dosen);
    }

    public function store(Request $request)
    {
        $dosen = dosen::create($request->all());
        return response()->json("Dosen Telah Ditambah");
    }

    public function update(Request $request,$id)
    {
        $dosen = dosen::find($id);
        $dosen->update($request->all());
        return response()->json("Dosen Telah Diupdate");
    }

    public function destroy($id)
    {
        $dosen = dosen::find($id);
        $dosen->delete();
        return response()->json("Dosen Telah Dihapus");
    }
}