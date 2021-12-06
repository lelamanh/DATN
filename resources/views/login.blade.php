<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('./css/login.css') }}">
    <link rel="stylesheet" href="{{ asset('./font/fontawesome-free-5.15.4-web/css/all.min.css') }}">
    <title>Login Diploma</title>
    <style>
        ul {
          list-style-type: none;
          margin: 0;
          padding: 0;
          overflow: hidden;
        }
        
        li {
          float: left;
        }
        
        li a {
          display: block;
          text-align: center;
          color:black;
          padding: 14px 16px;
          text-decoration: none;
        }
        
        li a:hover {
          color:blue;
        }
    </style>
</head>

<body>
    <ul>
        <li><a class="active" href="{{route('login')}}">Đăng nhập</a></li>
        <li><a href="{{route('search')}}">Tra cứu</a></li>
    </ul>
    <div class="header-login">
        <img src="./img/logodiploma.png" alt="">
        <b>/</b>
        <span><b>login</b></span>
    </div>
    @if(Session::has('success'))
        <div class="alert-success">
            <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
            <strong></strong>
        </div>
    @endif 
    @if(Session::has('error'))
        <div class="alert">
            <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
            <strong>Lỗi! Email hoặc mật khẩu không đúng.</strong>
        </div>
    @endif
    <form method="POST"  enctype="multipart/form-data" action="{{ route('postLogin')}}">
        @csrf
        <label for="">Email:</label>
        <input type="email" name="email">
        <label for="">Mật khẩu:</label>
        <input type="password" name="password">
        <div class="btn-form">
            <button class="btn-login" type="submit">Đăng nhập</button>
            {{-- <button class="btn-register" type="submit">Register</button> --}}
        </div>
    </form>

</body>

</html>