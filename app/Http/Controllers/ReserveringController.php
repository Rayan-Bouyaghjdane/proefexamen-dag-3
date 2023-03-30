<?php

namespace App\Http\Controllers;

use App\Models\Persoon;
use App\Models\PakketOptie;
use App\Models\Reservering;
use Illuminate\Http\Request;

class ReserveringController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('reservering.index', [
            'reserverings' => Reservering::with(['persoon', 'PakketOptie'])->get(),
            // 'reservering' => Reservering::all(),
        ]);
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Reservering $reservering)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Reservering $reservering)
    {
        $reservering = Reservering::all();
        return view('reservering.update', compact('reservering'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Reservering $reservering)
    {
        $request->validate([
            'PersoonId' => 'required',
            'OpeningstijdId' => 'required',
            'TariefId' => 'required',
            'BaanId' => 'required',
            'PakketOptieId' => 'required',
            'ReserveringStatusId' => 'required',
            'Reserveringsnummer' => 'required',
            'Datum' => 'required',
            'AantalUren' => 'required',
            'BeginTijd' => 'required',
            'EindTijd' => 'required',
            'AantalVolwassenen' => 'required',
            'AantalKinderen' => 'required',
            'IsActief' => 'required',
            'Opmerking' => 'nullable',
        ]);

        $reservering->update($request->all());

        return redirect()->route('reservering.index')
            ->with('success', 'Reservering updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Reservering $reservering)
    {
        //
    }
}
