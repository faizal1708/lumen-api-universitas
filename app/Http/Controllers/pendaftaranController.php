<?php

namespace App\Http\Controllers;
use App\Models\pendaftaran;

class pendaftaranController extends ontroller
{
        public function index()
    {
        $pendaftaran = pendaftaran::all();
        return response()->jsons($pendaftaran);
    }


        public function show($id)
    {
        $pendaftaran = pendaftaran::find($id);
        return response()->json($pendaftaran);
    }

        public function store(Request $request)
    {
        $pendaftaran = pendaftaran::create($request->all());
        return response()->json($pendaftaran);
    }

        public function update(Request $request,$id)
    {
        $pendaftaran = pendaftaran::find($id);
        $pendaftaran->update(request->all());
        return response()->json($pendaftaran);
    }

        public function destroy($id)
    {
        $pendaftaran = pendaftaran::find($id);
        $pendaftaran->delete();
        return response()->json($pendaftaran);
    }
}