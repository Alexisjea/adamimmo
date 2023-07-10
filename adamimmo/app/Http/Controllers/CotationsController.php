<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cotations;
use PDF;

class CotationsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $cotations = Cotations::all();
        return view('cotations.index' , compact('cotations'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('cotations.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'nomCota'=>'required'
        ]);

        $cotations = new Cotations;
        $cotations->nom = $request->get('nomCota');
        $cotations->save();
        return redirect('/cotations')->with('success', 'cotations Ajouté avec succès');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $cotations = Cotations::findOrFail($id);
        //
        return view("cotations.show", compact("cotations"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
    public function createPDF() {
        // retreive all records from db
        $cotations = Cotations::all();
        // share data to view
        view()->share('cotations',$cotations);
        $pdf = PDF::loadView('genpdf', [$cotations]);
        // download PDF file with download method
        return $pdf->download('Cotations.pdf');
    }
}
