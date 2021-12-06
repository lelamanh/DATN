<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('/css/login.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/login.css') }}">
    <script src="{{ asset('/js/alert.js') }}"></script>
    <title>Login Diploma</title>
</head>

<body>
    <div class="header-login">
        <img src="./img/logodiploma.png" alt="">
        <b>/</b>
        <span><b>Register</b></span>
    </div>
    <form method="POST"  enctype="multipart/form-data" action="{{ route('postRegister')}}">
        @csrf
        <label for="">Email:</label>
        <input type="email" name="email">
        <label for="">Password:</label>
        <input type="password" name="password">
        <div class="btn-form">
            <button class="btn-login" type="submit" >Login</button>
            {{-- <button class="btn-register" type="submit">Register</button> --}}
        </div>
    </form>

</body>

</html>