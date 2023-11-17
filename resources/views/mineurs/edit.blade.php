@extends('layout')
@section('titel','السجل')
@section('content')
<div>



   <h1 class="text-center py-5"> تعديل طلب</h1>

    <form action="{{ route('mineurs.update',['mineur'=>$mineur['id']]) }}" method="post">
        @method('PUT')
        @csrf
        <div class="d-flex justify-content-around">
            <div class="form-group mb-3">
                <label class="form-label" for="">تاريخ التسجيل</label>
                <input class="form-control" type="date" name="dateInscription" id="" value={{$mineur['dateInscription']}}>

            </div>

            <div class="form-group mb-3">
                <label class="form-label" for=""> الرقم الترتيبي</label>
                <input class="form-control" type="text" name="id" id="" value={{$mineur['numOrd']}} disabled>
            </div>
        </div>

        <div class="d-flex justify-content-around">
            <div class="fprm-group mb-3">

                <label class="form-label" for="">تاريخ الارسال</label>
                <input class="form-control" type="date" name="dateEnvoi" id="" value={{$mineur['dateEnvoi']}}>
            </div>
            <div class="form-group mb-3">

                <label class="form-label" for="">رقم الارسال</label>
                <input class="form-control" type="text" name="numEnvoi" id="" value={{$mineur['numEnvoi']}}>
            </div>
        </div>
        <div class="d-flex row justify-content-center">
            <div class="form-group mb-3 w-75">

                <label class="form-label" for="">مصدر الارسال</label>
                <input class="form-control" type="text" name="surce" id="" value={{$mineur['surce']}}>
            </div>

            <div class="form-group mb-3 w-75">

                <label class="form-label" for="">موضوع الطلب</label>
                <textarea class="form-control" name="objeDomande" id="" cols="30" rows="3"  >{{$mineur['objeDomande']}}</textarea>

            </div>
        </div>



        <div class="text-center d-flex row justify-content-center">
            <div class="form-group mb-3 w-75">

                <label class="form-label" for="">تاريخ البحث</label>
                <input class="form-control" type="date" name="dateRecherch" id="" value={{$mineur['dateRecherch']}}>
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

            <div class="form-group mb-3 w-75">

                <label class="form-label" for="">الجهة الموجهة اليها</label>
                <select name="destination" id="" class="form-select">
                    <option value="عميد شرطة بني ملال" {{is_selected($mineur['destination'],'عميد شرطة بني ملال')}}>عميد شرطة بني ملال</option>
                    <option value="قائد الدرك الملكي بني ملال" {{is_selected($mineur['destination'],'قائد الدرك الملكي بني ملال')}}>قائد الدرك الملكي بني ملال</option>
                    <option value="قائد الدرك الملكي تاكزيرت" {{is_selected($mineur['destination'],'قائد الدرك الملكي تاكزيرت')}}>قائد الدرك الملكي تاكزيرت</option>
                    <option value="قائد الدرك الملكي سيدي جابر" {{is_selected($mineur['destination'],'قائد الدرك الملكي سيدي جابر')}}>قائد الدرك الملكي سيدي جابر</option>
                    <option value="قائد الدرك الملكي ولاد أمبارك" {{is_selected($mineur['destination'],'قائد الدرك الملكي ولاد أمبارك')}}>قائد الدرك الملكي ولاد أمبارك</option>
                    <option value="" >اخرى..</option>
                </select>

            </div>

            <div class="form-group mb-3 w-75">

                <label class="form-label" for="">تاريخ الاجراء</label>
                <input class="form-control" type="date" name="dateprocedur" id=""  value={{$mineur['dateprocedur']}}>
            </div>
        </div>
        {{-- <div class="d-flex justify-content-end w-75">
            @php

                function is_checked($db_value,$value){
                    if ($db_value== $value) {
                        return "checked";
                    }else {
                        return "";
                    }
                }
            @endphp



            <div class="form-group mb-3">
                <label for="statu" class="form-label">الحالة</label>
                <div>
                    منجز
                     <input type="radio"  name="statu" id="" value="1" {{is_checked($mineur['statu'],'1')}}>
                </div>
                <div>
                    غير منجز
                    <input type="radio"  name="statu" id="" value="0" {{is_checked($mineur['statu'],'0')}}>

                </div>

            </div>

        </div> --}}
        <div class="d-flex justify-content-around">
            <div class="form-group mb-3">

                <label class="form-label" for="">ملاحظات</label>
                <textarea class="form-control" name="note" id="" cols="25" rows="3"  >{{$mineur['note']}}</textarea>

            </div>
            <div class="form-group mb-3">

                <label class="form-label" for="">مضمون الاجراء</label>
                <textarea class="form-control" name="objeProcedur" id="" cols="25" rows="3">{{$mineur['objeProcedur']}}</textarea>

            </div>

        </div>

    <a   href="#suite-register" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
       ارجاع قصد اتمام البحث
    </a>
        {{-- <div class="d-flex justify-content-end w-75">
            <div class="form-group mb-3">
                <button >ارجاع قصد اتمام البحث</button>
                <label for="statu" class="form-label">الحالة</label>
                <select name="" id="statu" class="form-select" onchange="{cache(this.value)}">
                    <option value="0" {{is_selected($mineur['statu'],'0')}}>منجز</option>
                    <option value="1" {{is_selected($mineur['statu'],'1')}}>ارجاع قصد اتمام البحث</option>
                </select>
            </div>

        </div> --}}
        @php

        function is_showing($db_value,$value){
            if ($db_value== $value) {
                return "show";
            }else {
                return "";
            }
        }
    @endphp
        <div  class="collapse {{is_showing($mineur['statu'],'0')}}" id="suite-register">
            <div class="d-flex justify-content-around">
                <div class="form-group mb-3">
                    <label class="form-label" for="">تاريخ التسجيل</label>
                    <input class="form-control" type="date" name="dateInscription2" id=""  value={{$mineur['dateInscription2']}}>

                </div>


            </div>

            <div class="d-flex justify-content-around">
                <div class="fprm-group mb-3">

                    <label class="form-label" for="">تاريخ الارسال</label>
                    <input class="form-control" type="date" name="dateEnvoi2" id=""  value={{$mineur['dateEnvoi2']}}>

                </div>
                <div class="form-group mb-3">

                    <label class="form-label" for="">رقم الارسال</label>
                    <input class="form-control" type="text" name="numEnvoi2" id=""  value={{$mineur['numEnvoi2']}}>

                </div>
            </div>
            <div class="d-flex row justify-content-center">
                <div class="form-group mb-3 w-75">

                    <label class="form-label" for="">مصدر الارسال</label>
                    <input class="form-control" type="text" name="surce2" id=""  value={{$mineur['surce2']}}>

                </div>

                <div class="form-group mb-3 w-75">

                    <label class="form-label" for="">موضوع الطلب</label>
                    <textarea class="form-control" name="objeDomande2" id="" cols="30" rows="3">{{$mineur['objeDomande2']}}</textarea>


                </div>
            </div>



            <div class="text-center d-flex row justify-content-center">
                <div class="form-group mb-3 w-75">

                    <label class="form-label" for="">تاريخ البحث</label>
                    <input class="form-control" type="date" name="dateRecherch2" id=""  value={{$mineur['dateRecherch2']}}>

                </div>

                <div class="form-group mb-3 w-75">

                    <label class="form-label" for="">الجهة الموجهة اليها</label>
                    <input class="form-control" type="text" name="destination2" id=""  value={{$mineur['destination2']}}>
                    {{-- /////////////////////// --}}
                </div>

                <div class="form-group mb-3 w-75">

                    <label class="form-label" for="">تاريخ الاجراء</label>
                    <input class="form-control" type="date" name="dateprocedur2" id=""  value={{$mineur['dateprocedur2']}}>

                </div>
            </div>

            <div class="d-flex justify-content-around">
                <div class="form-group mb-3">

                    <label class="form-label" for="">ملاحظات</label>
                    <textarea class="form-control" name="note2" id="" cols="25" rows="3">{{$mineur['note2']}}</textarea>


                </div>
                <div class="form-group mb-3">

                    <label class="form-label" for="">مضمون الاجراء</label>
                    <textarea class="form-control" name="objeProcedur2" id="" cols="25" rows="3">{{$mineur['objeProcedur2']}}</textarea>


                </div>

            </div>

        </div>


        <div class="form-group my-2 text-center">

            <input class="form-control btn btn-success text-center w-25" type="submit" value="حفظ التغير">
        </div>
    </form>

</div>
<script>
    function cache(val) {
        document.getElementById('statu');
        if (val == '1')
            document.getElementById('cas2').style.display="block";
        if (val == '0')
            document.getElementById('cas2').style.display="none";

    }
</script>
@endsection
