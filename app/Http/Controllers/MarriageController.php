<?php

namespace App\Http\Controllers;

use App\Models\Marriage;
use App\Models\MarriageR;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MarriageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $marriages = Marriage::all();
        return view('marriages.index',['marriages'=>$marriages]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('marriages.create');
    }
    public function costmcreate( string $marriagesr)
    {
        $index = MarriageR::find($marriagesr);
        return view('marriages.create',['numOrd'=>$index['numOrd']]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {



       $marriage= new Marriage();
       $marriage->numOrd =$request->input('numOrd');
       $marriage->decision = $request->input('decision');
       $marriage->demand_accus = $request->input('demand_accus');
       $marriage->refer_w = $request->input('refer_w');
       $marriage->numId_w = $request->input('numId_w');
       $marriage->add_w = $request->input('add_w');
       $marriage->nation_w = $request->input('nation_w');
       $marriage->nissan_w = $request->input('nissan_w');
       $marriage->ident_w = $request->input('ident_w');
       $marriage->nissan_p_etrang = $request->input('nissan_p_etrang');
       $marriage->nomCompl_p_etrang = $request->input('nomCompl_p_etrang');
       $marriage->numIden_p_etrang = $request->input('numIden_p_etrang');
       $marriage->add_p_etrang = $request->input('add_p_etrang');
       $marriage->nationa_p_etrang = $request->input('nationa_p_etrang');
       $marriage->statuFamil_p_etrang = $request->input('statuFamil_p_etrang');
       $marriage->religion_etrang = $request->input('religion_etrang');
       $marriage->nissan_p_MA = $request->input('nissan_p_MA');
       $marriage->nomCompl_p_MA = $request->input('nomCompl_p_MA');
       $marriage->ident_p_MA = $request->input('ident_p_MA');
       $marriage->add_p_MA = $request->input('add_p_MA');
       $marriage->statuFamil_p_MA = $request->input('statuFamil_p_MA');
       $marriage->creatBy = Auth::user()->username;

       $marriage->save();
       return view('marriages.index',['msg'=>'تمت الاضافة']);
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
    public function edit(string $marriage)
    {
        $index = Marriage::find($marriage);
        return view('marriages.edit',['marriage'=>$index]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
