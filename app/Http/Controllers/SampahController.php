<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Libraries\BaseApi;

class SampahController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   $data = (new BaseApi)->index('/api/sampah');
        $sampah = $data->json();
        return view ('index')->with('sampah',$sampah['data']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('create');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $sampah = [
            'kepala_keluarga' => $request->kepala_keluarga,
            'no_rumah' => $request->no_rumah,
            'rt_rw' => $request->rt_rw,
            'total_karung_sampah' => $request->total_karung_sampah,
            'kriteria' => $request->kriteria,
            'tanggal_pengangkutan' => $request->tanggal_pengangkutan,
        ];

        
         $proses = (new BaseApi)->store('/api/sampah/create', $sampah);
         if ($proses->failed()) {
             $errors = $proses->json('sampah');
             return redirect()->back()->with(['errors' => $errors]);
         } else {
             return redirect('/index')->with('success', 'Berhasil menambahkan data');
         }
     
    }
    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        //
    }
}
