<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('./css/index.css') }}">
    <link rel="stylesheet" href="{{ asset('./font/fontawesome-free-5.15.4-web/css/all.min.css') }}">
    <title>Manager Diploma</title>
</head>

<body>
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
                            <a href="{{ route('home.about') }}">Tài khoản</a>
                            <a href="{{ route('home.changePass') }}">Đổi mật khẩu</a>
                            <a href="{{ route('logout') }}">Đăng xuấtt</a>
                        @else
                            <a href="#">Tài khoản</a>
                            <a href="{{ route('login') }}">Đăng nhập</a>
                        @endauth
                    </div>
                </div>
            </div>
        </div>
    </header>
    @yield('content')
    <footer>
        <div class="col-footer">
            <h2><u></u></h2>
            <span></span>
        </div>
        <div class="col-footer">
            <a href=""></a>
            <a href=""></a>
            <a href=""></a>
            <a href=""></a>
        </div>

    </footer>
</body>
<script src="{{ asset('./js/action.js') }}"></script>

</html>