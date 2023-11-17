<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
  rel="stylesheet"
/>
    <link rel="stylesheet" href="{{url('css/jquerydataTables.css')}}" />
    <script src="{{url('js/jquery.min.js')}}"></script>
    <link rel="stylesheet" href="{{ url('css/style.css') }}">
    <link rel="stylesheet" href="{{ url('css/mdb.min.css') }}">
    <link rel="stylesheet" href="{{url('css/bootstrap.min.css')}}">

     <!--google material icon-->
     <link href="https://fonts.googleapis.com/css2?family=Material+Icons"rel="stylesheet">

</head>

<body class="antialiased">



    <div id="sidebar" class=" shadow flex-shrink-0 p-3 sidebar-header" style="width: 260px;">
        <a href="/" class="d-flex align-items-center pb-3 mb-3 link-dark text-decoration-none border-bottom">
            <span class="fs-5 fw-semibold">المحكمة الابتدائية بني ملال</span>
        </a>

        <ul class="list-unstyled ps-0">
            @guest
                <li><a href="/" class="link-dark rounded">الرئيسية </a></li>
            @else
                <li class="text-center class">

                    <a   href="#famille-collapse" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        قسم قضاء الاسرة
                    </a>
                    <div class="collapse show" id="famille-collapse">
                        <ul class="list-unstyled ps-0 class-menu">
                            <li class="mb-1">
                                <a  href="#minur-collapse" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                                    سجل بحوث القاصر
                                </a>
                                <div class="collapse show" id="minur-collapse">
                                    <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small class-submenu">
                                        <li><a href="{{ route('mineurs.index') }}">الملفات</a></li>
                                        <li><a href="{{ route('mineurs.create') }}">اضافة ملف</a></li>
                                        <li><a href="{{ route('mineurs.statistic') }}">الاحصائيات</a></li>

                                    </ul>
                                </div>
                            </li>
                            <li class="mb-1">
                                <a  href="#marriage-collapse" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                                    سجل الزواج المختلط
                                </a>
                                <div class="collapse show" id="marriage-collapse">
                                    <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                                        <li><a href="{{ route('marriagesr.index') }}">السجل</a></li>
                                        <li><a href="{{ route('marriagesr.create') }}">اضافة طلب</a></li>

                                        <li><a href="{{ route('marriages.index') }}">الطلبات</a></li>
                                        <li><a href="{{ route('marriagers.statistic')}}">الاحصائيات</a></li>

                                    </ul>
                                </div>
                            </li>


                        </ul>
                    </div>

                </li>
                <li class="border-top my-3"></li>
            @endguest

        </ul>

    </div>
    <div id="content">

        <div class="top-navbar">
            <div class="xd-topbar">
                <div class="row">

                    <div class="col-10 col-md-6 col-lg-11 order-1 order-md-1">
                        <div class="xp-profilebar text-start">
                            <nav class="navbar p-0">
                                <ul class="nav navbar-nav flex-row  ">


                                    <li class="dropdown nav-item">
                                        <a class="nav-link" href="#" data-toggle="dropdown">
                                            @if (isset(Auth::user()->id) )
                                                @if (Auth::user()->image === ' ')
                                                    <i class="bx bxs-user-circle" style="width:40px; border-radius:50%;font-size: 40px;"></i>

                                                    @endif
                                                    <img src="img/user.jpg" style="width:40px; border-radius:50%;" />
                                                    <span class="xp-user-live"></span>
                                            @else
                                                    <i class="bx bxs-user-circle" style="width:40px; border-radius:50%;font-size: 40px;"></i>
                                            @endif


                                        </a>

                                        <ul class="dropdown-menu small-menu">
                                            @guest
                                            <li>
                                                <a href="/login" class="link-dark rounded">تسجيل الدخول</a>
                                            </li>
                                            @else
                                            <li class="text-center">
                                                {{Auth::user()->name}} {{Auth::user()->prename}}
                                            </li>
                                            <li><a href="{{route('userProfile')}}" class=" nav-link">
                                                الحساب
                                                    <span class="material-icons">person_outline</span>
                                                </a></li>

                                            <li><a href="/logout" class=" nav-link">
                                                تسجيل الخروج
                                                    <span class="material-icons">logout</span>
                                                </a></li>
                                            @endguest

                                        </ul>
                                    </li>


                                </ul>
                            </nav>
                        </div>
                    </div>






                    <div class="col-2 col-md-1 col-lg-1 order-2 order-md-3 align-self-center">
                        <div class="xp-menubar">
                            <span class="material-icons text-white">signal_cellular_alt</span>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="content">
            @guest()
            @else

            <div class="top-bar mb-5 w-100 d-flex p-2 shadow rounded">
                <div class="text-center col-4">
                    <p class="text-center">
                        ⵜⴰⴳⵍⴷⵉⵜ ⵏ ⵍⵎⵖⵔⵉⴱ<br>
                        ⵜⴰⵏⵙⵙⵉⵅⴼⵜ ⵏ ⵜⵎⵓⵔⴰⵢⵜ ⵜⴰⵎⴰⵜⴰⵢⵜ<br>
                        ⵜⴰⵙⵏⴱⴹⴰⵢⵜ ⵏ ⵡⴰⵍⴰⵙ ⴱⵏⵉⵎⵍⵍⴰⵍ<br>
                        ⵜⴰⵙⵏⴱⴹⴰⵢⵜ ⵜⴰⵎⵏⵣⵓⵜ ⵏ ⴱⵏⵉⵎⵍⵍⴰⵍ<br>
                        ⵜⴰⵎⵓⵔⴰⵢⵜ ⵜⴰⵎⴰⵜⴰⵢⵜ
                    </p>
                </div>
                <div class="text-center col-4">
                    <h5 class="text-center">بسم الله الرحمان الرحيم</h5>
                    <img class="w-25" src="{{ url('imgs/maroc.png') }}" alt="">
                </div>
                <div class="text-center  col-4">
                    <p class="text-center">
                        المملكة المغربية<br>
                        رئاسة النيابة العامة<br>
                        محكمة الاستئناف ببني ملال<br>
                        المحكمة الابتدائية بني ملال<br>
                        النيابة العامة

                    </p>
                </div>
            </div>
            @endguest
            @if (session('Success'))
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert">X</button>
                    {{ session('Success') }}
                </div>
            @endif
            @if (session('Errors'))
                <div class="alert alert-danger">
                    <button type="button" class="close" data-dismiss="alert">X</button>
                    {{ session('Errors') }}
                </div>
            @endif
            @yield('content')
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
    <script src="{{url('js/jquerydataTables.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>

    <script src="{{url('js/jquery-3.3.1.slim.min.js')}}"></script>
    <script src="{{url('js/popper.min.js')}}"></script>
    <script src="{{url('js/bootstrap.min.js')}}"></script>
    <script src="{{url('js/mdb.min.js')}}"></script>
    <script src="{{url('js/jquery-3.3.1.min.js')}}"></script>


    <script type="text/javascript">
        $(document).ready(function() {
            $(".xp-menubar").on('click', function() {
                $("#sidebar").toggleClass('active');
                $("#content").toggleClass('active');
            });
            $("#close").on('click', function() {
                $("#sidebar").toggleClass('active');

            });

            $('.xp-menubar,.body-overlay,#close').on('click', function() {
                $("#sidebar,.body-overlay").toggleClass('show-nav');

            });

        });
    </script>
</body>

</html>
