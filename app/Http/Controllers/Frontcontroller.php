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
        $sempur = Frontend::where('kampung','SEMPUR')->where('keterangan','belum')->get();
        $psempur = Frontend::where('jeniskelamin','PEREMPUAN')
        ->where('keterangan','belum')
        ->where('kampung','SEMPUR')->get();
        $lsempur = Frontend::where('jeniskelamin','LAKI LAKI')
        ->where('keterangan','belum')
        ->where('kampung','SEMPUR')->get();
        ////////////////////////////////////////////////////////////////////////
        //saradan///////////////////////////////////////////////////////////////////////////////
        $saradan = Frontend::where('kampung','SARADAN')
        ->where('keterangan','belum')->get();
        $psaradan = Frontend::where('jeniskelamin','PEREMPUAN')
        ->where('keterangan','belum')
        ->where('kampung','SARADAN')->get();
        $lsaradan = Frontend::where('jeniskelamin','LAKI LAKI')
        ->where('keterangan','belum')
        ->where('kampung','SARADAN')->get();
        ////////////////////////////////////////////////////////////////////////
        //sumurbandung///////////////////////////////////////////////////////////////////////////////
        $sumurbandung = Frontend::where('kampung','SUMURBANDUNG')
        ->where('keterangan','belum')->get();
        $psumurbandung = Frontend::where('jeniskelamin','PEREMPUAN')
        ->where('keterangan','belum')
        ->where('kampung','SUMURBANDUNG')->get();
        $lsumurbandung = Frontend::where('jeniskelamin','LAKI LAKI')
        ->where('keterangan','belum')
        ->where('kampung','SUMURBANDUNG')->get();
        ////////////////////////////////////////////////////////////////////////
        //kunir///////////////////////////////////////////////////////////////////////////////
        $kunir = Frontend::where('kampung','KUNIR')
        ->where('keterangan','belum')->get();
        $pkunir = Frontend::where('jeniskelamin','PEREMPUAN')
        ->where('keterangan','belum')
        ->where('kampung','KUNIR')->get();
        $lkunir = Frontend::where('jeniskelamin','LAKI LAKI')
        ->where('keterangan','belum')
        ->where('kampung','KUNIR')->get();
                ////////////////////////////////////////////////////////////////////////
        //kramat///////////////////////////////////////////////////////////////////////////////
        $kramat = Frontend::where('kampung','KRAMAT')
        ->where('keterangan','belum')->get();
        $pkramat = Frontend::where('jeniskelamin','PEREMPUAN')
        ->where('keterangan','belum')
        ->where('kampung','KRAMAT')->get();
        $lkramat = Frontend::where('jeniskelamin','LAKI LAKI')
        ->where('keterangan','belum')
        ->where('kampung','KRAMAT')->get();
        ////////////////////////////////////////////////////////////////////////
        //bendung///////////////////////////////////////////////////////////////////////////////
        $bendung = Frontend::where('kampung','BENDUNG')->where('keterangan','belum')->count();
        $pbendung = Frontend::where('jeniskelamin','PEREMPUAN')
        ->where('kampung','BENDUNG')
        ->where('keterangan','belum')->get();
        $lbendung = Frontend::where('jeniskelamin','LAKI LAKI')
        ->where('kampung','BENDUNG')
        ->where('keterangan','belum')->get();
        ////////////////////////////////////////////////////////////////////////
        //belum masuk dan udah masuk///////////////////////////////////////////////////////////////////////////////
        $belums = Frontend::where('keterangan','belum')->
        get();
        $pbelums = Frontend::where('keterangan','belum')->
        where('jeniskelamin','PEREMPUAN')->get();
        $lbelums = Frontend::where('keterangan','belum')->
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
        return view ('frontend.main',compact('udah','pudah','ludah','belums','pbelums','lbelums','bendung','pbendung','lbendung','kramat','pkramat','lkramat','kunir','pkunir','lkunir','sumurbandung','psumurbandung','lsumurbandung','saradan','sempur','psempur','lsempur','saradan','psaradan','lsaradan'));
    }

    public function databendung()
    {
        $bendung1 = Frontend::where('keterangan','belum')->where('kampung','BENDUNG')->get();
        // dd($data);
        return view ('frontend.content.data',compact('bendung1'));
  
       
    }
    public function datakramat()
    {
        $kramat1 = Frontend::where('keterangan','belum')->where('kampung','KRAMAT')->get();
        // dd($data);
        return view ('frontend.content.data',compact('kramat1'));
    }
    public function datasumurbandung()
    {
        $sumurbandung1 = Frontend::where('keterangan','belum')->where('kampung','SUMURBANDUNG')->get();
        // dd($data);
        return view ('frontend.content.data',compact('sumurbandung1'));
    }
    public function datasempur()
    {
        $sempur1 = Frontend::where('keterangan','belum')->where('kampung','SEMPUR')->get();
        // dd($data);
        return view ('frontend.content.data',compact('sempur1'));
    }
    public function datasaradan()
    {
        $saradan1 = Frontend::where('keterangan','belum')->where('kampung','SARADAN')->get();
        // dd($data);
        return view ('frontend.content.data',compact('saradan1'));
    }
    public function datakunir()
    {
        $kunir1 = Frontend::where('keterangan','belum')->where('kampung','KUNIR')->get();
        // dd($data);
        return view ('frontend.content.data',compact('kunir1'));
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
