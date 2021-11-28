<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Carbon\Carbon;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Barang::all();
        return view('Dashboard.Barang.barang', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $acak = Carbon::now()->format('Y-m-d');
        $now = Carbon::now();
        $thnBulan = $now->year . $now->month;
        $cek = Barang::count();
        if ($cek == 0) {
            $urut = 10000001;
            $nomer = 'CBG'.$thnBulan.$urut;
            
        }
        else{
            $ambil = Barang::all()->last();
            $urut = (int)substr($ambil->code_barang, -8) + 1;
            $nomer = 'CBG'.$thnBulan. $urut;  
        }
        return view('Dashboard.Barang.Data.create', compact('nomer'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $data = Carbon::now()->format('Y-m-d');
        // $now = Carbon::now();
        // $thnBulan = $now->year . $now->month;
        // $cek = Barang::count();
        // if ($cek == 0) {
        //     $urut = 10000001;
        //     $nomer = 'CBG'.$thnBulan.$urut;
            
        // }
        // else{
        //     $ambil = Barang::all()->last();
        //     $urut = (int)substr($ambil->id, -8) + 1;
        //     $nomer = 'CBG'.$thnBulan. $urut;  
        // }

        
        $validatedData = $request->validate([
            'code_barang' => 'required',
            'nama_barang' => 'required|max:255',
            'jenis_barang' => 'required',
            'harga_barang' => 'required',
            'image' => 'image|file|max:1024'
        ]);

        if($request->file('image')){
            $validatedData['image'] = $request->file('image')->store('post-image');
        }

        
        Barang::create($validatedData);
        return redirect()->route('databarang.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function show(Barang $barang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function edit(Barang $barang, $id)
    {
        $data = Barang::find($id);
        return view('Dashboard.Barang.Data.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Barang $barang, $id)
    {
        $data = Barang::find($id);
        $data->update($request->all());
        return redirect()->route('databarang.index', compact('data'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function destroy(Barang $barang, $id)
    {
        Barang::destroy($id);
        return redirect()->route('databarang.index');
    }
}
