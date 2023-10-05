<?php

namespace App\Http\Controllers;

use App\Http\Requests\Storegudang_barangRequest;
use App\Http\Requests\Updategudang_barangRequest;
use App\Models\GudangBarang;
use Illuminate\Http\Request;

class GudangBarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = GudangBarang::all();
        return view("index", compact("data"));
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
    public function store(StoreGudang_BarangRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(GudangBarang $gudangBarang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(GudangBarang $gudang_barang)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateGudang_BarangRequest $request, GudangBarang $gudang_barang)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(GudangBarang $gudang_barang)
    {
        //
    }
}
