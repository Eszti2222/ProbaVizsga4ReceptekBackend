<?php

namespace App\Http\Controllers;

use App\Models\Receptek;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreReceptekRequest;
use App\Http\Requests\UpdateReceptekRequest;
use Illuminate\Http\Request;

class ReceptekController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    /*lekéri az összes receptet, hozzáteszi a kategóriát is
    with('kategoria') kapcsolatot hív meg modelben definiált function neve
    */
    public function index()
    {
        return Receptek::with('kategoriak')->get();
    }

    /**
     * Store a newly created resource in storage.
     */

    /*új receptet ment az adatbázisba
    $request->all() minden bejövő adatot kivesz
    create() automatikusan ment az adatbázisba,ezért kellett:$fillable
    */
    public function store(StoreReceptekRequest $request)// Request $request tartalmazza a frontendről jövő adatokat:nev,kat_id,stb.
    {
        return Receptek::create($request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show(Receptek $receptek)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateReceptekRequest $request, Receptek $receptek)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
 /*   public function destroy(Receptek $receptek)
    {
        Receptek::find($id)->delete(); //find($id) megkeresi az adott receptet
    }
*/

    public function destroy($id)
    {
        $recept = Receptek::find($id);
    
        if (!$recept) {
            return response()->json(['message' => 'Nincs ilyen recept'], 404);
        }
    
        $recept->delete();
    
        return response()->json(['message' => 'Törölve']);
    }

    public function szures($kat_id)
    {
        return Receptek::with('kategoriak')
            ->where('kat_id', $kat_id)
            ->get();
    }
}
