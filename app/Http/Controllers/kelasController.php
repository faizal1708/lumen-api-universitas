<?php

namespace App\Http\Controllers;
use App\Models\kelas;

class kelasController extends ontroller
{
        public function index()
    {
        $kelas = kelas::all();
        return response()->jsons($kelas);
    }


        public function show($id)
    {
        $kelas = kelas::find($id);
        return response()->json($kelas);
    }

        public function store(Request $request)
    {
        $kelas = kelas::create($request->all());
        return response()->json($kelas);
    }

        public function update(Request $request,$id)
    {
        $kelas = kelas::find($id);
        $kelas->update(request->all());
        return response()->json($kelas);
    }

        public function destroy($id)
    {
        $kelas = kelas::find($id);
        $kelas->delete();
        return response()->json($kelas);
    }
}