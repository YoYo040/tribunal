@extends('layout')
@section('title', 'اضافة ملف')
@section('content')
    <div>
        @if ($errors->any())
            <script>
                alert("{{ $errors->first() }}")
            </script>
        @endif
        <h1 class="text-center my-5">
            اضافة ملف
        </h1>
        <a href=""></a>
        <form action="{{ route('mineurs.store') }}" method="post">
            @csrf
            <div class="d-flex justify-content-around">
                <div class="form-group mb-3">
                    <label class="form-label" for="">تاريخ التسجيل</label>
                    <input class="form-control" type="date" name="dateInscription" id="" value='<?php echo date('Y-m-d') ;?>'>
                    @if ($errors->has('dateInscription'))
                        <span class="text-danger">{{ $error->first('dateInscription') }} </span>
                    @endif
                </div>


            </div>

            <div class="d-flex justify-content-around">
                <div class="fprm-group mb-3">

                    <label class="form-label" for="">تاريخ الارسال</label>
                    <input class="form-control" type="date" name="dateEnvoi" id="" value='<?php echo date('Y-m-d') ;?>'>
                    @if ($errors->has('dateEnvoi'))
                        <span class="text-danger">{{ $error->first('dateEnvoi') }} </span>
                    @endif
                </div>
                <div class="form-group mb-3">

                    <label class="form-label" for="">رقم الارسال</label>
                    <input class="form-control" type="text" name="numEnvoi" id="">
                    @if ($errors->has('numEnvoi'))
                        <span class="text-danger">{{ $error->first('numEnvoi') }} </span>
                    @endif
                </div>
            </div>
            <div class="d-flex row justify-content-center">
                <div class="form-group mb-3 w-75">

                    <label class="form-label" for="">مصدر الارسال</label>
                    <input class="form-control" type="text" name="surce" id="">
                    @if ($errors->has('surce'))
                        <span class="text-danger">{{ $error->first('surce') }} </span>
                    @endif
                </div>

                <div class="form-group mb-3 w-75">

                    <label class="form-label" for="">موضوع الطلب</label>
                    <textarea class="form-control" name="objeDomande" id="" cols="30" rows="3"></textarea>
                    @if ($errors->has('objeDomande'))
                        <span class="text-danger">{{ $error->first('objeDomande') }} </span>
                    @endif

                </div>
            </div>



            <div class="text-center d-flex row justify-content-center">
                <div class="form-group mb-3 w-75">

                    <label class="form-label" for="">تاريخ البحث</label>
                    <input class="form-control" type="date" name="dateRecherch" id="" value='<?php echo date('Y-m-d') ;?>'>
                    @if ($errors->has('dateRecherch'))
                        <span class="text-danger">{{ $error->first('dateRecherch') }} </span>
                    @endif
                </div>


                <div class="form-group mb-3 w-75">


                    <select name="destination" id="" class="form-select">
                        <option value="عميد شرطة بني ملال" >عميد شرطة بني ملال</option>
                        <option value="قائد الدرك الملكي بني ملال">قائد الدرك الملكي بني ملال</option>
                        <option value="قائد الدرك الملكي تاكزيرت" >قائد الدرك الملكي تاكزيرت</option>
                        <option value="قائد الدرك الملكي سيدي جابر" >قائد الدرك الملكي سيدي جابر</option>
                        <option value="قائد الدرك الملكي ولاد أمبارك">قائد الدرك الملكي ولاد أمبارك</option>
                        <option value="" >اخرى..</option>
                    </select>
                    <label class="form-label" for="">الجهة الموجهة اليها</label>
                </div>


            </div>




            <div class="form-group my-2 text-center">

                <input class="form-control btn btn-success text-center w-25" type="submit" value="اضافة الطلب">
            </div>
        </form>
    </div>

@endsection
