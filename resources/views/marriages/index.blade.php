@extends('layout')
@section('title','السجل')
@section('content')




<table id="" class="table-bordered">
    <thead class="text-capitalize">
        <tr>
            <th rowspan="2"></th>
            <th colspan="7">معلومات عن طالب الزواج -الطرف الاجنبي </th>
            <th colspan="5">معلومات عن طالب الزواج -الطرف المغربي </th>
            <th colspan="6">معلومات عن الوكيل عند الاقتضاء</th>
            <th rowspan="2">قرار المحكمة</th>
            <th rowspan="2">ملتمس النيابة</th>
            <th rowspan="2">رقم الملف </th>



        </tr>
        <tr>


            <th>تاريخ الازدياد</th>
            <th>رقم هويته</th>
            <th>مقر السكنة عند تقديم الطلب</th>
            <th>جنسيته</th>
            <th>الحالة العائلية</th>
            <th>ديانته</th>
            <th>الاسم الكامل</th>

            <th>تاريخ ازدياده</th>
            <th>رقم هويته او جواز السفر</th>
            <th>مقر السكنة عند تقديم الطلب</th>
            <th>الحالة العائلية</th>
            <th>الاسم الكامل</th>

            <th>مراجع الوكالة</th>
            <th>رقم وثيقة هويته</th>
            <th>مقر سكناه عند تقديم الطلب</th>
            <th>جنسيته</th>
            <th>تاريخ ازدياده</th>
            <th>هوية الوكيل عند الاقتضاء</th>


        </tr>
    </thead>
    @if (isset($marriages))
    <tbody>
            @foreach ($marriages as $marriage)
                <tr>
                    <td>
                        <a href="{{route('marriages.edit',['marriage'=>$marriage['id']])}}"><i class='bx bxs-edit-alt'
                                style="color:green" title="Edit"></i></a>
                    </td>

                    <td>{{ $marriage['nissan_p_etrang'] }}</td>
                    <td>{{ $marriage['numIden_p_etrang'] }}</td>
                    <td>{{ $marriage['add_p_etrang'] }}</td>
                    <td>{{ $marriage['nationa_p_etrang'] }}</td>
                    <td>{{ $marriage['statuFamil_p_etrang'] }}</td>
                    <td>{{ $marriage['religion_etrang'] }}</td>
                    <td>{{ $marriage['nomCompl_p_etrang'] }}</td>

                    <td>{{ $marriage['nissan_p_MA'] }}</td>
                    <td>{{ $marriage['ident_p_MA'] }}</td>
                    <td>{{ $marriage['add_p_MA'] }}</td>
                    <td>{{ $marriage['statuFamil_p_MA'] }}</td>
                    <td>{{ $marriage['nomCompl_p_MA'] }}</td>

                    <td>{{ $marriage['refer_w'] }}</td>
                    <td>{{ $marriage['numId_w'] }}</td>
                    <td>{{ $marriage['add_w'] }}</td>
                    <td>{{ $marriage['nation_w'] }}</td>
                    <td>{{ $marriage['nissan_w'] }}</td>
                    <td>{{ $marriage['ident_w'] }}</td>


                    <td>{{ $marriage['demand_accus'] }}</td>
                    <td>{{ $marriage['decision'] }}</td>
                    <td>{{ $marriage['numOrd'] }}</td>
                </tr>
            @endforeach

        </tbody>
    @else
        <tr>
            <td colspan="21" class="text-center">pas des données</td>
        </tr>
    @endif

</table>
@endsection

