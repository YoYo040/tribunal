<?php

namespace App\Http\Controllers;

use App\Models\MarriageR;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class MarriageRController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $marriagesr = MarriageR::all();
        return view('marriages.registers.index')->with(['marriagesr'=>$marriagesr]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('marriages.registers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request -> validate([

            'dateInscription'=> 'required',
            'numEnvoi'=> ['required','integer'],
            'dateEnvoi'=> 'required',
            'surce'=> 'required',
            'objeDomande'=> 'required',
            'dateRecherch'=> 'required',
            'destination'=> 'required',

        ]);

        $year=date('Y');
        $numOrd = MarriageR::where('created_at','LIKE',$year.'%')->count();
        $marriage= new MarriageR();
        $num=$numOrd+1;
        $marriage-> numOrd = $num.'/'.$year ;
        $marriage-> dateInscription = $request -> input('dateInscription');
        $marriage-> numEnvoi = $request -> input('numEnvoi');
        $marriage-> dateEnvoi = $request -> input('dateEnvoi');
        $marriage-> surce = $request -> input('surce');
        $marriage-> objeDomande = $request -> input('objeDomande');
        $marriage-> dateRecherch = $request -> input('dateRecherch');
        $marriage-> destination = $request -> input('destination');
        $marriage-> statu = '1';


        $marriage-> createBy = Auth::user()->username;


        $marriage -> save();
        return view('marriages.registers.create');
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
    public function edit(string $marriagesr)
    {
        $index = MarriageR::find($marriagesr);
        return view('marriages.registers.edit',['marriagesr'=>$index]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $marriagesr)
    {
        $request -> validate([

            'dateInscription'=> 'required',
            'numEnvoi'=> ['required','integer'],
            'dateEnvoi'=> 'required',
            'surce'=> 'required',
            'objeDomande'=> 'required',
            'dateRecherch'=> 'required',
            'destination'=> 'required',






        ]);

        $oldMarriageR = MarriageR::find($marriagesr);
        $oldMarriageR-> dateInscription = $request -> input('dateInscription');
        $oldMarriageR-> numEnvoi = $request -> input('numEnvoi');
        $oldMarriageR-> dateEnvoi = $request -> input('dateEnvoi');
        $oldMarriageR-> surce = $request -> input('surce');
        $oldMarriageR-> objeDomande = $request -> input('objeDomande');
        $oldMarriageR-> dateRecherch = $request -> input('dateRecherch');
        $oldMarriageR-> destination = $request -> input('destination');

        $oldMarriageR-> dateprocedur = $request -> input('dateprocedur');
        $oldMarriageR-> objeProcedur = $request -> input('objeProcedur');
        $note=$request->input('note');
        if (isset($note)) {
            $oldMarriageR-> statu = '0';

        }else{
            $oldMarriageR-> statu = '1';

        }
        $oldMarriageR-> note = $request->input('note');

        $oldMarriageR-> dateInscription2 = $request -> input('dateInscription2');
        $oldMarriageR-> numEnvoi2 = $request -> input('numEnvoi2');
        $oldMarriageR-> dateEnvoi2 = $request -> input('dateEnvoi2');
        $oldMarriageR-> surce2 = $request -> input('surce2');
        $oldMarriageR-> objeDomande2 = $request -> input('objeDomande2');
        $oldMarriageR-> dateRecherch2 = $request -> input('dateRecherch2');
        $destination2=$request->input('destination2');
            if (isset($destination2)) {
                $oldMarriageR-> statu = '1';

            }else{
                $oldMarriageR-> statu = '0';

            }

        $oldMarriageR-> destination2 = $request -> input('destination2');

        $oldMarriageR-> dateprocedur2 = $request -> input('dateprocedur2');
        $oldMarriageR-> objeProcedur2 = $request -> input('objeProcedur2');
        $note2=$request->input('note2');
            if (isset($note2)) {
                $oldMarriageR-> statu = '0';

            }else{
                $oldMarriageR-> statu = '1';

            }
        $oldMarriageR-> note2 = $request -> input('note2');
        $oldMarriageR-> updateBy = Auth::user()->username;

        $oldMarriageR -> save();
        return Redirect::back()->with('msg','تم تحديث الطلب');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
