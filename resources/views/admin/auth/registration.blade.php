@extends('layout')
@section('title','Sign UP')
@section('content')
<div class="signup-form">
    <form action="{{route('register.custom')}}" method="POST" class="m-5 p-5">
        @csrf
        <input type="hidden" name="id" value={{$employer['id']}}>
        <div class="form-group mb-3">
            <input type="text" name="name" id="name"class='form-control' required autofocus placeholder="الاسم" value={{$employer['prenom']}}>
            @if ($errors->has('name'))
                <span class="text-danger">{{$error->first('name')}} </span>
            @endif
        </div>
        <div class="form-group mb-3">
            <input type="text" name="prename" id="prename"class='form-control' required autofocus placeholder="النسب" value={{$employer['nome']}}>
            @if ($errors->has('prename'))
                <span class="text-danger">{{$error->first('prename')}} </span>
            @endif
        </div>
        <div class="form-group mb-3">
            <input type="text" name="username" id="username"class='form-control' required autofocus placeholder="اسم المستخدم">
            @if ($errors->has('username'))
                <span class="text-danger">{{$error->first('username')}} </span>
            @endif
        </div>
        <div class="form-group mb-3">
            <input type="password" name="password" id="password"class='form-control' required autofocus placeholder="كلمة السر">
            @if ($errors->has('password'))
                <span class="text-danger">{{$error->first('password')}} </span>
            @endif
        </div>

        <div class="d-grid max-auto">
            <button type="submit" class="btn btn-dark btn-block w-25">تسجيل</button>
        </div>

    </form>
</div>
@endsection
