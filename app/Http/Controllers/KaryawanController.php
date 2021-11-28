<?php

namespace App\Http\Controllers;

use App\Models\Karyawan;
use Carbon\Carbon;
use Illuminate\Http\Request;

class KaryawanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Karyawan::all();
        return view('Dashboard.Karyawan.karyawan', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Dashboard.Karyawan.Data.tambah-data');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // penomoran acak
        $data = Carbon::now()->format('Y-m-d');
        $now = Carbon::now();
        $thnBulan = $now->year . $now->month;
        $cek = Karyawan::count();
        if ($cek == 0) {
            $urut = 1001;
            $nomer = 'PGW'.$thnBulan.$urut;
            
        }else{
            $ambil = Karyawan::all()->last();
            $urut = (int)substr($ambil->code_karyawan, -4) + 1;
            $nomer = 'PGW'.$thnBulan.$urut;
            
        }

        $data = new Karyawan();
        $data->code_karyawan = $request->code_karyawan = $nomer;
        $data->nama = $request->nama;
        $data->jeniskelamin = $request->jeniskelamin;
        $data->notelp = $request->notelp;
        $data->alamat = $request->alamat;
        $data->save();
        return redirect()->route('data-karyawan')->with('success', 'Berhasil menambah data');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Karyawan  $karyawan
     * @return \Illuminate\Http\Response
     */
    public function show(Karyawan $karyawan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Karyawan  $karyawan
     * @return \Illuminate\Http\Response
     */
    public function edit(Karyawan $karyawan, $id)
    {
        $data = Karyawan::find($id);
        // dd($data);
        return view('Dashboard.Karyawan.Data.edit-data', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Karyawan  $karyawan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Karyawan $karyawan, $id)
    {
        $data = Karyawan::find($id);
        $data->update($request->all());
        return redirect()->route('data-karyawan', compact('data'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Karyawan  $karyawan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Karyawan $karyawan, $id)
    {
        $data = Karyawan::find($id);
        $data->delete();
        return redirect()->route('data-karyawan');

    }
}
