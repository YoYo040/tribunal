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


        @if (isset($mineurs))
            @foreach ($mineurs as $mineur )

                <tr class="irsalya">
                    <td>
                        <span>
                            <a href="{{route('mineurs.edit',['mineur'=>$mineur['id']])}}"><i class='bx bxs-edit-alt'></i></a>
                        </span><br>

                    </td>
                    <td>{{$mineur['note']}}</td>
                    <td>{{$mineur['objeProcedur']}}</td>
                    <td>{{$mineur['dateprocedur']}}</td>
                    <td>{{$mineur['destination']}}</td>
                    <td>{{$mineur['dateRecherch']}}</td>
                    <td>{{$mineur['objeDomande']}}</td>
                    <td>{{$mineur['surce']}}</td>
                    <td>{{$mineur['dateEnvoi']}}</td>
                    <td>{{$mineur['numEnvoi']}}</td>
                    <td>{{$mineur['dateInscription']}}</td>
                    <td>{{$mineur['numOrd']}}</td>
                </tr>
                @if (isset($mineur['dateInscription2']))
                <tr>
                    <td></td>
                    <td>{{$mineur['note2']}}</td>
                    <td>{{$mineur['objeProcedur2']}}</td>
                    <td>{{$mineur['dateprocedur2']}}</td>
                    <td>{{$mineur['destination2']}}</td>
                    <td>{{$mineur['dateRecherch2']}}</td>
                    <td>{{$mineur['objeDomande2']}}</td>
                    <td>{{$mineur['surce2']}}</td>
                    <td>{{$mineur['dateEnvoi2']}}</td>
                    <td>{{$mineur['numEnvoi2']}}</td>
                    <td>{{$mineur['dateInscription2']}}</td>
                    <td></td>
                </tr>

                @endif

            @endforeach

        @else
            <tr>
                <td colspan="11">pas de dossier</td>
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

