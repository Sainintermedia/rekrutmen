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
        $dtwg = datawarga::groupBy('kampung')
        ->selectRaw('count(*) as total, kampung')
        ->get();
        
        $nik = DB::table('datawarga')->paginate();
        $perempuan = datawarga::where('jeniskelamin','PEREMPUAN')->get();
        $laki2 = datawarga::where('jeniskelamin','LAKI LAKI')->get();
 
        $data= [
            'kk'=>$kk,
            'nik'=>$nik,
            'perempuan'=>$perempuan,
            'laki2'=>$laki2
        ];
 

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
