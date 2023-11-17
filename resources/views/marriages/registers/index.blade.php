@extends('layout')
@section('title','السجل')
@section('content')
<div>


    <table class="table table-hover table-striped  table-irsalyat" id="data-table">
        <thead>
            <tr class="type-irsalya">

            <th colspan="6">المرسلات الصادرة</th>
            <th colspan="6">المراسلات الواردة</th>
        </tr>
        <tr class="tr-titles">
            <td></td>
            <td >ملاحظات</td>
            <td>مضمون الاجراء</td>
            <td>تاريخ الاجراء </td>
            <td>الجهة الموجهة اليها</td>
            <td>تاريخ البحث</td>
            <td>موضوع الطلب</td>
            <td>مصدره</td>
            <td>تاريخه</td>
            <td>رقم الارسال</td>
            <td>تاريخ التسجيل</td>
            <td> الرقم الترتيبي</td>
        </tr>
        </thead>


        @if (isset($marriagesr))
            @foreach ($marriagesr as $marriages )

                <tr class="irsalya">
                    <td>
                        <span>
                            <a href="{{route('marriagesr.edit',['marriagesr'=>$marriages['id']])}}"><i class='bx bxs-edit-alt'></i></a>
                        </span><br>
                        <span>

                            <a href="{{route('marriagesr.costmcreate',['marriagesr'=>$marriages['id']])}}"><i class='bx bx-food-menu text-info'></i></a>
                        </span><br>

                    </td>
                    <td>{{$marriages['note']}}</td>
                    <td>{{$marriages['objeProcedur']}}</td>
                    <td>{{$marriages['dateprocedur']}}</td>
                    <td>{{$marriages['destination']}}</td>
                    <td>{{$marriages['dateRecherch']}}</td>
                    <td>{{$marriages['objeDomande']}}</td>
                    <td>{{$marriages['surce']}}</td>
                    <td>{{$marriages['dateEnvoi']}}</td>
                    <td>{{$marriages['numEnvoi']}}</td>
                    <td>{{$marriages['dateInscription']}}</td>
                    <td>{{$marriages['numOrd']}}</td>
                </tr>
                @if (isset($marriages['dateInscription2']))
                <tr>
                    <td></td>
                    <td>{{$marriages['note2']}}</td>
                    <td>{{$marriages['objeProcedur2']}}</td>
                    <td>{{$marriages['dateprocedur2']}}</td>
                    <td>{{$marriages['destination2']}}</td>
                    <td>{{$marriages['dateRecherch2']}}</td>
                    <td>{{$marriages['objeDomande2']}}</td>
                    <td>{{$marriages['surce2']}}</td>
                    <td>{{$marriages['dateEnvoi2']}}</td>
                    <td>{{$marriages['numEnvoi2']}}</td>
                    <td>{{$marriages['dateInscription2']}}</td>
                    <td></td>
                </tr>

                @endif

            @endforeach

        @else
            <tr>
                <td colspan="12">pas de dossier</td>
            </tr>
        @endif
    </table>
    <a href="{{route('mineur.exportexcel')}}" class="nav-link">استخراج السجل</a>
    {{-- <form class="d-flex justify-content-center" action="{{route('mineurs.update',['mineur'=>1])}}" method="post">
        {{ csrf_field() }}
        @method('PATCH')
        <input type="hidden" name="resetCount" value="resetCountVal">
        <button class="btn text-danger border-0" type="submit" onclick="return confirm('هل تود  ')"><i class='bx bx-trash'></i></button>

    </form> --}}

</div>
<script type="text/javascript">
    $(function () {
        var table =$("#data-table").DataTable({

        });
    });
</script>
@endsection

