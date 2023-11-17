<?php

namespace App\Http\Controllers;

use App\Models\Employer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class EmployerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $id=Auth::user()->id;
            $rol=DB::table('employers')->where('id',$id)->value('role');
            if ($rol === 'admin') {
                $employers= Employer::all();
            }
            if ($rol === 'adminA') {

                $employers= Employer::all()->where('group','A');
            }
            if ($rol === 'adminB') {
                $employers= Employer::all()->where('group','B');
            }
            if ($rol === 'adminC') {
                $employers= Employer::all()->where('group','C');
            }
            if ($rol === 'adminD') {
                $employers= Employer::all()->where('group','D');
            }

        return view('admin.employer.index',['employers'=>$employers]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.employer.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request -> validate([

            'nome'=> 'required',
            'prenom'=> 'required',
            'prenomAr'=> 'required',
            'nomeAr'=> 'required',
            'tele'=> 'required',
            'email'=> 'required',
            'dateNaissance'=> 'required',
            'dateEnbouch'=> 'required',
            'echelle'=> 'required',
            'group'=> 'required',
            'role'=> 'required',
            'genre'=> 'required',

        ]);
        $employer= new Employer();
        $employer-> nome = $request -> input('nome');
        $employer-> prenom = $request -> input('prenom');
        $employer-> prenomAr = $request -> input('prenomAr');
        $employer-> nomeAr = $request -> input('nomeAr');
        $employer-> tele = $request -> input('tele');
        $employer-> email = $request -> input('email');
        $employer-> dateNaissance = $request -> input('dateNaissance');
        $employer-> dateEnbouch = $request -> input('dateEnbouch');
        $employer-> echelle = $request -> input('echelle');
        $employer-> group = $request -> input('group');
        $employer-> bureau = $request -> input('bureau');
        $employer-> grade = $request -> input('grade');
        $employer-> role = $request -> input('role');
        $employer-> genre = $request -> input('genre');
        $employer-> createBy = Auth::user()->username;

        $employer -> save();
        return view('admin.employer.create')->with([
            "success" => "Employer est ajoute avec success"
        ]);

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
    public function edit(string $employer)
    {
        $xemployer= Employer::find($employer);
        return view('admin.employer.edit',['employer'=>$xemployer]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $employer)
    {
        $oldEmployer = Employer::find($employer);
        $oldEmployer-> nome = $request -> input('nome');
        $oldEmployer-> prenom = $request -> input('prenom');
        $oldEmployer-> prenomAr = $request -> input('prenomAr');
        $oldEmployer-> nomeAr = $request -> input('nomeAr');
        $oldEmployer-> tele = $request -> input('tele');
        $oldEmployer-> email = $request -> input('email');
        $oldEmployer-> dateNaissance = $request -> input('dateNaissance');
        $oldEmployer-> dateEnbouch = $request -> input('dateEnbouch');
        $oldEmployer-> echelle = $request -> input('echelle');
        $oldEmployer-> group = $request -> input('group');
        $oldEmployer-> bureau = $request -> input('bureau');
        $oldEmployer-> grade = $request -> input('grade');
        $oldEmployer-> role = $request -> input('role');
        $oldEmployer-> genre = $request -> input('genre');
        $oldEmployer-> updateBy = Auth::user()->username;

        $oldEmployer->save();
        return view('mineurs.index')->with([
            "success" => 'تم تحديث الطلب'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
    public function changeStatus(Request $request)
    {
        $user = Employer::find($request->user_id);
        $user->statu = $request->statu;
        $user->save();

        return response()->json(['success'=>'Status change successfully.']);
    }
    public function makeUser(string $employer)
    {
        $index = Employer::find($employer);
        return view('admin.auth.registration',['employer'=>$index]);
    }
}
