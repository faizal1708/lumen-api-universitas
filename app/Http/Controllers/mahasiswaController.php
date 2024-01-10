<?php

namespace App\Http\Controllers;
use App\Models\mahasiswa;

class mahasiswaController extends ontroller
{
        public function index()
    {
        $mahasiswa = mahasiswa::all();
        return response()->jsons($mahasiswa);
    }


        public function show($id)
    {
        $mahasiswa = mahasiswa::find($id);
        return response()->json($mahasiswa);
    }

        public function store(Request $request)
    {
        $mahasiswa = mahasiswa::create($request->all());
        return response()->json($mahasiswa);
    }

        public function update(Request $request,$id)
    {
        $mahasiswa = mahasiswa::find($id);
        $mahasiswa->update(request->all());
        return response()->json($mahasiswa);
    }

        public function destroy($id)
    {
        $mahasiswa = mahasiswa::find($id);
        $mahasiswa->delete();
        return response()->json($mahasiswa);
    }
}