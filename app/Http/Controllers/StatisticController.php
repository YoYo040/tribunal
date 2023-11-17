<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StatisticController extends Controller
{
    public function affich(){
    $totalDos = DB::table('mineurs')->count();
    $numvalid =DB::table('mineurs')->where('statu',0)->count();
    $numnovalid =DB::table('mineurs')->where('statu',1)->count();
        return view('mineurs.statistic',['totalDos'=>$totalDos,
                                         'numnovalid'=>$numnovalid,
                                         'numvalid'=>$numvalid,

                                        ]);
    }
    public function affichParDate(Request $request){
        $datedebut= $request->input('debut');
        $datefin= $request->input('fin');
    $totalDos = DB::table('mineurs')->whereBetween('dateInscription',[$datedebut,$datefin])->count();
    $numvalid =DB::table('mineurs')->where('statu',0)->whereBetween('dateInscription',[$datedebut,$datefin])->count();
    $numnovalid =DB::table('mineurs')->where('statu',1)->whereBetween('dateInscription',[$datedebut,$datefin])->count();
        return view('mineurs.statistic',['datedebut'=>$datedebut,
                                         'datefin'=>$datefin,
                                         'totalDos'=>$totalDos,
                                         'numnovalid'=>$numnovalid,
                                         'numvalid'=>$numvalid,

                                        ]);
    }
    public function affichMar(){
    $totalDos = DB::table('marriage_r_s')->count();
    $numvalid =DB::table('marriage_r_s')->where('statu',0)->count();
    $numnovalid =DB::table('marriage_r_s')->where('statu',1)->count();
        return view('marriages.registers.statistic',['totalDos'=>$totalDos,
                                         'numnovalid'=>$numnovalid,
                                         'numvalid'=>$numvalid,

                                        ]);
    }
    public function affichParDateMar(Request $request){
        $datedebut= $request->input('debut');
        $datefin= $request->input('fin');
    $totalDos = DB::table('marriage_r_s')->whereBetween('dateInscription',[$datedebut,$datefin])->count();
    $numvalid =DB::table('marriage_r_s')->where('statu',0)->whereBetween('dateInscription',[$datedebut,$datefin])->count();
    $numnovalid =DB::table('marriage_r_s')->where('statu',1)->whereBetween('dateInscription',[$datedebut,$datefin])->count();
        return view('marriages.registers.statistic',['datedebut'=>$datedebut,
                                         'datefin'=>$datefin,
                                         'totalDos'=>$totalDos,
                                         'numnovalid'=>$numnovalid,
                                         'numvalid'=>$numvalid,

                                        ]);
    }
}
