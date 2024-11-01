<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;

class BarangController extends Controller
{
    //
    public function index()
    {
        //
        $barang = Barang::all();
        return view('index',compact('barang'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'nama_barang' => 'required|string|max:100',
            'jenis_barang' => 'required|string|max:100',
            'stock' => 'nullable|integer',
            'status' => 'nullable|string|max:20',
            'harga_satuan' => 'nullable|integer',
        ], [
            'stock.integer' => 'stock hanya bisa diinput menggunakan angka.',
        ]);
        Barang::create([
            'nama_barang'=> $request->nama_barang,
            'jenis_barang' => $request->jenis_barang,
            'stock' => $request->stock,
            'status' => $request->status,
            'harga_satuan' => $request->harga_satuan,
        ]);
        return redirect()->route('barang.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Barang $barang)
    {
        //

        return view('edit',compact('barang'));
    
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Barang $barang)
    {
        $request->validate([
            'nama_barang' => 'required|string|max:100',
            'jenis_barang' => 'required|string|max:100',
            'stock' => 'nullable|integer',
            'status' => 'nullable|string|max:20',
            'harga_satuan' => 'nullable|integer',
        ], [
            'stock.integer' => 'stock hanya bisa diinput menggunakan angka',
        ]);
        $barang->update([
            'nama_barang'=> $request->nama_barang,
            'jenis_barang' => $request->jenis_barang,
            'stock' => $request->stock,
            'status' => $request->status,
            'harga_satuan' => $request->harga_satuan,
        ]);
        return redirect()->route('barang.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Barang $barang)
    {
        //
    
        
        $barang->delete();
        return redirect()->route('barang.index');
    }

}
