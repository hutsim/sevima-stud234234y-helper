<?php

namespace App\Http\Controllers;

use App\Models\Tugas;
use App\Models\Mapel;
use Illuminate\Http\Request;

class TugasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tugas = Tugas::where('user_id', auth()->user()->id)->get();
        $mapel = Mapel::where('user_id', auth()->user()->id)->get();
        return view('tugas.index', compact('tugas', 'mapel'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $tugas = new Tugas();
        $tugas->mapel_id = $request->mapel_id;
        $tugas->nama_tugas = $request->nama_tugas;
        $tugas->tenggat = $request->tenggat;
        $tugas->status = 'undone';
        $tugas->user_id = auth()->user()->id;
        $tugas->save();

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Tugas $tugas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $tugas = Tugas::find($id)->toArray();
        $mapel = Mapel::where('user_id', auth()->user()->id)->get();
        return response()->json(['tugas' => $tugas, 'mapel' => $mapel]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $tugas = Tugas::find($id);
        if ($request->status) {
            $status = $request->status;
            $tugas->status = $status;
        } else {
            $tugas->nama_tugas = $request->nama_tugas;
            $tugas->mapel_id = $request->mapel_id;
            $tugas->tenggat = $request->tenggat;
        }
        $tugas->save();

        return redirect('/tugas');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tugas $tugas)
    {
        //
    }

    public function hapus($id)
    {
        $tugas = Tugas::find($id);
        $tugas->delete();

        return redirect()->back();
    }
}
