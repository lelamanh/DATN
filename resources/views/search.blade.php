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

        table, th, tr, td {
          border: 1px solid black;
          border-collapse: collapse;
          padding:0.5rem;
          text-align: center
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
        <span><b>search</b></span>
    </div>
    <form method="POST"  enctype="multipart/form-data" action="{{ route('postSearch')}}">
        @csrf
        <label for="user_accept">Số hiệu:</label>
        <input type="text" name="user_accept" required>
        <div class="btn-form">
            <button class="btn-login" type="submit">Tra cứu</button>
        </div>
    </form>
    @if (isset($diplomaofuser))
        <table style="margin-top:1rem;">
            <tr>
                <th>Số hiệu</th>
                <th>Văn bằng / Chứng chỉ</th>
                <th>Tên văn bằng / chứng chỉ</th>
                <th>Họ và tên</th>
                <th>Ngày sinh</th>
                <th>Xếp loại</th>
                <th>Ngày cấp</th>
            </tr>
            @foreach ($diplomaofuser as $item)
              <tr>
                  <td>{{$item->user_accept}}</td>
                  <td>{{$item->type}}</td>
                  <td>{{$item->field}}</td>
                  <td>{{$item->name}}</td>
                  <td>{{$item->day_of_birth}}</td>
                  <td>{{$item->rating}}</td>
                  <td>{{!is_null($item->date_issue) ? $item->date_issue : 'Chưa có'}}</td>
              </tr>
            @endforeach
        </table>
    @endif
</body>

</html>