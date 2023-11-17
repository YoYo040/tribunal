@extends('layout')
@section('titel','السجل')
@section('content')
<div>



   <h1 class="text-center py-5"> تعديل طلب</h1>

    <form action="{{ route('marriagesr.update',['marriagesr'=>$marriagesr['id']]) }}" method="post">
        @method('PUT')
        @csrf
        <div class="d-flex justify-content-around">
            <div class="form-group mb-3">
                <label class="form-label" for="">تاريخ التسجيل</label>
                <input class="form-control" type="date" name="dateInscription" id="" value={{$marriagesr['dateInscription']}}>

            </div>

            <div class="form-group mb-3">
                <label class="form-label" for=""> الرقم الترتيبي</label>
                <input class="form-control" type="text" name="id" id="" value={{$marriagesr['numOrd']}} disabled>
            </div>
        </div>

        <div class="d-flex justify-content-around">
            <div class="fprm-group mb-3">

                <label class="form-label" for="">تاريخ الارسال</label>
                <input class="form-control" type="date" name="dateEnvoi" id="" value={{$marriagesr['dateEnvoi']}}>
            </div>
            <div class="form-group mb-3">

                <label class="form-label" for="">رقم الارسال</label>
                <input class="form-control" type="text" name="numEnvoi" id="" value={{$marriagesr['numEnvoi']}}>
            </div>
        </div>
        <div class="d-flex row justify-content-center">
            <div class="form-group mb-3 w-75">

                <label class="form-label" for="">مصدر الارسال</label>
                <input class="form-control" type="text" name="surce" id="" value={{$marriagesr['surce']}}>
            </div>

            <div class="form-group mb-3 w-75">

                <label class="form-label" for="">موضوع الطلب</label>
                <textarea class="form-control" name="objeDomande" id="" cols="30" rows="3"  >{{$marriagesr['objeDomande']}}</textarea>

            </div>
        </div>



        <div class="text-center d-flex row justify-content-center">
            <div class="form-group mb-3 w-75">

                <label class="form-label" for="">تاريخ البحث</label>
                <input class="form-control" type="date" name="dateRecherch" id="" value={{$marriagesr['dateRecherch']}}>
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
                    <option value="عميد شرطة بني ملال" {{is_selected($marriagesr['destination'],'عميد شرطة بني ملال')}}>عميد شرطة بني ملال</option>
                    <option value="قائد الدرك الملكي بني ملال" {{is_selected($marriagesr['destination'],'قائد الدرك الملكي بني ملال')}}>قائد الدرك الملكي بني ملال</option>
                    <option value="قائد الدرك الملكي تاكزيرت" {{is_selected($marriagesr['destination'],'قائد الدرك الملكي تاكزيرت')}}>قائد الدرك الملكي تاكزيرت</option>
                    <option value="قائد الدرك الملكي سيدي جابر" {{is_selected($marriagesr['destination'],'قائد الدرك الملكي سيدي جابر')}}>قائد الدرك الملكي سيدي جابر</option>
                    <option value="قائد الدرك الملكي ولاد أمبارك" {{is_selected($marriagesr['destination'],'قائد الدرك الملكي ولاد أمبارك')}}>قائد الدرك الملكي ولاد أمبارك</option>
                    <option value="" >اخرى..</option>
                </select>

            </div>

            <div class="form-group mb-3 w-75">

                <label class="form-label" for="">تاريخ الاجراء</label>
                <input class="form-control" type="date" name="dateprocedur" id=""  value={{$marriagesr['dateprocedur']}}>
            </div>
        </div>

        <div class="d-flex justify-content-around">
            <div class="form-group mb-3">

                <label class="form-label" for="">ملاحظات</label>
                <textarea class="form-control" name="note" id="" cols="25" rows="3"  >{{$marriagesr['note']}}</textarea>

            </div>
            <div class="form-group mb-3">

                <label class="form-label" for="">مضمون الاجراء</label>
                <textarea class="form-control" name="objeProcedur" id="" cols="25" rows="3">{{$marriagesr['objeProcedur']}}</textarea>

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
        <div class="d-flex justify-content-end w-75">
            <div class="form-group mb-3">
                <label for="statu" class="form-label">الحالة</label>
                <select name="statu" id="statu" class="form-select" onchange="{cache(this.value)}" >
                    <option value="0"{{is_selected($marriage['statu'],'0')}}>منجز</option>
                    <option value="1"{{is_selected($marriage['statu'],'1')}}>ارجاع قصد اتمام البحث</option>
                </select>


            </div>

        </div>
        <div class="cas2" id="cas2">
            <div class="d-flex justify-content-around">
                <div class="form-group mb-3">
                    <label class="form-label" for="">تاريخ التسجيل</label>
                    <input class="form-control" type="date" name="dateInscription2" id=""  value={{$marriage['dateInscription2']}}>

                </div>


            </div>

            <div class="d-flex justify-content-around">
                <div class="fprm-group mb-3">

                    <label class="form-label" for="">تاريخ الارسال</label>
                    <input class="form-control" type="date" name="dateEnvoi2" id=""  value={{$marriage['dateEnvoi2']}}>

                </div>
                <div class="form-group mb-3">

                    <label class="form-label" for="">رقم الارسال</label>
                    <input class="form-control" type="text" name="numEnvoi2" id=""  value={{$marriage['numEnvoi2']}}>

                </div>
            </div>
            <div class="d-flex row justify-content-center">
                <div class="form-group mb-3 w-75">

                    <label class="form-label" for="">مصدر الارسال</label>
                    <input class="form-control" type="text" name="surce2" id=""  value={{$marriage['surce2']}}>

                </div>

                <div class="form-group mb-3 w-75">

                    <label class="form-label" for="">موضوع الطلب</label>
                    <textarea class="form-control" name="objeDomande2" id="" cols="30" rows="3">{{$marriage['objeDomande2']}}</textarea>


                </div>
            </div>



            <div class="text-center d-flex row justify-content-center">
                <div class="form-group mb-3 w-75">

                    <label class="form-label" for="">تاريخ البحث</label>
                    <input class="form-control" type="date" name="dateRecherch2" id=""  value={{$marriage['dateRecherch2']}}>

                </div>

                <div class="form-group mb-3 w-75">

                    <label class="form-label" for="">الجهة الموجهة اليها</label>
                    <input class="form-control" type="text" name="destination2" id=""  value={{$marriage['destination2']}}>
                    {{-- /////////////////////// --}}
                </div>

                <div class="form-group mb-3 w-75">

                    <label class="form-label" for="">تاريخ الاجراء</label>
                    <input class="form-control" type="date" name="dateprocedur2" id=""  value={{$marriage['dateprocedur2']}}>

                </div>
            </div>

            <div class="d-flex justify-content-around">
                <div class="form-group mb-3">

                    <label class="form-label" for="">ملاحظات</label>
                    <textarea class="form-control" name="note2" id="" cols="25" rows="3">{{$marriage['note2']}}</textarea>


                </div>
                <div class="form-group mb-3">

                    <label class="form-label" for="">مضمون الاجراء</label>
                    <textarea class="form-control" name="objeProcedur2" id="" cols="25" rows="3">{{$marriage['objeProcedur2']}}</textarea>


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
