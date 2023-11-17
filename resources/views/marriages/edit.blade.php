@extends('layout')
@section('title', 'اضافة طلب')
@section('content')

    <div>
        @if ($errors->any())
            <script>
                alert("{{ $errors->first() }}")
            </script>
        @endif
        <h1 class="text-center my-5">
            تعديل الطلب
        </h1>

        <form action="{{route('marriages.update',['marriage'=>$marriage['id']])}}" method="post" class="text-center">
            @csrf
            @method('PUT')
            <div class="d-flex justify-content-around ">
                @php
                    function is_checked($db_value,$value){
                        if ($db_value== $value) {
                            return "checked";
                        }else {
                            return "";
                        }
                    }
                    function is_selected($db_value,$value){
                        if ($db_value== $value) {
                            return "selected";
                        }else {
                            return "";
                        }
                    }
                @endphp
                <div class="form-group mb-3">
                    <label for="decision" class="form-label">قرار المحكمة</label>
                   <div>
                        قبول
                        <input type="radio" name="decision" id="" value="قبول" {{is_checked($marriage['decision'],'قبول')}}>
                    </div>
                    <div>
                        رفض
                        <input type="radio" name="decision" id="" value="رفض" {{is_checked($marriage['decision'],'رفض')}}>

                    </div>
                    <div>
                        عدم القبول
                        <input type="radio" name="demand_accus" id="" value="عدم القبول" {{is_checked($marriage['demand_accus'],'عدم القبول')}}>

                    </div>
                    <div>
                        عدم الاختصاص
                        <input type="radio" name="demand_accus" id="" value="عدم الاختصاص" {{is_checked($marriage['demand_accus'],'عدم الاختصاص')}}>

                    </div>


                </div>
                <div class="form-group mb-3">
                    <label for="demand_accus" class="form-label">ملتمس النيابة</label>
                    <div>
                        قبول
                        <input type="radio" name="demand_accus" id="" value="قبول" {{is_checked($marriage['demand_accus'],'قبول')}}>
                    </div>
                    <div>
                        رفض
                        <input type="radio" name="demand_accus" id="" value="رفض" {{is_checked($marriage['demand_accus'],'رفض')}}>

                    </div>
                    <div>
                        عدم القبول
                        <input type="radio" name="demand_accus" id="" value="عدم القبول" {{is_checked($marriage['demand_accus'],'عدم القبول')}}>

                    </div>
                    <div>
                        عدم الاختصاص
                        <input type="radio" name="demand_accus" id="" value="عدم الاختصاص" {{is_checked($marriage['demand_accus'],'عدم الاختصاص')}}>

                    </div>

                </div>

            </div>
            <a class=" collapsed " data-bs-toggle="collapse" href="#collapse1" aria-expanded="false">
                <h3 class="mb-5">

                    معلومات عن الوكيل عند الاقتضاء
                </h3>
            </a>
            <div class="collapse" id="collapse1">

                <div class="d-flex justify-content-around">
                    <div class="form-group mb-3">
                        <label class="form-label" for="refer_w">مراجع الوكالة</label>
                        <input class="form-control" type="text" name="refer_w" id="" value={{$marriage['refer_w']}}>
                        @if ($errors->has('refer_w'))
                            <span class="text-danger">{{ $error->first('refer_w') }} </span>
                        @endif
                    </div>
                    <div class="fprm-group mb-3">

                        <label class="form-label" for="numId_w">رقم وثيقة هويته</label>
                        <input class="form-control" type="text" name="numId_w" id="" value={{$marriage['numId_w']}}>
                        @if ($errors->has('numId_w'))
                            <span class="text-danger">{{ $error->first('numId_w') }} </span>
                        @endif
                    </div>

                </div>

                <div class="d-flex justify-content-around">
                    <div class="fprm-group mb-3">

                        <label class="form-label" for="add_w">مقر سكناه عند تقديم الطلب</label>
                        <input class="form-control" type="text" name="add_w" id="" value={{$marriage['add_w']}}>
                        @if ($errors->has('add_w'))
                            <span class="text-danger">{{ $error->first('add_w') }} </span>
                        @endif
                    </div>
                    <div class="form-group mb-3 ">

                        <label class="form-label" for="nation_w">جنسيته</label>
                        <input class="form-control" type="text" name="nation_w" id="" value={{$marriage['nation_w']}}>
                        @if ($errors->has('nation_w'))
                            <span class="text-danger">{{ $error->first('nation_w') }} </span>
                        @endif

                    </div>
                </div>
                <div class="d-flex justify-content-around">
                    <div class="fprm-group mb-3">

                        <label class="form-label" for="nissan_w">تاريخ ازدياده</label>
                        <input class="form-control" type="date" name="nissan_w" id="" value={{$marriage['nissan_w']}}>
                        @if ($errors->has('nissan_w'))
                            <span class="text-danger">{{ $error->first('nissan_w') }} </span>
                        @endif
                    </div>
                    <div class="form-group mb-3">

                        <label class="form-label" for="ident_w">هوية الوكيل عند الاقتضاء</label>
                        <input class="form-control" type="text" name="ident_w" id="" value={{$marriage['ident_w']}}>
                        @if ($errors->has('ident_w'))
                            <span class="text-danger">{{ $error->first('ident_w') }} </span>
                        @endif
                    </div>
                </div>
            </div>

            <div class="d-flex row justify-content-center">
                <h3 class="mb-5">معلومات عن طالب الزواج الطرف الاجنبي</h3>
                <div class="d-flex row justify-content-center w-75">
                    <div class="d-flex justify-content-between">
                        <div class="form-group mb-3 ">

                            <label class="form-label" for="nissan_p_etrang">تاريخ الازدياد</label>
                            <input class="form-control" type="date" name="nissan_p_etrang" id="" value={{$marriage['nissan_p_etrang']}}>
                            @if ($errors->has('nissan_p_etrang'))
                                <span class="text-danger">{{ $error->first('nissan_p_etrang') }} </span>
                            @endif

                        </div>
                        <div class="form-group mb-3 ">

                            <label class="form-label" for="nomCompl_p_etrang">الاسم الكامل</label>
                            <input class="form-control" type="text" name="nomCompl_p_etrang" id="" value={{$marriage['nomCompl_p_etrang']}}>
                            @if ($errors->has('nomCompl_p_etrang'))
                                <span class="text-danger">{{ $error->first('nomCompl_p_etrang') }} </span>
                            @endif

                        </div>
                    </div>
                    <div class="d-flex justify-content-between">
                        <div class="form-group mb-3 ">

                            <label class="form-label" for="numIden_p_etrang"> رقم هويته</label>
                            <input class="form-control" type="text" name="numIden_p_etrang" id="" value={{$marriage['numIden_p_etrang']}}>
                            @if ($errors->has('numIden_p_etrang'))
                                <span class="text-danger">{{ $error->first('numIden_p_etrang') }} </span>
                            @endif
                        </div>
                        <div class="form-group mb-3 ">

                            <label class="form-label" for="add_p_etrang">مقر السكنة عند تقديم الطلب</label>
                            <input class="form-control" type="text" name="add_p_etrang" id="" value={{$marriage['add_p_etrang']}}>
                            @if ($errors->has('add_p_etrang'))
                                <span class="text-danger">{{ $error->first('add_p_etrang') }} </span>
                            @endif

                        </div>
                    </div>
                    <div class="d-flex justify-content-between">
                        <div class="form-group mb-3 ">

                            <label class="form-label" for="nationa_p_etrang">جنسيته</label>
                            <input class="form-control" type="text" name="nationa_p_etrang" id="" value={{$marriage['nationa_p_etrang']}}>
                            @if ($errors->has('nationa_p_etrang'))
                                <span class="text-danger">{{ $error->first('nationa_p_etrang') }} </span>
                            @endif

                        </div>
                        <div class="form-group mb-3 ">

                            <label class="form-label" for="statuFamil_p_etrang">الحالة العائلية</label>
                            <select name="statuFamil_p_etrang" id="" class="form-select">
                                <option value="عازب" {{is_selected($marriage['statuFamil_p_etrang'],'عازب')}}>عازب</option>
                                <option value="متزوج" {{is_selected($marriage['statuFamil_p_etrang'],'متزوج')}}>متزوج</option>
                                <option value="مطلق" {{is_selected($marriage['statuFamil_p_etrang'],'مطلق')}}>مطلق</option>
                                <option value="ارمل" {{is_selected($marriage['statuFamil_p_etrang'],'ارمل')}}>ارمل</option>
                            </select>
                            @if ($errors->has('statuFamil_p_etrang'))
                                <span class="text-danger">{{ $error->first('statuFamil_p_etrang') }} </span>
                            @endif

                        </div>
                        <div class="form-group mb-3 ">

                            <label class="form-label" for="religion_etrang">ديانته</label>
                            <select name="religion_etrang" id="" class="form-select">
                                <option value="مسلم" {{is_selected($marriage['religion_etrang'],'مسلم')}}>مسلم</option>
                                <option value="مسيحي" {{is_selected($marriage['religion_etrang'],'مسيحي')}}>مسيحي</option>
                                <option value="يهودي" {{is_selected($marriage['religion_etrang'],'يهودي')}}>يهودي</option>

                            </select>
                            @if ($errors->has('religion_etrang'))
                                <span class="text-danger">{{ $error->first('religion_etrang') }} </span>
                            @endif

                        </div>
                    </div>



                </div>


            </div>
            <div class="d-flex row justify-content-center">
                <h3 class="mb-5">معلومات عن طالب الزواج الطرف المغربي</h3>
                <div class="d-flex row justify-content-center w-75">
                    <div class="d-flex justify-content-between">
                        <div class="form-group mb-3 ">

                            <label class="form-label" for="nissan_p_MA">تاريخ الازدياد</label>
                            <input class="form-control" type="date" name="nissan_p_MA" id="" value={{$marriage['nissan_p_MA']}}>
                            @if ($errors->has('nissan_p_MA'))
                                <span class="text-danger">{{ $error->first('nissan_p_MA') }} </span>
                            @endif

                        </div>
                        <div class="form-group mb-3 ">

                            <label class="form-label" for="nomCompl_p_MA">الاسم الكامل</label>
                            <input class="form-control" type="text" name="nomCompl_p_MA" id="" value={{$marriage['nomCompl_p_MA']}}>
                            @if ($errors->has('nomCompl_p_MA'))
                                <span class="text-danger">{{ $error->first('nomCompl_p_MA') }} </span>
                            @endif

                        </div>
                    </div>
                    <div class="d-flex justify-content-between">
                        <div class="form-group mb-3 ">

                            <label class="form-label" for="ident_p_MA"> رقم هويته او جواز السفر</label>
                            <input class="form-control" type="text" name="ident_p_MA" id="" value={{$marriage['ident_p_MA']}}>
                            @if ($errors->has('ident_p_MA'))
                                <span class="text-danger">{{ $error->first('ident_p_MA') }} </span>
                            @endif
                        </div>
                        <div class="form-group mb-3 ">

                            <label class="form-label" for="add_p_MA">مقر السكنة عند تقديم الطلب</label>
                            <input class="form-control" type="text" name="add_p_MA" id="" value={{$marriage['add_p_MA']}}>
                            @if ($errors->has('add_p_MA'))
                                <span class="text-danger">{{ $error->first('add_p_MA') }} </span>
                            @endif

                        </div>
                    </div>
                    <div class="d-flex justify-content-between">

                        <div class="form-group mb-3 ">

                            <label class="form-label" for="statuFamil_p_MA">الحالة العائلية</label>
                            <select name="statuFamil_p_MA" id="" class="form-select">
                                <option value="عازب" {{is_selected($marriage['statuFamil_p_MA'],'عازب')}}>عازب</option>
                                <option value="متزوج" {{is_selected($marriage['statuFamil_p_MA'],'متزوج')}}>متزوج</option>
                                <option value="مطلق"  {{is_selected($marriage['statuFamil_p_MA'],'مطلق')}}>مطلق</option>
                                <option value="ارمل" {{is_selected($marriage['statuFamil_p_MA'],'ارمل')}}>ارمل</option>
                            </select>
                            @if ($errors->has('statuFamil_p_MA'))
                                <span class="text-danger">{{ $error->first('statuFamil_p_MA') }} </span>
                            @endif

                        </div>

                    </div>



                </div>


            </div>






            <div class="form-group my-2 text-center">

                <input class="form-control btn btn-success text-center w-25" type="submit" value="تغير الطلب">
            </div>
        </form>
    </div>

@endsection
