<?php

namespace App\Http\Controllers;

use App\Models\Persoon;
use App\Models\PakketOptie;
use App\Models\Reservering;
use App\Models\ReserveringStatus;
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
    public function edit($reservering)
    {
        // dd($reservering);
        $reservering = Reservering::where('id', $reservering)->with(['PakketOptie'])->first();
        $PakketOpties = PakketOptie::all();
        return view('reservering.update', compact('reservering', 'PakketOpties'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Reservering $reservering)
    {

        if ($reservering->AantalKinderen > 0 && $request->PakketOptieId == "4") {
            return redirect()->route('reservering.edit', $reservering->id)
                ->with('error', 'Get optiepakket vrijgezellen feest is niet bedoelt voor kinderen');
        }

        $request->validate([
            'PakketOptieId' => 'required',
        ]);

        $reservering->update([
            'PakketOptieId' => $request->PakketOptieId,
        ]);

        return redirect()->route('reservering.index')
            ->with('success', 'PakketOptie is updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Reservering $reservering)
    {
        //
    }

    public function overzicht()
    {
        $reserveringen = Reservering::with(['persoon', 'ReserveringStatus'])->get()->sortByDesc('datum');

        return view('reservering.overzicht', [
            'reserveringen' => $reserveringen,
        ]);
    }
}
