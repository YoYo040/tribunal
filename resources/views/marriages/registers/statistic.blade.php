@extends('layout')
@section('title','الاحصائيات')
@section('content')
<div>
    @if (isset($datedebut)&& isset($datefin))
    <form action="{{route('marriagers.statistic')}} " method="post" class="">
        @csrf
        <div class="d-flex justify-content-around">
            <div class="form-group my-3">
                <label for="" class="form-label">:الى</label>
                <input type="date" name="fin" class="form-control" id="" value={{$datefin}}>
            </div>

            <div class="form-group my-3">
                <label for="" class="form-label">:من </label>
                <input type="date" name="debut" class="form-control" id="" value={{$datedebut}}>
            </div>
        </div>
        <div class="form-group my-3 d-flex justify-content-center">
            <input type="submit" value="بحث" class="form-control w-25 text-center btn btn-info">
        </div>
    </form>
@endif
<form action="{{route('marriagers.statistic')}} " method="post" class="">
    @csrf
    <div class="d-flex justify-content-around">
        <div class="form-group my-3">
            <label for="" class="form-label">:الى</label>
            <input type="date" name="fin" class="form-control" id="" >
        </div>

        <div class="form-group my-3">
            <label for="" class="form-label">:من </label>
            <input type="date" name="debut" class="form-control" id="" >
        </div>
    </div>
    <div class="form-group my-3 d-flex justify-content-center">
        <input type="submit" value="بحث" class="form-control w-25 text-center btn btn-info">
    </div>
</form>
<hr class="border text-muted ">
<table class="table table-hover table-striped">
    <thead>
        <tr>
            <th>نسبة غير المنجز</th>
            <th>نسبة الانجاز</th>
            <th>في طور الانجاز</th>
            <th>المنجزة</th>
            <th>المسجل</th>

        </tr>

    </thead>
    <tbody>
        @if (isset($totalDos)  || isset($numvalid) || isset($numnovalid))
        <tr>
            @if ($totalDos==0)

            <td colspan="5" class="text-center">لا يوجد معطيات</td>
            @else

            <td>{{($numnovalid*100)/$totalDos}} %</td>
            <td>{{($numvalid*100)/$totalDos}} %</td>

            <td>{{$numnovalid}}</td>
            <td>{{$numvalid}} </td>
            <td>{{$totalDos}}</td>
            @endif
        </tr>


        @endif
    </tbody>
</table>

</div>

@endsection

