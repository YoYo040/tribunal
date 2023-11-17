@extends('layout')
@section('title','login')
@section('content')
<div>
@if($errors->any())
    <script>
        alert("{{$errors->first()}}")
    </script>
@endif
</div>
<div id="intro" class="bg-image shadow-2-strong">
    <div class="mask d-flex align-items-center h-100" style="background-color: rgba(0, 0, 0, 0.8);">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-xl-5 col-md-8">
            <form action="{{route('login.custom')}}" method="POST" class="bg-white rounded shadow-5-strong p-5">
                @csrf
              <!-- Email input -->
              <div class="form-outline mb-4">
                  <input type="text" name="username" id="username"class='form-control' required autofocus >
                  <label for="username" class="form-label">اسم المستخدم</label>
            @if ($errors->has('username'))
                <span class="text-danger">{{$error->first('username')}} </span>
            @endif
              </div>

              <!-- Password input -->
              <div class="form-outline mb-4">
                  <input type="password" name="password" id="password"class='form-control' required autofocus placeholder="Password">
                  <label for="password" class="form-label">كلمة السر</label>
                @if ($errors->has('password'))
                    <span class="text-danger">{{$error->first('password')}} </span>
                @endif
              </div>

              <!-- 2 column grid layout for inline styling -->
              <div class="row mb-4">
                <div class="col d-flex justify-content-center">
                  <!-- Checkbox -->
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="form1Example3" checked />
                    <label class="form-check-label" for="form1Example3">
                      Remember me
                    </label>
                  </div>
                </div>

                <div class="col text-center">
                  <!-- Simple link -->
                  <a href="#!">Forgot password?</a>
                </div>
              </div>

              <!-- Submit button -->
              <button type="submit" class="btn btn-primary btn-block">تسجيل دخول</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
