<?php

namespace App\Http\Controllers;

use App\Models\Kategoriak;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreKategoriakRequest;
use App\Http\Requests\UpdateKategoriakRequest;

class KategoriakController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    /*visszaadja az összes kategóriát
    azért kell mert:legördülő menü kategóriákból kell majd választani*/
    public function index()
    {
        return Kategoriak::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreKategoriakRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Kategoriak $kategoriak)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateKategoriakRequest $request, Kategoriak $kategoriak)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kategoriak $kategoriak)
    {
        //
    }
}
