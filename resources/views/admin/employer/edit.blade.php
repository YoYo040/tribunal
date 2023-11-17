@extends('admin.dashboard')
@section('title','Edit')


@section('adminContent')
@if (isset($msg))
    <script>
        alert($msg);
    </script>

@endif

<form action="{{route('employer.update',['employer'=>$employer['id']])}}" method="POST" class="m-5 p-5">
    @csrf
    @method('PUT')
    <div class="d-flex justify-content-between">
        <div class="text-start">
            <div class="form-group mb-3 text-start">
                <label for="nome" class="form-label text-start">Nom</label>
                <input type="text" name="nome" id="nome"class='form-control text-start' required autofocus placeholder="Nome " value={{$employer['nome']}}>
                @if ($errors->has('nome'))
                    <span class="text-danger">{{$error->first('nome')}} </span>
                @endif
            </div>
            <div class="form-group mb-3 text-start">
                <label for="prenom" class="form-label ">Prenom</label>
                <input type="prenom" name="prenom" id="prenom"class='form-control text-start' required autofocus placeholder="Prenom " value={{$employer['prenom']}}>
                @if ($errors->has('prenom'))
                    <span class="text-danger">{{$error->first('prenom')}} </span>
                @endif
            </div>
        </div>
        <div>
            <div class="form-group mb-3">
                <label for="prenomAr" class="form-label">الاسم</label>
                <input type="text" name="prenomAr" id="name"class='form-control' required autofocus placeholder="الاسم" value={{$employer['prenomAr']}}>
                @if ($errors->has('prenomAr'))
                    <span class="text-danger">{{$error->first('prenomAr')}} </span>
                @endif
            </div>
            <div class="form-group mb-3">
                <label for="nomeAr" class="form-label">النسب</label>
                <input type="text" name="nomeAr" id="nomeAr"class='form-control' required autofocus placeholder="النسب" value={{$employer['nomeAr']}}>
                @if ($errors->has('nomeAr'))
                    <span class="text-danger">{{$error->first('nomeAr')}} </span>
                @endif
            </div>
        </div>

    </div>

    <div class="d-flex justify-content-between">
        <div class="form-group mb-3">
            <label for="tele" class="form-label">الهاتف</label>
            <input type="tele" name="tele" id="tele"class='form-control' required autofocus placeholder="الهاتف" value={{$employer['tele']}}>
            @if ($errors->has('tele'))
                <span class="text-danger">{{$error->first('tele')}} </span>
            @endif
        </div>
        <div class="form-group mb-3">
            <label for="email" class="form-label">البريد الالكتروني</label>
            <input type="email" name="email" id="email"class='form-control' required autofocus placeholder="البريد الالكتروني" value={{$employer['email']}}>
            @if ($errors->has('email'))
                <span class="text-danger">{{$error->first('email')}} </span>
            @endif
        </div>
    </div>
    <div class="d-flex justify-content-between">
        <div class="form-group mb-3">
            <label for="dateNaissance" class="form-label">تاريخ الازدياد</label>
            <input type="date" name="dateNaissance" id="dateNaissance"class='form-control' required autofocus placeholder="تاريخ الازدياد" value={{$employer['dateNaissance']}}>
            @if ($errors->has('dateNaissance'))
                <span class="text-danger">{{$error->first('dateNaissance')}} </span>
            @endif
        </div>
        <div class="form-group mb-3">
            <label for="dateEnbouch" class="form-label">تاريخ الالتحاق</label>
            <input type="date" name="dateEnbouch" id="dateEnbouch"class='form-control' required autofocus placeholder="تاريخ الالتحاق " value={{$employer['dateEnbouch']}}>
            @if ($errors->has('dateEnbouch'))
                <span class="text-danger">{{$error->first('dateEnbouch')}} </span>
            @endif
        </div>
    </div>

    @php

    function is_selected($db_value,$value){
        if ($db_value== $value) {
            return "selected";
        }else {
            return "";
        }
    }
    @endphp

    <div class="d-flex justify-content-between">
        <div class="form-group mb-3 ">

            <label class="form-label" for="">grade </label>
            <select name="grade" id="" class="form-select">
                <option {{is_selected($employer['grade'],'grade1')}} value="grade1">grad1</option>
                <option {{is_selected($employer['grade'],'grade2')}} value="grade2">grad2</option>

            </select>
            @if ($errors->has('grade'))
                <span class="text-danger">{{ $error->first('grade') }} </span>
            @endif

        </div>
        <div class="form-group mb-3 ">

            <label class="form-label" for="">echelle </label>
            <select name="echelle" id="" class="form-select">
                <option {{is_selected($employer['echelle'],'echelle1')}} value="echelle1">echelle1</option>
                <option {{is_selected($employer['echelle'],'echelle2')}} value="echelle2">echelle2</option>

            </select>
            @if ($errors->has('echelle1'))
                <span class="text-danger">{{ $error->first('echelle1') }} </span>
            @endif

        </div>
        <div class="form-group mb-3 ">

            <label class="form-label" for=""> المجموعة </label>
            <select name="group" id="" class="form-select">
                <option {{is_selected($employer['group'],'A')}} value="A">A</option>
                <option {{is_selected($employer['group'],'B')}} value="B">B</option>
                <option {{is_selected($employer['group'],'C')}} value="C">C</option>
                <option {{is_selected($employer['group'],'D')}} value="D">D</option>

            </select>
            @if ($errors->has('group'))
                <span class="text-danger">{{ $error->first('group') }} </span>
            @endif

        </div>
        <div class="form-group mb-3 ">

            <label class="form-label" for="">الدور </label>
            <select name="role" id="" class="form-select">

                <option {{is_selected($employer['role'],'admin')}} value="admin">Admin Géniral</option>
                <option {{is_selected($employer['role'],'adminA')}} value="adminA">وكيل الملك</option>
                <option {{is_selected($employer['role'],'adminB')}} value="adminB">رئيس مصلحة النيابة</option>
                <option {{is_selected($employer['role'],'adminC')}} value="adminC">رئيس مصلحة الرئاسة</option>
                <option {{is_selected($employer['role'],'adminD')}} value="adminD">الرئيس العام</option>
                <option {{is_selected($employer['role'],'adjoint')}} value="adjoint">نائيب</option>
                <option {{is_selected($employer['role'],'juge')}} value="juge">قاضي</option>
                <option {{is_selected($employer['role'],'employerN')}} value="employerN">موظف نيابة</option>
                <option {{is_selected($employer['role'],'employerR')}} value="employerR">موظف رئاسة</option>

            </select>
            @if ($errors->has('role'))
                <span class="text-danger">{{ $error->first('role') }} </span>
            @endif

        </div>
        <div class="form-group mb-3 ">

            <label class="form-label" for="">الجنس </label>
            <select name="genre" id="" class="form-select">
                <option {{is_selected($employer['genre'],'ذكر')}} value="ذكر">ذكر</option>
                <option {{is_selected($employer['genre'],'أنثى')}} value="أنثى">أنثى</option>

            </select>
            @if ($errors->has('genre'))
                <span class="text-danger">{{ $error->first('genre') }} </span>
            @endif

        </div>
    </div>




    <div class="d-grid max-auto d-flex justify-content-center">
        <button type="submit" class="btn btn-success btn-block w-25 mt-3">حفظ التغير</button>
    </div>

</form>



@endsection

