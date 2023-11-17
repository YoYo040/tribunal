<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <title>@yield('title')</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ url('css/style.css') }}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{url('css/bootstrap.min.css')}}">
    <!----css3---->
    <link rel="stylesheet" href="css/custom.css">


    <!--google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">


    <!--google material icon-->
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons"rel="stylesheet">

</head>

<body>
    @if ($errors->any())
        <script>
            alert($errors - > first())
        </script>
    @endif


    <div class="wrapper">

        <div class="body-overlay"></div>

        <!-------sidebar--design------------>

        <div id="sidebar">
            <div class="sidebar-header d-flex justify-content-between">
                <span id="close" class="d-lg-none  ">X</span>
                <h3><img src="{{url('imgs/maroc.png')}}" class="img-fluid" /><span>Admin Pannal</span></h3>
            </div>
            <ul class="list-unstyled component m-0">
                <li class="active">
                    <a href="#" class="dashboard">
                        لوحة التحكم
                        <i class="material-icons mx-1">dashboard</i>
                    </a>
                </li>

                <li class="">
                    <a href="{{ route('employer.index') }}" class="">
                        قسم الموظفين
                        <i class="material-icons mx-1">date_range</i>
                    </a>
                </li>


                <li class="dropdown">
                    <a href="#homeSubmenu1" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        السجلات<i class="material-icons mx-1">aspect_ratio</i>
                    </a>
                    <ul class="collapse list-unstyled menu" id="homeSubmenu1">
                        <li><a href="/">الرئيسية</a></li>
                        <li><a href="{{route('mineurs.index')}}">سجل زواج القاصر</a></li>
                        <li><a href="{{route('marriages.index')}}">سجل زواج المختلط</a></li>
                    </ul>
                </li>


                <li class="dropdown">
                    <a href="#homeSubmenu3" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        تدبير الرخص<i class="material-icons mx-1">equalizer</i>
                    </a>
                    <ul class="collapse list-unstyled menu" id="homeSubmenu3">
                        <li><a href="#">في الانتظار</a></li>
                        <li><a href="#">المرخصة</a></li>
                        <li><a href="#">المرفوضة</a></li>
                        <li><a href="#">سجل الرخص</a></li>
                    </ul>
                </li>

                <li class="dropdown">
                    <a href="#homeSubmenu3" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        الاحصائيات<i class="material-icons mx-1">equalizer</i>
                    </a>
                    <ul class="collapse list-unstyled menu" id="homeSubmenu3">
                        <li><a href="#">Pages 1</a></li>
                        <li><a href="#">Pages 2</a></li>
                        <li><a href="#">Pages 3</a></li>
                    </ul>
                </li>






            </ul>
        </div>

        <!-------sidebar--design- close----------->



        <!-------page-content start----------->

        <div id="content">

            <!------top-navbar-start----------->

            <div class="top-navbar">
                <div class="xd-topbar">
                    <div class="row">

                        <div class="col-10 col-md-6 col-lg-11 order-1 order-md-1">
                            <div class="xp-profilebar text-start">
                                <nav class="navbar p-0">
                                    <ul class="nav navbar-nav flex-row  ">


                                        <li class="dropdown nav-item">
                                            <a class="nav-link" href="#" data-toggle="dropdown">
                                                <img src="img/user.jpg" style="width:40px; border-radius:50%;" />
                                                <span class="xp-user-live"></span>
                                            </a>
                                            <ul class="dropdown-menu small-menu">
                                                <li class="text-center">
                                                    {{Auth::user()->name}} {{Auth::user()->prename}}
                                                </li>
                                                <li><a href="{{route('profile')}}" class=" nav-link">
                                                    الحساب
                                                        <span class="material-icons">person_outline</span>
                                                    </a></li>

                                                <li><a href="/logout" class=" nav-link">
                                                    تسجيل الخروج
                                                        <span class="material-icons">logout</span>
                                                    </a></li>

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
            <!------top-navbar-end----------->


            <!------main-content-start----------->
            @if (session('Success'))
                <div class="alert alert-success">
                    <button type="button" class="close mx-2" data-dismiss="alert">X</button>
                    {{ session('Success') }}
                </div>
            @endif
            @if (session('Errors'))
                <div class="alert alert-danger">
                    <button type="button" class="close mx-2" data-dismiss="alert">X</button>
                    {{ session('Errors') }}
                </div>
            @endif
            <div class="main-content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="table-wrapper">

                            @yield('adminContent')

                        </div>
                    </div>
                </div>
            </div>
            <!------main-content-end----------->
        </div>

    </div>



    <!-------complete html----------->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>

    <script src="{{url('js/jquery-3.3.1.slim.min.js')}}"></script>
    <script src="{{url('js/popper.min.js')}}"></script>
    <script src="{{url('js/bootstrap.min.js')}}"></script>
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
