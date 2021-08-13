<?php

namespace App\Http\Controllers;

use App\Models\Frontend;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Frontcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // $dtwg = Frontend::groupBy('kampung')
        // ->selectRaw('count(*) as total, kampung')
        // ->get();
        
        $nik = DB::table('datawarga')->paginate();

        //SEMPUR///////////////////////////////////////////////////////////////////////////////
        $sempur = Frontend::where('kampung','SEMPUR')->get();
        $psempur = Frontend::where('jeniskelamin','PEREMPUAN')
        ->where('kampung','SEMPUR')->get();
        $lsempur = Frontend::where('jeniskelamin','LAKI LAKI')
        ->where('kampung','SEMPUR')->get();
        ////////////////////////////////////////////////////////////////////////
        //saradan///////////////////////////////////////////////////////////////////////////////
        $saradan = Frontend::where('kampung','SARADAN')->get();
        $psaradan = Frontend::where('jeniskelamin','PEREMPUAN')
        ->where('kampung','SARADAN')->get();
        $lsaradan = Frontend::where('jeniskelamin','LAKI LAKI')
        ->where('kampung','SARADAN')->get();
        ////////////////////////////////////////////////////////////////////////
        //sumurbandung///////////////////////////////////////////////////////////////////////////////
        $sumurbandung = Frontend::where('kampung','SUMURBANDUNG')->get();
        $psumurbandung = Frontend::where('jeniskelamin','PEREMPUAN')
        ->where('kampung','SUMURBANDUNG')->get();
        $lsumurbandung = Frontend::where('jeniskelamin','LAKI LAKI')
        ->where('kampung','SUMURBANDUNG')->get();
        ////////////////////////////////////////////////////////////////////////
        //kunir///////////////////////////////////////////////////////////////////////////////
        $kunir = Frontend::where('kampung','KUNIR')->get();
        $pkunir = Frontend::where('jeniskelamin','PEREMPUAN')
        ->where('kampung','KUNIR')->get();
        $lkunir = Frontend::where('jeniskelamin','LAKI LAKI')
        ->where('kampung','KUNIR')->get();
                ////////////////////////////////////////////////////////////////////////
        //kramat///////////////////////////////////////////////////////////////////////////////
        $kramat = Frontend::where('kampung','KRAMAT')->get();
        $pkramat = Frontend::where('jeniskelamin','PEREMPUAN')
        ->where('kampung','KRAMAT')->get();
        $lkramat = Frontend::where('jeniskelamin','LAKI LAKI')
        ->where('kampung','KRAMAT')->get();
        ////////////////////////////////////////////////////////////////////////
        //bendung///////////////////////////////////////////////////////////////////////////////
        $bendung = Frontend::where('kampung','BENDUNG')->get();
        $pbendung = Frontend::where('jeniskelamin','PEREMPUAN')
        ->where('kampung','BENDUNG')->get();
        $lbendung = Frontend::where('jeniskelamin','LAKI LAKI')
        ->where('kampung','BENDUNG')->get();
        ////////////////////////////////////////////////////////////////////////
        //belum masuk dan udah masuk///////////////////////////////////////////////////////////////////////////////
        $belum = Frontend::where('keterangan','belum')->
        get();
        $pbelum = Frontend::where('keterangan','belum')->
        where('jeniskelamin','PEREMPUAN')->get();
        $lbelum = Frontend::where('keterangan','belum')->
        where('jeniskelamin','LAKI LAKI')->get();
                //UDAH masuk dan udah masuk//////////////////////////////
        $udah = Frontend::where('keterangan','udah')->get();
        $pudah = Frontend::where('keterangan','udah')
        -> where('jeniskelamin','PEREMPUAN')->get();
        $ludah = Frontend::where('keterangan','udah')->
        where('jeniskelamin','LAKI LAKI')->get();
        // $lbendung = Frontend::where('jeniskelamin','LAKI LAKI')
        // ->where('kampung','BENDUNG')->get();
        ////////////////////////////////////////////////////////////////////////

        // dd($data);
        return view ('frontend.main',compact('udah','pudah','ludah','belum','pbelum','lbelum','bendung','pbendung','lbendung','kramat','pkramat','lkramat','kunir','pkunir','lkunir','sumurbandung','psumurbandung','lsumurbandung','saradan','sempur','psempur','lsempur','saradan','psaradan','lsaradan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Frontend  $frontend
     * @return \Illuminate\Http\Response
     */
    public function show(Frontend $frontend)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Frontend  $frontend
     * @return \Illuminate\Http\Response
     */
    public function edit(Frontend $frontend)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Frontend  $frontend
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Frontend $frontend)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Frontend  $frontend
     * @return \Illuminate\Http\Response
     */
    public function destroy(Frontend $frontend)
    {
        //
    }
}
