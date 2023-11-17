<?php

namespace App\Http\Controllers;

use App\Models\Mineur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Redirect;

class MineurController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mineurs = Mineur::all();
        return view('mineurs.index')->with(['mineurs'=>$mineurs]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('mineurs.create');
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
        $numOrd = Mineur::where('created_at','LIKE',$year.'%')->count();
        $mineur= new Mineur();
        $num=$numOrd+1;
        $mineur-> numOrd = $num.'/'.$year ;
        $mineur-> dateInscription = $request -> input('dateInscription');
        $mineur-> numEnvoi = $request -> input('numEnvoi');
        $mineur-> dateEnvoi = $request -> input('dateEnvoi');
        $mineur-> surce = $request -> input('surce');
        $mineur-> objeDomande = $request -> input('objeDomande');
        $mineur-> dateRecherch = $request -> input('dateRecherch');
        $mineur-> destination = $request -> input('destination');
        $mineur-> statu = '1';



        $mineur-> createBy = Auth::user()->username;


        $mineur -> save();
        return view('mineurs.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $interval)
    {

        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $mineur)
    {
        $index = Mineur::find($mineur);
        return view('mineurs.edit',['mineur'=>$index]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $mineur)
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

            $oldMineur = Mineur::find($mineur);
            $oldMineur-> dateInscription = $request -> input('dateInscription');
            $oldMineur-> numEnvoi = $request -> input('numEnvoi');
            $oldMineur-> dateEnvoi = $request -> input('dateEnvoi');
            $oldMineur-> surce = $request -> input('surce');
            $oldMineur-> objeDomande = $request -> input('objeDomande');
            $oldMineur-> dateRecherch = $request -> input('dateRecherch');
            $oldMineur-> destination = $request -> input('destination');

            $oldMineur-> dateprocedur = $request -> input('dateprocedur');
            $oldMineur-> objeProcedur = $request -> input('objeProcedur');
            $note=$request->input('note');
            if (isset($note)) {
                $oldMineur-> statu = '0';

            }else{
                $oldMineur-> statu = '1';

            }
            $oldMineur-> note = $request->input('note');

            $oldMineur-> dateInscription2 = $request -> input('dateInscription2');
            $oldMineur-> numEnvoi2 = $request -> input('numEnvoi2');
            $oldMineur-> dateEnvoi2 = $request -> input('dateEnvoi2');
            $oldMineur-> surce2 = $request -> input('surce2');
            $oldMineur-> objeDomande2 = $request -> input('objeDomande2');
            $oldMineur-> dateRecherch2 = $request -> input('dateRecherch2');

            $destination2=$request->input('destination2');
            if (isset($destination2)) {
                $oldMineur-> statu = '1';

            }else{
                $oldMineur-> statu = '0';

            }
            $oldMineur-> destination2 = $request -> input('destination2');

            $oldMineur-> dateprocedur2 = $request -> input('dateprocedur2');
            $oldMineur-> objeProcedur2 = $request -> input('objeProcedur2');
            $note2=$request->input('note2');
            if (isset($note2)) {
                $oldMineur-> statu = '0';

            }else{
                $oldMineur-> statu = '1';

            }
            $oldMineur-> note2 = $request->input('note2');

            $oldMineur-> updateBy = Auth::user()->username;

            $oldMineur -> save();
            return view('mineurs.index')->with('msg','تم تحديث الطلب');



    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $mineur)
    {
        $Mineur = Mineur::find($mineur);
        $Mineur->delete();

        return Redirect::to('mineurs');
    }
}
