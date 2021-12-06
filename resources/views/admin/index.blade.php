<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('./css/index.css') }}">
    <link rel="stylesheet" href="{{ asset('./css/form.css') }}">
    <script src="{{ asset('./js/jquery-3.2.1.min.js')}}"></script>
    <link rel="stylesheet" href="{{ asset('./font/fontawesome-free-5.15.4-web/css/all.min.css') }}">
    <script src="https://unpkg.com/sweetalert2@7.18.0/dist/sweetalert2.all.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.25/datatables.min.css" />
    <title>Manager Diploma</title>
</head>

<body>
    @include('sweetalert::alert')
    <header id="header">
        <div class="icon-header">
            <img src="{{ asset('./img/logodiploma.png') }}" alt="">
        </div>
        <div class="btn-header">
            <div class="topnav-header">
                <div class="dropdown">
                    <button class="dropbtn"><i class="fas fa-user-circle"></i></button>
                    <div class="dropdown-content">
                        @auth
                            <!-- <a href="#">{{Auth::user()->email}}</a> -->
                            <a href="{{ route('logout') }}">Đăng xuất</a>
                        @else
                            <a href="#">Account</a>
                            <a href="{{ route('login') }}">Đăng nhập</a>
                        @endauth
                    </div>
                </div>
            </div>
        </div>
    </header>
    @auth
    @yield('content')
    <footer>
        <div class="col-footer">
            <h2><u></u></h2>
            <span></span>
        </div>
        <!--<div class="col-footer">
            <a href=""><i class="fab fa-facebook"></i></a>
            <a href=""><i class="fab fa-instagram-square"></i></a>
            <a href=""><i class="fab fa-skype"></i></a>
            <a href=""><i class="fas fa-envelope"></i></a>
        </div> -->
        <!-- <div class="col-footer">
            <a href=""></a>
            <a href=""></a>
            <a href=""></a>
            <a href=""></a>
        </div>-->

    </footer>
    @else
    <h1 style="text-align: center" >error! You Need login.</h1>
    @endauth
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.25/datatables.min.js"></script>
    <script src="{{ asset('./js/action.js') }}"></script>
</body>
</html>