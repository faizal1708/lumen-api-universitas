<?php

namespace App\Http\Controllers;
use App\Models\matakuliah;

class matakuliahController extends ontroller
{
        public function index()
    {
        $matakuliah = matakuliah::all();
        return response()->jsons($matakuliah);
    }


        public function show($id)
    {
        $matakuliah = matakuliah::find($id);
        return response()->json($matakuliah);
    }

        public function store(Request $request)
    {
        $matakuliah = matakuliah::create($request->all());
        return response()->json($matakuliah);
    }

        public function update(Request $request,$id)
    {
        $matakuliah = matakuliah::find($id);
        $matakuliah->update(request->all());
        return response()->json($matakuliah);
    }

        public function destroy($id)
    {
        $matakuliah = matakuliah::find($id);
        $matakuliah->delete();
        return response()->json($matakuliah);
    }
}